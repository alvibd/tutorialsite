<?php
require_once("DbClass.php");
class Category extends DbClass
{
	
	function __construct()
	{
		parent::__construct();	
	}
//adding category
	function addCategory($name)
	{
		return $this->db->insert("category_table", "category_name", "'$name'");
	}
//editing category
	function editCategory($id, $name)
	{
		return $this->db->update("category_table", "category_name" , "'$name'","category_id", $id);
	}
//delete category, check relationship constraints
	function deleteCategory($id)
	{
		$val=$this->db->select("SELECT COUNT(*) FROM tutorial_table WHERE category_id=".$id)[0]["COUNT(*)"];
		if($val>0)
			return "This category contains Videos. It can't be deleted now";
		else{
			return $this->db->delete("category_table","category_id", $id);
		}
	}
//get all category
	function getAllCategory()
	{
		return $this->db->select("SELECT * FROM category_table");
	}
//get catrgory name by id
	function getCategoryName($id)
	{
		$x = $this->db->select("SELECT category_name FROM category_table WHERE category_id = ".$id);
		if(isset($x[0]["category_name"]))
			return $x[0]["category_name"];
		else return false;
	}
}

?>