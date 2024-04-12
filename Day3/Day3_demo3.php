<?php
	/* Dat ten file: Day3_demo3.php */

	$name = "Tr49ng Dai h9c Ha N9i";
	echo 'Ten ban dau: '.$name.'<br>';

	// Doi ky tu
	$name = str_replace('4','u',$name);
	$name = str_replace('9','o',$name);
	echo 'Ten sau khi thay doi: '.$name.'<br>';
	
	// Lay do dai chuoi
	echo 'Do dai cua ten: '.strlen($name).'<br>';

	// Lay mot doan ky tu trong chuoi
	$shortname = substr($name,7);
	echo 'Ten rut gon: '.$shortname.'<br>';

	// Lay ra loai hinh dao tao
	$level = substr($name, 7, 7);
	echo 'Loai hinh dao tao: '.$level.'<br>';
?>
