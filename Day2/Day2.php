<?php
	/**
	  * This function does nothing
	  *
	  * @param string $bar
	  * @return void
	  */
function CheckUser($User) {}

	$isPhpProgrammer = true; // boolean
	$howOldIsPhp = 15; // integer
	$pi = 3.14; // float
	$event = 'lober'; // string

    if(true){
        echo 'yes';
    } else if (false) {
        echo 'do ngu';
    } else {
        echo 'di ngu';
    }

    switch ('PHP') {
		case 'Ruby':
			echo 'No';
			break;
		case 'PHP':
			echo 'Yes';
			break;
	}

    $myVar = "Hello World!"; 
	echo $myVar;

    // <BODY>
    //     <P>
    //         <?php 
    //             $myvar = "Hello World!"; 
    //             echo $myvar;
    //         ?>
    // </BODY>
    
	echo "<HTML><BODY><P>Hello World!</P></BODY></HTML>”; 