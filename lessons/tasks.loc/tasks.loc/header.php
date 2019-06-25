<?php session_start(); ?>
<link href="style.css" rel="stylesheet"  type="text/css">
<script>
    onload = function ()
    {
        for (var lnk = document.links, j = 0; j < lnk.length-1; j++)
            if (lnk [j].href == document.URL) lnk [j].style.textDecoration = 'underline blue';
    }
</script>
<header>
    <div id="top"></div>
    <div id="menu">
        <h1 id="logo">ЛОГО</h1>
        <ul>
            <li><a href="index.php">Задание 1</a> </li>
            <li><a href="task_2.php">Задание 2</a> </li>
            <li><a href="task_3">Задание 3</a> </li>
            <li><a href="task_4.php">Задание 4</a> </li>
            <li><a href="task_5.php">Задание 5</a> </li>
            <li><a href="task_6.php">Задание 6</a> </li>
        </ul>
        <div id="welcome">
            <img src="images/user.jpg">
            <a href="task_2.php"><?php
                if ($_SESSION['name'] == null){
                    echo "Привет, Аноним";
                } else echo "Привет, " . $_SESSION['name'];
                ?>
            </a>
        </div>
    </div>
</header>
