<!DOCTYPE html>
<html>
<head>
   <title>Atilla Seyid 8</title>
   </head>
   <body>
   <form method='POST'>
        <h2>Login</h2>
        <label for="username">Username:</label><br/>
        <input type="text" name="username">
        <br/>
        <label for="password">Password:</label><br/>
        <input type="password" name="password">
        <br/>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
$username = $_POST["username"];
$password = $_POST["password"];

if(isset($_POST["submit"]) && $username != null && 
   $password != null){

    $file_open = fopen("adat.csv", "r");

    while (($data = fgetcsv($file_open)) !== FALSE) {  
      
      if($username == $data[0] && $password == $data[1]){
        $color = $data[2];
	    $bg_color = sprintf("
              <style>
                  body {
                  background-color:%s
                        }
              </style>", $color);
            echo $bg_color;
            break;	    
    }
  }
}
?>
</body>
</html>