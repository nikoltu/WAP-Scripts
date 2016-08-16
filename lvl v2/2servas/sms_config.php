<?php
/*
	SMS priėmimo ir atvaizdavimo sistema pagal www.mokejimai.lt sistemą
	
	Sistema sudaro keturi failai: 
		sms_show.php - failas, kuris išveda išsaugotas žinutes vartotojui su instrukcijomis. 
		Naujausia žinutė viršuje. Faila reikėtų itraukti į reikiamą puslapio vieta:
		require_once("sms_show.php");
		
		sms_get.php - failą į kurį www.mokejimai.lt sistema turi atsiųsti jums SMS žinutė. 
		Pilnas adresas nurodomas www.mokejimai.lt sistemoje.
		
		sms_config.php - šis failas, kuriame reikia pakeisti nustatymus

		sms_log.php - failas, kuriame saugomos paskutinės gautos žinutės. Failas susikuria automatiškai
		
	Naudojimas:
		1. Pradžiai turėkite aktyvius raktažodžius iš www.mokejimai.lt.
		2. pakeiskite šiame faile esančius veikimo nustatymus pagal save
		3. įsitikinkite, kad mokejimai.lt nurodėte, kur siųsti jūsų sms žinutes
		4. patalpinkite visus tris failus viename kataloge
		5. sms_show.php failą itraukite į savo sveteinę. Jeigu reikia pakeiskite jame esanty HTML kodą.
		6. naudokitės :)
*/

//Veikimo nustatymų pradžia

$file_name = "sms_log.php"; //failas kuriame saugomos gautos žinutės. turi turėti įrašymo teises. Galima nurodyti ir pilną kelią iki failo /www/home/ ir t.t.
$sms_to_save = 10; //nustatome kiek žinučių saugoti ir rodyti.
$keyword = "lgzzreklama"; //raktažodis mokejimai.lt turi būti jau veikiantis
$number = "1679"; //numeris kuriuo vartotojai siųs SMS žinutę.
$intro_text = "Norėdami parašyti skelbimą siųskite SMS žinutę numeriu $number su raktažodžiu <b>$keyword</b>.
Žinutės pavyzdys: <b>$keyword Jūsų skelbimas</b>"; //įvadinis tekstas išvedant skelbimus

//Veikimo nustatymų pabaiga










/*  Funkcijų geriau nekeisti) */
function AddToShowList($sms_sms){ //funkcija sauganti gautas SMS žinutes i faila.
	global $file_name,$sms_to_save;
	if (file_exists($file_name)) $sms_array = GetFromFile($file_name); //pasiimame jau esančias faile žinutes masyve $sms_array
	else $sms_array = array();
	array_push($sms_array, $sms_sms);
	while (count($sms_array) > $sms_to_save) {
		array_shift($sms_array); //išmeta vieną iš masyvo pradžios. (seniausią)
	}
	if ($file = fopen ($file_name, "wb")) {
        flock($file, LOCK_EX);
        fwrite($file, "<?php //".Serialize($sms_array));
        flock($file, LOCK_UN);
        fclose($file);
        @chmod ($file_name, 0777);
	}
}

function GetFromFile($file_path) {
    if(!is_file($file_path)) return false;
    	$file = @fopen ($file_path,"rb");
        if(false == $file) return false;
        $contents = @fread($file, filesize($file_path));
        @fclose($file);
    clearstatcache();
    $info_line = substr($contents, 3);
    if($info_line != '' && $info_line[0] == 'a') {
        return unserialize($info_line);
	} else {
        return array();
	}
}
?>
