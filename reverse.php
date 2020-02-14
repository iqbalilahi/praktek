<?php
$str = "Aku Suka Makan Nasi Padang";
$spaceCount = substr_count($str, " ");
$letterIndx = 0;

// count number of spaces and then loop
for($i=0; $i<=$spaceCount; $i++) {
  // get space positions
  $spaceIndx = strpos($str, " ", $letterIndx);
  // assign word by specifying start position and length
  if ($spaceIndx == 0) {
    $word = substr($str, $letterIndx);
  } else {
    $word = substr($str, $letterIndx, $spaceIndx - $letterIndx);
  }
  // push word into array
  $myArray[] = $word;
  // get first letter after space
  $letterIndx = $spaceIndx + 1;
}
// echo $myArray[0]." "."<br>";
// echo $myArray[0]." ".$myArray[1]."<br>";
// echo $myArray[0]." ".$myArray[1]." ".$myArray[2]."<br>";
// echo $myArray[0]." ".$myArray[1]." ".$myArray[2]." ".$myArray[3]."<br>";
// echo $myArray[0]." ".$myArray[1]." ".$myArray[2]." ".$myArray[3]." ".$myArray[4]."<br><br>";
for($x=0;$x<count($myArray);$x++){	
	for ($i=0; $i<=$x; $i++) { 
		echo $myArray[$i]." ";
	} echo "<br>";
}

// reverse the array
$reverse = array_reverse($myArray);
// echo $reverse[0]." "."<br>";
// echo $reverse[0]." ".$reverse[1]."<br>";
// echo $reverse[0]." ".$reverse[1]." ".$reverse[2]."<br>";
// echo $reverse[0]." ".$reverse[1]." ".$reverse[2]." ".$reverse[3]."<br>";
// echo $reverse[0]." ".$reverse[1]." ".$reverse[2]." ".$reverse[3]." ".$reverse[4]."<br><br>";
for($x=0;$x<count($reverse);$x++){	
	for ($i=0; $i<=$x; $i++) { 
		echo $reverse[$i]." ";
	} echo "<br>";
} 

// echo it out
foreach($reverse as $rev) {
  echo $rev." ";
}
?>