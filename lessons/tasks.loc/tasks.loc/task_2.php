<?php session_start(); ?>
<?php include 'header.php'; ?>
<div id="task2">
<form method="GET" action="">
    <label for="name"> Введите имя: </label>
    <input type="text" name="name">
    <p>
        <input type="submit" name="welc_sub" value="Ввод">
    </p>
</form>
</div>

<?php
if(isset($_REQUEST['welc_sub'])){
    $_SESSION['name'] = $_REQUEST['name'];
}
?>
<!-- обновление страницы -->
<script>
    if(!localStorage.getItem("reload")){
        localStorage.setItem("reload", true);
        location.reload();
    }else{
        localStorage.removeItem("reload");
    }
</script>