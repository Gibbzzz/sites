<?php session_start(); ?>
<?php include 'header.php'; ?>
<div id="task6">
    <p>Сделать страничку, на которой будет поле, в которое необходимо ввести город,<br>
        а после нажать на кнопку показать, в этот момент необходимо вывести пользователю<br>
        информацию о этом городе, собрав данные "на лету" (AJAX)<br>
        – население количество (википедия)<br>
        – погода сегодня (любое открытое API погодного сервиса)
    </p>
<form action="task_6.php" name = "form1" method="post">
    <label for="city">Введите город: </label>
    <input type="text" name="city"><br />
    <p><input type="submit" name="submit" value="Показать"/></p>
</form>

<?php
if(isset($_POST['submit'])){
$city = $_POST['city'];// город.
    echo $city."<br>";?>

    <div id = "new-projects"></div>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script>
        function creatAjax() {
            $("#new-projects").load("https://ru.wikipedia.org/wiki/<?php echo $city ?>  #P1082");
           /* console.log( response ); // строка соответствующая данным, присланным от сервера
            console.log( status ); // строка соответствующая статусу запроса
            console.log( xhr.status ); // числовой код состояния ответа от сервера
            console.log( xhr.statusText ); // сообщение о состоянии ответа*/

        }
    </script>
    <button type="button" onclick="creatAjax()">Население</button>

<?php
$mode = "json"; // в каком виде мы получим данные
$units = "metric"; // Единицы измерения- metric
$lang = "ru"; // язык
$countDay = 3; // количество дней
$appid = '9f7b7cbcbb86b3a25ed522182ba156f8'; //id при регистрации на openweathermap.org

// формируем урл для запроса
$url = "http://api.openweathermap.org/data/2.5/forecast/daily?APPID=$appid&q=$city&mode=$mode&units=$units&cnt=$countDay&lang=$lang";
// делаем запрос к апи
$data = @file_get_contents($url);
// если получили данные
if($data){
    // декодируем полученные данные
    $dataJson = json_decode($data);
    // получаем только нужные данные
    $arrayDays = $dataJson->list;
    // выводим данные
    foreach($arrayDays as $oneDay){
        //$icon = "http://openweathermap.org/img/w/".$oneDay->weather[0]->icon.".png<br/>";
        ?>
        <img src="<?php echo "http://openweathermap.org/img/w/".$oneDay->weather[0]->icon.".png";?>">
        <?php
        echo "<br/>"."Дата: " .date("d.M.Y",$oneDay->dt)."<br/>";
        echo "Утром: " . $oneDay->temp->morn . "<br/>";
        echo "Днем: " . $oneDay->temp->day . "<br/>";
        echo "Вечером: " . $oneDay->temp->eve . "<br/>";
        echo "Ночью: " . $oneDay->temp->night . "<br/>";
        echo "Скорость ветра: " . $oneDay->speed . "<br/>";
        echo "Погода: " . $oneDay->weather[0]->description . "<br/>";
        echo "Давление: " . $oneDay->pressure . "<br/>";
        echo "Влажность: " . $oneDay->humidity . "%<br/>";
        echo "<hr/>";
    }
}else{
    echo "Error";
}

}

?>

</div>