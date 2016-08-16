<?php
$skgyn="ok";
for($gg=0; $gg<$ski; $gg++){
if($skill[$gg]=="defense"){
$skgyn=$gg+1;}}
if($skgyn!=="ok"){

if($level[$skgyn-1]=="1"){
$skdef=0.9;}
elseif($level[$skgyn-1]=="2"){
$skdef=0.8;}
elseif($level[$skgyn-1]=="3"){
$skdef=0.7;}
else {
$skdef=1;}}
?>