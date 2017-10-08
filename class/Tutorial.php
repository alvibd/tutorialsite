<?php
require_once("DbClass.php");
class Tutorial extends DbClass
{
	
	function __construct()
	{
		parent::__construct();	
	}
//add tutorial
	function addTutorial($name, $url, $category_id, $description="N/A")
	{
		return $this->db->insert("tutorial_table", "tutorial_name, video_link, category_id, description", "'$name', '$url', '$category_id', '$description'");
	}
//editing tutorial
	function editTutorial($id, $name, $url, $description="N/A")
	{	
		$data = array(
				"tutorial_name" => $name,
				"video_link" => $url,
				//"category_id" => $category_id,
				"description" => $description
			);


		 return $this->db->updateBulk("tutorial_table", $data,"tutorial_id = ".$id);
	}
//delete tutorial
	function deleteTutorial($id)
	{
		return $this->db->delete("tutorial_table","tutorial_id", $id);
		
	}
//get tutorial by category id
	function getTutorialByCategoryId($id)
	{
		return $this->db->select("SELECT * FROM tutorial_table WHERE category_id=$id");
	}
//get all tutorial
	function getAllTutorial()
	{

		$data = $this->db->select("SELECT * FROM category_table");

		for ($i=0 ; $i<count($data); $i++)
		{
			$data[$i]["Tutorial"] = $this->getTutorialByCategoryId($data[$i]["category_id"]);
		}
	}
//get tutorial by id
	function getTutorialById($id)
	{
		return $this->db->select("SELECT * FROM tutorial_table WHERE tutorial_id=$id");
	}

}

?>