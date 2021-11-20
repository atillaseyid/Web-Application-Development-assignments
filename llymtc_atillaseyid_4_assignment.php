<?php
//1st program
$sentence = "Budapest is very beautiful city."."\n";
echo(strtoupper($sentence));
echo(strtolower($sentence));
echo(ucfirst($sentence));
echo(ucwords($sentence));

//2nd program
$sample_time = "082307";
echo substr(chunk_split($sample_time, 2, ':'), 0, -1)."\n";


//3rd program
$sentence = "The quick brown fox jumps over the lazy dog.";
if(strpos($sentence, 'jumps') > -1){
	echo "True\n";
}
else{
	echo "False\n";
}

//4th program
$url = "www.example.com/public_html/index.php";
$file_sign_index = strpos($url, 'index.php');
echo substr($url,$file_sign_index,strlen($url) - 1);
echo "\n";

//5th program
$email = 'rayy@example.com';
$email_sign_index = strpos($email, '@');
echo substr($email,0,$email_sign_index);
?>