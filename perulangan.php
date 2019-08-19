<?php 
//For 1
for($i= 1; $i<=10; $i++){
    echo "$i ";
}
echo"<br><br>";

//2
for($i=1; ;$i++){
    if($i>10){
        break;
    }
    echo "$i ";
}
echo"<br><br>";

//3
$i = 1;
for (; ; ) {
if ($i > 10) {
break;
}
echo "$i ";
$i++;
} echo "<br><br>";

//3
for ($i = 1; $i <= 10; print "$i ", $i++);
echo "<br><br>";

//while 1
$i=1;
while($i<=10){
    echo $i++ ;
}
echo "<br><br>";

//2
$i = 1;
while ($i <= 10):
echo "$i";
$i++;
endwhile;
echo "<br><br>";

//3
$i = 1;
while ($i <= 6) {
echo "<h$i>Heading $i</h$i>";
$i++;
}
echo "<br><br>";

//do while

$i = 1;
do {
echo "$i ";
$i+=2;
} while ($i <= 20);
echo "<br><br>";

//br and conti for
for($i= 1; $i<=10; $i++){
    if($i==3)
    continue;
    if($i==8)
    break;
    echo" $i ";
}

?>