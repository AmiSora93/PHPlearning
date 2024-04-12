<?php
	// Demo 1

	const HELLO = 'Hello, Hita' ;	
	const SoLuong = 17;
	
	echo HELLO.' '.SoLuong.' thanh vien'; // Hien ra gi?
    
    // Tu dong khai bao Index
	    $a[] = 'mot' ; // [0] => mot;
    	$a[] = 'hai' ; // [1] => hai

        // Khai bao Index chuan

	    $a[0] = 'mot' ; // [0] => mot
    	$a[1] = 'hai' ; // [1] => hai
        
        // Cach khac de khai bao gia tri cho mang
        $a = array('mot', 'hai');

        // Cach khac de khai bao gia tri cho mang: dung index
	    $a = array(0 => 'mot', 1 => 'hai');
        
        // Cach khac de khai bao gia tri cho mang: dung mot index khac (so la ma, alphabet)
        $a['a'] = 'mot';
        $a['b'] = 'hai';

        $b['i'] = 'mottttt';
        $b['ii'] = 'haiiiiii';
        $b['iii'] = 'baaaaa';
        $b['iv'] = 'bonnnn';

        // Demo 2 – thử các toán tử so sánh
    	if ( 2 == 3) { echo 'No' ; }
        if ( 3 == '3' ) { echo 'Yes<br>' ; }
        if ( 2 != 3) { echo 'Yes<br>'; }

        	// Demo 2 – thử các toán tử so sánh
	
	    echo "---------------<br>";
    	if ( 3 === '3' ) { echo 'No' ; }
        if ( 3 === 3) { echo 'Yes <br>' ; }
        if ( 3 !== 4) { echo 'Yes<br>' ; }

        	// Demo 3 – Thu nghiem cac toan tu so sanh	
            // NOT 	
            if ( !true) {
		     echo 'No' ;
             }	
            // AND 	
            if ( true && false) {
             echo 'No' ;
            } 	
             // OR 	
            if ( true || false) {
            echo 'Yes' ;
        }
    ?>
