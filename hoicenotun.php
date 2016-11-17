</h1>
<?php

?>
<form action="<?php  $_SERVER['PHP_SELF']?>" method="post">
<input type="text" placeholder="season " name="number"/>

<input type="submit" value="calculate" />


</form>

<?php
function season($array){

foreach ($array as $value) {
    echo "$value <br>";
};}

if($_SERVER["REQUEST_METHOD"]=='POST'){
	
	$summer=array("february","march","april","may");
$rain=array("june","july","august","september","october");
$winter=array("november","december","january");

$m=$_POST['number'];

if($m=="summer"){
season($summer);
}
if($m=="rain"){
season($rain);
}
if($m=="winter"){
season($winter);
}
}

?>

</h1>