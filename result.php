<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Результат</title>

<style>
body{
    font-family: Arial;
    background:#f5f5f5;
    padding:40px;
}

.box{
    background:white;
    padding:20px;
    width:300px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.val{
    font-weight:bold;
    color:#2b7cff;
}
</style>

</head>

<body>

<div class="box">

<h2>Ваши данные</h2>

<p>
Имя:
<span class="val">
<?php echo htmlspecialchars($_POST["name"]); ?>
</span>
</p>

<p>
Email:
<span class="val">
<?php echo htmlspecialchars($_POST["email"]); ?>
</span>
</p>

</div>

</body>
</html>
