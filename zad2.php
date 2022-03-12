<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h1>Oшибки<h1>  

<?php
// определите переменные и задайте пустые значения

$FIOErr = $emailErr = $telErr = ""; 
$FIO = $email = $comment = $addres = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $FIOErr = "ФИО обязательно";
  } else {
    $FIO = test_input($_POST["name"]);
  }
   if (empty($_POST["email"])) {
    $emailErr = "Email обязательно";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["comment"])) {
    $commentErr = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["tel"])) {
    $telErr = "Моб.обязательно";
  } else {
    $tel = test_input($_POST["tel"]);
  }
  if (empty($_POST["addres"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["addres"]);
  }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Пример проверки формы PHP</h2>
  <p><span class="error">* Заполните обязательный поля</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    ФИО: <input type="text" name="name" pattern="^[А-Яа-яЁё\s]+$">
    <span class="error">* <?php echo $FIOErr;?></span>
    <br><br>
    Моб.тел.: <input type="tel" name="tel" pattern="[0-9]{11}">
    <span class="error">* <?php echo $telErr;?></span>
    <br><br>
    E-mail: <input type="email" name="email">
    <br><br>
    Комментарий: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" name="submit" value="Отправить">  
    <br><br>
    Загрузите файл: <input type="file"  name="foto" multiple accept="image/*,video/*">
    </form>

<?php

echo "<h2>Ваш ввод:</h2>";
echo $FIO;
echo "<br>";
echo $email;
echo "<br>";
echo $tel;
echo "<br>";
echo $comment;

?>

</body>
</html>