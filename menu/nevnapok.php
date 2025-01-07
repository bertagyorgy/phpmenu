<?php
function nevnap($ev, $honap, $nap){
    $napok = array();

    $napok[1] = array("", "Fruzsina","Ábel","Genovéva és Benjámin","Titusz és Leona",  
                             "Simon","Boldizsár","Attila és Ramóna","Gyöngyvér","Marcell",  
                             "Melánia","Ágota","Ernő","Veronika","Bódog","Lóránt és Loránd",  
                             "Gusztáv","Antal és Antónia","Piroska","Sára, Márió","Fábián és Sebestyén",  
                             "Ágnes","Vince és Artúr","Zelma és Rajmund","Timót","Pál","Vanda és Paula",  
                             "Angelika","Károly és Karola","Adél","Martina és Gerda","Marcella");

  if (ev % 4 != 0)
    $napok[2] = array("", "Ignác","Karolina és Aida","Balázs","Ráhel és Csenge","Ágota és Ingrid",  
                             "Dorottya és Dóra","Tódor és Rómeó","Aranka","Abigél és Alex","Elvira",  
                             "Bertold és Marietta","Lívia és Lídia","Ella és Linda","Bálint és Valentin",  
                             "Kolos és Georgina","Julianna és Lilla","Donát és Vilté","Bernadett","Zsuzsanna",  
                             "Aladár és Álmos","Eleonóra","Gerzson","Alfréd",  
                             "Mátyás","Géza","Edina","Ákos és Bátor","Elemér","","","");
  else  
    $napok[2] = array("", "Ignác","Karolina és Aida","Balázs","Ráhel és Csenge","Ágota és Ingrid",  
                             "Dorottya és Dóra","Tódor és Rómeó","Aranka","Abigél, Alex","Elvira",  
                             "Bertold és Marietta","Lívia és Lídia","Ella és Linda","Bálint és Valentin",  
                             "Kolos és Georgina","Julianna és Lilla","Donát","Bernadett","Zsuzsanna",  
                             "Aladár és Álmos","Eleonóra","Gerzson","Alfréd",  
                             "Szökőnap","Mátyás","Géza","Edina","Ákos és Bátor","Elemér","","");

    $napok[3] = array("", "Albin","Lujza","Kornélia","Kázmér","Adorján és Adrián","Leonóra és Inez",  
                             "Tamás","Zoltán","Franciska és Fanni","Ildikó","Szilárd",  
                             "Gergely","Krisztián és Ajtony","Matild","Kristóf",  
                             "Henrietta","Gertrúd és Patrik","Sándor és Ede","József és Bánk","Klaudia",  
                             "Benedek","Beáta és Izolda","Emőke","Gábor és Karina","Irén és Irisz",  
                             "Emánuel","Hajnalka","Gedeon és Johanna","Auguszta","Zalán","Árpád");  

    $napok[4] = array("", "Hugó","Áron","Buda, Richárd","Izidor","Vince","Vilmos és Bíborka",  
                             "Herman","Dénes","Erhard","Zsolt","Leó és Szaniszló","Gyula","Ida",  
                             "Tibor","Anasztázia és Tas","Csongor","Rudolf","Andrea és Ilma","Emma",  
                             "Tivadar","Konrád","Csilla és Noémi","Béla","György","Márk","Ervin",  
                             "Zita","Valéria","Péter","Katalin és Kitti","" );

    $napok[5] = array("", "Fülöp és Jakab","Zsigmond","Tímea és Irma","Mónika és Flórián",  
                             "Györgyi","Ivett és Frida","Gizella","Mihály","Gergely","Ármin és Pálma",  
                             "Ferenc","Pongrác","Szervác és Imola","Bonifác","Zsófia és Szonja",  
                             "Mózes és Botond","Paszkál","Erik és Alexandra","Ivó és Milán",  
                             "Bernát és Felícia","Konstantin","Júlia és Rita","Dezső","Eszter és Eliza",  
                             "Orbán","Fülöp és Evelin","Hella","Emil és Csanád","Magdolna",  
                             "Janka és Zsanett","Angéla és Petronella" );

    $napok[6] = array("", "Tünde","Kármen, Anita","Klotild","Bulcsú","Fatime","Norbert és Cintia",  
                             "Róbert","Medárd","Félix","Margit és Gréta","Barnabás","Villő",  
                             "Antal és Anett","Vazul","Jolán és Vid","Jusztin","Laura és Alida",  
                             "Arnold és Levente","Gyárfás","Rafael","Alajos és Leila","Paulina",  
                             "Zoltán","Iván","Vilmos","János és Pál","László","Levente és Irén",  
                             "Péter és Pál","Pál","" );

    $napok[7] = array("", "Tihamér, Annamária","Ottó","Kornél és Soma","Ulrik","Emese és Sarolta",  
                             "Csaba","Appolónia","Ellák","Lukrécia","Amália","Nóra és Lili",  
                             "Izabella és Dalma","Jenő","Őrs és Stella","Henrik és Roland","Valter",  
                             "Endre és Elek","Frigyes","Emília","Illés","Dániel és Daniella",  
                             "Magdolna","Lenke","Kinga és Kincső","Kristóf és Jakab","Anna és Anikó",  
                             "Olga és Liliána","Szabolcs","Márta és Flóra","Judit és Xénia","Oszkár" );

    $napok[8] = array("", "Boglárka","Lehel","Hermina","Domonkos és Dominika","Krisztina",  
                             "Berta és Bettina","Ibolya","László","Emőd","Lőrinc",  
                             "Zsuzsanna és Tiborc","Klára","Ipoly","Marcell","Mária","Ábrahám",  
                             "Jácint","Ilona","Huba","István","Sámuel és Hajna",  
                             "Menyhért és Mirjam","Bence","Bertalan","Lajos és Patrícia","Izsó",  
                             "Gáspár","Ágoston","Beatrix és Erna","Rózsa","Erika és Bella" );

    $napok[9] = array("", "Egyed és Egon","Rebeka és Dorina","Hilda","Rozália","Viktor és Lőrinc",  
                             "Zakariás","Regina","Mária és Adrienn","Ádám","Nikolett és Hunor",  
                             "Teodóra","Mária","Kornél","Szeréna és Roxána","Enikő és Melitta","Edit",  
                             "Zsófia","Diána","Vilhelmina","Friderika","Máté és Mirella","Móric",  
                             "Tekla","Gellért és Mercédesz","Eufrozina és Kende","Jusztina","Adalbert",  
                             "Vencel","Mihály","Jeromos","" );

    $napok[10]= array("", "Malvin","Petra","Helga","Ferenc","Aurél","Brúnó és Renáta","Amália",  
                             "Koppány","Dénes","Gedeon","Brigitta","Miksa","Kálmán és Ede","Helén",  
                             "Teréz","Gál","Hedvig","Lukács","Nándor","Vendel","Orsolya","Előd",  
                             "Gyöngyi","Salamon","Blanka és Bianka","Dömötör",
                             "Szabina","Simon és Szimonetta","Nárcisz","Alfonz","Farkas" );

    $napok[11]= array("", "Marianna","Achilles","Győző","Károly","Imre","Lénárd","Rezső",  
                             "Zsombor","Tivadar","Réka","Márton","Jónás és Renátó","Szilvia",  
                             "Aliz","Albert és Lipót","Ödön","Hortenzia és Gergő","Jenő","Erzsébet",  
                             "Jolán","Olivér","Cecília","Kelemen és Klementina","Emma","Katalin",  
                             "Virág","Virgil","Stefánia","Taksony","András és Andor","" );

    $napok[12]= array("", "Elza","Melinda és Vivien","Ferenc és Olívia","Borbála és Barbara","Vilma",  
                             "Miklós","Ambrus","Mária","Natália","Judit","Árpád","Gabriella",  
                             "Luca és Otília","Szilárda","Valér","Etelka és Aletta","Lázár és Olimpia",  
                             "Auguszta","Viola","Teofil","Tamás","Zéno","Viktória","Ádám és Éva",  
                             "Eugénia","István","János","Kamilla",  
                             "Tamás és Tamara","Dávid","Szilveszter" );

  return napok[ho][nap]  

}
?>