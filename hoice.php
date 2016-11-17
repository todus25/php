</h1>
<?php

?>
<form action="<?php  $_SERVER['PHP_SELF']?>" method="post">
<input type="text" placeholder="season " name="number"/>

<input type="submit" value="calculate" />


</form>

<?php
function season($m){

$summer=array("february","march","april","may");
$rain=array("june","july","august","september","october");
$winter=array("november","december","january");
if($m==1){
foreach ($summer as $value) {
    echo "$value <br>";
}}
if($m==2){
foreach ($rain as $value) {
    echo "$value <br>";
}}
if($m==3){
foreach ($winter as $value) {
    echo "$value <br>";
}}
}
if($_SERVER["REQUEST_METHOD"]=='POST'){
$n=$_POST['numb'];
$m=$_POST['number'];
if($m=="summer"){
$n=1;
}
if($m=="rain"){
$n=2;
}
if($m=="winter"){
$n=3;
}
season($n);




}
?>

</h1>