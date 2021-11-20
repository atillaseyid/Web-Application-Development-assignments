<!DOCTYPE html>
<html>
<head>
   <title>Atilla Seyid 6_1</title>
</head>
<body>
 <form method='POST'>
   <h2>Please, enter the tags:</h2>
 <input type="text" name="tags">
 <input type="submit" name="submit" value="Submit">
 </form>

<?php
$tags = $_POST['tags'];
$tagsArray = explode(",", $tags);
if(isset($_POST['submit'])){
    print_r($tagsArray);
}
?>
</body>
</html>