<?php session_start(); ?>
<?php include 'header.php'; ?>
<div id="task5">
    <p>Нужно написать функцию get_breadcrumbs(), которая будет выводить навигационную цепочку по ID элемента</p>
    <div>
        <ol>
            <li>Главная</li>
            <li>Каталог</li>
            <li class="tel">Телефоны</li>
            <li class="f">iPhone 6</li>
            <li class="f">iPhone 5</li>
            <li class="f">iPhone 4</li>
            <li class="f">Аксессуары</li>
            <li class="pad">Планшеты</li>
            <li class="f">iPad Air</li>
            <li class="f">iPad Mini</li>
            <li class="f">Аксессуары</li>
            <li class="net">Ноутбуки</li>
            <li class="f">Macbook Air</li>
            <li class="f">Macbook Pro</li>
            <li class="f">Аксессуары</li>
            <li>О компании</li>
        </ol>
    </div>
<form name="get_Breadcrumbs" action="task_5.php" method="post">
    <label for="enter_id">Введите ID: </label>
    <input name="enter_id" id="enter_id" class="textField" type="text">
    <P>
        <input type="submit" name="submit" value="Расчитать">
    </P>
</form>


<?php
$arr = array(
    array('id' => 0 , 'parent' =>0 , 'title' => 'Главная'),
    array('id' => 1 , 'parent' =>0 , 'title' => 'Главная'),
    array('id' => 2 , 'parent' =>0 , 'title' => 'Каталог'),
    array('id' => 3 , 'parent' =>2 , 'title' => 'Телефоны'),
    array('id' => 4 , 'parent' =>3 , 'title' => 'iPhone 6'),
    array('id' => 5 , 'parent' =>3 , 'title' => 'iPhone 5'),
    array('id' => 6 , 'parent' =>3 , 'title' => 'iPhone 4'),
    array('id' => 7 , 'parent' =>3 , 'title' => 'Аксессуары'),
    array('id' => 8 , 'parent' =>2 , 'title' => 'Планшеты'),
    array('id' => 9 , 'parent' =>8 , 'title' => 'iPad Air'),
    array('id' => 10 , 'parent' =>8 , 'title' => 'iPad Mini'),
    array('id' => 11 , 'parent' =>8 , 'title' => 'Аксессуары'),
    array('id' => 12 , 'parent' =>2 , 'title' => 'Ноутбуки'),
    array('id' => 13 , 'parent' =>12 , 'title' => 'Macbook Air'),
    array('id' => 14 , 'parent' =>12 , 'title' => 'Macbook Pro'),
    array('id' => 15 , 'parent' =>12 , 'title' => 'Аксессуары'),
    array('id' => 16 , 'parent' =>0 , 'title' => 'О компании')
);


if(isset($_POST['submit'])){
$id = $_POST['enter_id'];
function get_Breadcrumbs($arr,$id){
    if(!$id)return false;
    $breadcrumbs_arr = array();
    for($i = 2; $i<count($arr); $i++){
        if($arr[$id]){
            $breadcrumbs_arr[$arr[$id]['id']] = $arr[$id]['title'];
            $id = $arr[$id]['parent'];
        }
    }
    print_r($breadcrumbs_arr);
}

get_Breadcrumbs($arr, $id);
}
?>
</div>
