<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tryit Editor</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/trystyle.css">
    </head>
    <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <?php include('include/nav.php'); ?>
    </nav>
        <table id="table-body">
            <tr>
                <td>
                    <div class="tag">HTML (Body)</div>
                    <textarea id="html" class="content" ></textarea>
                </td>
                <td>
                    <div class="tag">CSS</div>
                    <textarea id="css" class="content" ></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="tag">JavaScript</div>
                    <textarea id="js" class="content" ></textarea>
                </td>
                <td>
                    <div class="tag">Output</div>
                    <iframe id="output"></iframe>
                </td>
            </tr>
        </table>
    </body>
</html>
<script type="text/javascript" src="js/tryEditor.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>