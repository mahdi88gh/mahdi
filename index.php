<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indax.style.css">
</head>
<body>
<form class="formm">
    <h2>فرم ثبت نام</h2>
    <label for="نام">نام:</label>
    <input class="textx" type="text" placeholder="نام خود را وارد کنید" name="name">
    <br>
    <label for="شماره تماس">شماره تماس:</label>
    <input class="textx" type= "text" placeholder="شماره خود را وارد نمایید" phoh="phon">
    <br>
    <h2>gender</h2>
    <input type="radio">
    <label for="">man</label>
    <input type="radio">
    <label for="">Female</labeln>
    </div>
        <h2؟</h2>
        <input type="checkbox" id="php"
        <label for="php">php</label>
        <br>
        <input type="checkbox" id="js">
        <label for="js">js</label>
        <br>
        <input type="checkbox" id="ccs3"
        <label for="ccs3" >ccs3</label>
        <br>
        <input class="btn1" type="submit" value="ثبت نام">
        <input class="btn2" type="reset" value="پاک کردن">


</form>
</body>
</html>
<?php
if(isset($_POST['name'])
$name=$_POST[name])
{
    echo("hello word");
    echo("it sempty");
}
if(isset($_POST['phon'])
$phon=$_POST[phon])



?>
<html>
  <head>
    <link rel="stylesheet" href="cv.style.css">
  </head>

  <h1>form</h1>

    <table class="title">

<tr>
<th>name & lastname</th>
<td><?=$_POST0['name & lastnam']?></td>
</tr>
<tr>
<th>age</th>
<td><?=$_POST['age']?></td>
</tr>
<th>favorites<th>
<td><?= $_POST['favorites']?></td>
<tr>
  <tr> <th>city</th>
<td><?= $_POST['city']?></td>
  </tr>
  <tr>
<th>email</th>
<td><?=$_POST['email']?></td>
  </tr>
  <tr>
<th>phone number</th>
<td><?= $_POST['phon'] ?></td>
  </tr>
</table>
 