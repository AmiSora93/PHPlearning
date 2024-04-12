<?php
	$a = 10;
	$b = $a + 1;  // ket qua = 11
	$c = $a - 1;   // ket qua = 9
	$d = $a * 5;  // ket qua = 50
	$e = $a / 2;  // ket qua = 5
	$f = $a % 3;  // ket qua = 1
    echo $a . $b . $c;
    
    $g = ($d - ($a + $b + $c) + $e + $f) ;

	echo "\n G = $g";

    $myString = 'HanU' .  'FIT'; // Hien thi: HanU FIT
	$myString .= '.Muon nam'; // Hien thi: HanU FIT. Muon nam

    $first = '   Chu      ';
	$middle = '          Van            ';
	$last = '       Quenh         ';
	$fullname = $first . $middle . $last;

	echo $fullname

?>
