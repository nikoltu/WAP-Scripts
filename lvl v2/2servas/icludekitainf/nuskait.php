<? $kit = @explode("|",@file_get_contents("kitaaainf/$nick.ly")); 
if ($rase=="Elf"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=round(($kit[11]*1.05),1);
$medziokle=$kit[28];
}
if ($rase=="Human"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=$kit[11];
$medziokle=$kit[28];
}
if ($rase=="Dark_elf"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=$kit[11];
$medziokle=$kit[28];
}
if ($rase=="Orc"){ 
$crafting = round(($kit[25]*0.9),1);
$kepimas=$kit[37];
$medkirtyste=$kit[11];
$medziokle=round(($kit[28]*1.1),1);
}
if ($rase=="Attacer"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=$kit[11];
$medziokle=$kit[28];
}
if ($rase=="Dwarf"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=$kit[11];
$medziokle=$kit[28];
}
if ($rase=="Fisher"){ 
$crafting = $kit[25];
$kepimas=round(($kit[37]*1.1),1);
$medkirtyste=$kit[11];
$medziokle=$kit[28];
}
if ($rase=="Farmer"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=round(($kit[11]*1.05),1);
$medziokle=$kit[28];
}
if ($rase=="Elf"){ 
$crafting = $kit[25];
$kepimas=$kit[37];
$medkirtyste=round(($kit[11]*1.05),1);
$medziokle=$kit[28];
}
if ($rase=="Elf"){ 
$crafting = $kit[25];
$kepimas=round(($kit[37]*1.1),1);
$medkirtyste=round(($kit[11]*1.05),1);
$medziokle=round(($kit[28]*1.05),1);
}
if ($rase=="Crafter"){ 
$crafting = round(($kit[25]*1.2),1);
$kepimas=$kit[37];
$medkirtyste=round(($kit[11]*1.05),1);
$medziokle=$kit[28];
}

?>