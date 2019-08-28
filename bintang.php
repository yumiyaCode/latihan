
<?php
echo"<fieldset>";
if(isset($_POST['simpan'])){
$input=$_POST['bintang'];

for ($i=0; $i < $input ; $i++) {
for ($j=$input; $j > $i; $j--) {
echo "&nbsp;";
}
for ($k=$input; $k < $i; $k++) {
echo "*";
}
for ($l=0; $l <= $i ; $l++) {
echo "*";
}
echo "<br>";
}
echo"bintang anda = ".$input."</fieldset>";
}
