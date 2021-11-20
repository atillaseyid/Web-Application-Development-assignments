<!DOCTYPE html>
<html>
<body>
<?php
function fact($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * fact($n-1);
    }
	}
print_r(fact(4)."\n");

echo "<br>";

function Prime($n)
{
 for($i=2; $i<$n; $i++)
   {
      if($n %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = Prime(4);
if ($a==0)
echo 'Not Prime Number!'."\n";
else
echo 'Prime Number..'."\n";

echo "<br>";

$string = "Atilla";
echo "The reverse string of $string is " . strrev ( $string );

echo "<br>";


function array_sort($a)
{
 for($i=0;$i< count($a);++$i)
      {
          $min = $i;
        for($y=$i+1;$y< count($a);++$y)
            {
              if($a[$y] < $a[$min] ) 
              {
                  $temp = $a[$min];
                  $a[$min] = $a[$y];
                  $a[$y] = $temp;
              }
            }
      }
      return $a;
 }
$a = array(8,68,2478,36988,846);
print_r(array_sort($a));

echo "<br>";

function isLowercase($str1)
   {
    for ($s = 0; $s < strlen($str1); $s++) {
	      if (ord($str1[$s]) >= ord('A') &&
          ord($str1[$s]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(isLowercase('atilla'));
var_dump(isLowercase('atIlla'));

echo "<br>";

function isPalindrome($string) 
{
  if ($string == strrev($string))
      echo 'yes';
  else
      echo 'no';
}
echo isPalindrome('ANA')."\n";

?>
</body>
</html>