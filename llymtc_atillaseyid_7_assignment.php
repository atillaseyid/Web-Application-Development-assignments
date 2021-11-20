<!DOCTYPE html>
<html>
<head>
   <title>Data Submission</title>
   </head>
   <body>
   <form method='POST'>
      <h2>Save to .csv</h2>
      <label for="name">Name:</label><br/>
      <input type="text" name="name">
      <br/>
      <label for="birthday">Birthday:</label><br/>
      <input type="date" name="birthday">
      <br/>
      <label for="country">Country:</label><br/>
      <input type="text" name="country">
      <br/>
      <input type="submit" name="submit" value="Submit">
    </form>

<?php
$name = $_POST["name"];
$birthday = $_POST["birthday"];
$country = $_POST["country"];

if(isset($_POST["submit"]) && $name != null && 
   $birthday != null && $country != null){

    $file_open = fopen("data_info.csv", "a");
    $form_data = array(
    'name'  => $name.",",
    'birthday'  => $birthday.",",
    'country' => $country);
    fputcsv($file_open, $form_data);
}
?>
</body>
</html>