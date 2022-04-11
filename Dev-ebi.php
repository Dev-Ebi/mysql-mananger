<?php
print("<body bgcolor = 'black'>");
/*
coded by Dev-ebi
visit [* git@github:Dev-ebi on github *]
*/
class Dev_Ebi
{
function setup($servername,$username,$password,$dbname)
{

$array_ebi = array('data'=>array(
    'sname' => $servername,
    'uname' => $username,
    'pname' => $password,
    'dname' => $dbname
));
$ebi_database = mysqli_connect($array_ebi['data']['sname']
,$array_ebi['data']['uname'],
$array_ebi['data']['pname'],
$array_ebi['data']['dname']);
if($ebi_database == true)
{
    print("<script> window.alert('connected'); </script>");
}
function ebi_t($txt)
{
    print("<center><b style = 'color:white; font-size:20px; font-style:italic; font-weight:bold; text-align:center; text-shadow:-5px 10px 10px'> $txt </b>");
}
if($ebi_database == false){
    print("<script> window.alert('error'); </script>");
    print("<body bgcolor = 'black'>");
    ebi_t(mysqli_connect_error());

}
}
function upload($tablename,$value1,$value1_data)
{
global $ebi_database;
$query = mysqli_query("INSERT INTO $tablename($value1) VALUE('$value1_data')" , $ebi_database);
}
}
function upload_photo($tablename1,$photo,$photo_value)
{
    global $ebi_database;
    $query_photo = mysqli_query("INSERT INTO $tablename1 VALUE('$photo_value')" , $ebi_database);
}
?>