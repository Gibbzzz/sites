<?php session_start(); ?>
<?php include 'header.php'; ?>
<div id="task4">
<p>Вывести 3 максимальных значения из 10 рандомных</p>
<?php
/*Вывести 3 максимальных значения из 10 рандомных*/
$arr = array();
print("Array = [");
for($i=0; $i<10; $i++){
    $arr[$i] = rand(0,100);
    if($i < 9){
        print($arr[$i].", ");
    }else print($arr[$i]);
}
print("]");
echo "</br>";
//сортируем массив и выводим первые 3 значения
rsort($arr);
for($i=0 ; $i<3; $i++){
    echo $arr[$i]."<br/>";
}
?>
</div>


