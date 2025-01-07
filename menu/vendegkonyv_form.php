  <h2>Vendégkönyv</h2>

    <h3>Kérlek, mondd el a véleményed!</h3>

    <form action='vendegkonyv_ir.php' method='post' target="kisablak" enctype='multipart/form-data'>

	Neved: <input type='text' name='nev'><br><br>

	Üzeneted:<br>
	<textarea rows=8 cols=48 name='uzi'></textarea><br><br>

	Kapcsolódó kép: <input type='file' name='fajl'><br><br>

	<input type='submit' value='Vélemény elküldése'>

    </form>

<hr>

<?php
	$fajlnev = "vendegkonyv.txt" ;
	if( file_exists($fajlnev) )
	{
		$fp = fopen( $fajlnev , "r" ) ;

//		$tartalom = fread( $fp , filesize($fajlnev) ) ;
		while( $sor = fgets( $fp ) )
		{
		    $adatok = explode( ";" , $sor ) ;
		    print "

			<div style='background-color:gray; margin:12px; '>
				<div style='float:right;'>$adatok[0]</div>
				<b>$adatok[1]</b><hr>
				<i>$adatok[2]</i>
			</div>

		    " ;
		}

		fclose($fp) ;

	}
?>







