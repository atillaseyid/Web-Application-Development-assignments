<!DOCTYPE html>
<html>
<head>
   <title>Atilla Seyid LLYMTC</title>
   </head>
   
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
$favPet = NULL;
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");


if(isset($_POST['submit']) && $username != null && 
   $password != null){
     $fn = fopen("password.txt","r");
     while(!feof($fn)){
       $result = fgets($fn);
       $lineData = explode("*",$result);
       if($lineData[0] == $username && $lineData[1] == $password){
          $favPet = $lineData[2];
          if(strpos($favPet, 'dog') !== false){
            $styleBlock = sprintf('<img src="https://clipart-best.com/img/dog/dog-clip-art-67.png" width="200px" alt="dog"></img>');    
        }else{
            $styleBlock = sprintf('<img src="https://clipart-best.com/img/cat/cat-clip-art-67.png" width="200px" alt="cat"></img>');
        }
        echo $styleBlock;

        $date = date('Y-m-d');
            $time = date("H:i"); 
            $log = fopen("log.csv", "a");
            $text = $username.';'.$date.';'.$time; 
            fwrite($log, $text."\n");
            fclose($log);
            break;
       }
     }
     fclose($fn);
   }
?>

</html>