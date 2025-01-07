<?php

// A fájl elérési útja
print_r( $_POST );
$fajl = "vendeg.txt";

// Ellenőrizd, hogy létezik-e a fájl, ha nem, hozz létre egy alapértelmezett fájlt
if (!file_exists($fajl)) {
    $fp = open( $fajl, "w");
    $sor = fgets( $fp );
    print $sor;
    fclose( $fp );
}
//if ( $_POST['nev']=="" ) die( "<script> alert('Nem adtad meg a neved') </script>");
//if ( strlen( $_POST['komment'])<10 ) die( "<script> alert('10nél több karaktert írj') </script>");
// Beolvassuk a fájl tartalmát
$content = file($fajl);
$array = explode(";", trim($content[0])); // Az adatokat ; alapján bontjuk

// A változók inicializálása
$komment = (int)$array;
$email = (int)$array;
$nev = (int)$array;
$vedelem = (int)$array;



// Ha a felhasználó szavazott

if (isset($_POST['vote'])) {
    $vote = (int)$_POST['vote'];

    // A szavazat hozzáadása a megfelelő változóhoz
    if (!$_SESSION['ittjártam']){
        if ($vote == 0) {
            $bab++;
        } elseif ($vote == 1) {
            $gulyas++;
        } elseif ($vote == 2) {
            $para++;
        } elseif ($vote == 3) {
            $tojas++;
        }
    }


    // Az új szavazatokat összefűzzük és elmentjük a fájlba
    $insertvote = $komment . ";" . $email . ";" . $nev;
    file_put_contents($fajl, $insertvote);

    // Session beállítása, hogy ne lehessen többször szavazni ugyanazzal a böngészővel
    $_SESSION['ittjártam'] = true;
}

// Ha a felhasználó már szavazott, jelenítse meg az eredményeket
if (!isset($_SESSION['ittjártam'])) {
    echo "Nem jelent meg.";
} else {
    // Ha a felhasználó még nem szavazott, akkor jelenítse meg a szavazólapot
    echo "
    <form action='' method='post' class='kommentdoboz' enctype='multipart/form-data'>
        
        <label for='fname'>Új hozzászólás:</label>
        <textarea name='komment' rows='4' cols='50'></textarea>

        <label for='fname'>E-mail cím:</label>
        <input type='text' name='email' name='fname'><br><br>

        <label for='fname'>Név:</label>
        <input type='text' name='nev' name='fname'><br><br>

        <label for='fname'>Fájl:</label>
        <input type='file' name='fajl'><br><br>

        <input type='submit' value='Elküldés' style='margin: 24px 0 0 24px;'>
    </form>";
    //str_replace("\n\r". "<br>", $_POST['komment'])
    //$kep $_FILES["fajl"];
    $insertvote = $_POST["komment"] . ";" . $_POST["email"] . ";" . $_POST["nev"] . ";" . date("Y-m-d H:i:s") . "\n";
    $megnyit = fopen($fajl, "a");
    fwrite($megnyit, $insertvote);
    fclose($megnyit);
    // file_put_contents($fajl, $insertvote);
    // print "
    //             <script> parent.location.href = parent.location.href </script>
    // ";
}
?>
