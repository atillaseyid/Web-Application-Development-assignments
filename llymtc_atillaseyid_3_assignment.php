<!DOCTYPE html>
<html>
    <head>
    <style>
    table td{
        border : 0.5px solid black;
        width :20px;
        height :18px;
        padding :8px;
        text-align : center;
        background-color: yellow;
            }
    table tr:first-child td{
    border-bottom : 2.5px solid black;
    }
    table tr td:first-child{
    border-right : 2.5px solid black;
    }
    </style>
    </head>
<body>
<table align="left" cellspacing="0">
<?php
for($i = 0; $i < 10; $i++){
	echo "<tr>";
    for ($j = 0;$j < 10; $j++){
		if($i == 0 && $j == 0){
			echo "<td> </td>";
		}
		elseif($i == 0){
			echo "<td>$j</td>";
		}
		elseif($j == 0){
			echo "<td>$i</td>";
		}
		else{
		$result = $i * $j;
            echo "<td>$result</td>";
		}
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>