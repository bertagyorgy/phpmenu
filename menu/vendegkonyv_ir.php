<?php

    /*print_r( $_POST ) ;
    print "<hr>" ;
    print_r( $_FILES ) ;*/

    $fajlnev = "vendegkonyv.txt" ;
    if( !file_exists($fajlnev) )
    {
	$fp = fopen( $fajlnev , "w" ) ;
	fclose( $fp ) ;
    }

    if( $_POST['nev']=="" )            die( "<script>  alert('Nem adtad meg a neved!')     </script>" );
    if( mb_strlen($_POST['uzi'])<10 )  die( "<script>  alert('Írj legalább 10 karaktert!') </script>" );

    $kep = $_FILES['fajl'] ;
    $sz  = date("Y-m-d H:i:s") . ";" . $_POST['nev'] . ";" . str_replace( "\r\n" , "<br>" , $_POST['uzi'] ) . ";" . $kep['name'] . "\r\n"  ;

    $fp = fopen( $fajlnev , "a" ) ; 
    fwrite( $fp , $sz ) ;
    fclose( $fp ) ;


    print "
		<script>  parent.location.href = parent.location.href </script>

    " ;


?>