<HTML>
<HEAD>
    <TITLE>Калькулятор билетов</TITLE>
    <link rel="stylesheet" href="style.css">
</HEAD>
<BODY>
    <h2 >Калькулятор билетов</h2>
    <form action="product.php" method="post">
        <input type="number" min="1" name="ticket1" placeholder="Количество билетов в Казахстан-Астана"><br>
        <input type="number" min="1" name="ticket2" placeholder="Количество билетов в Узбекистан-Ташкент"><br>
        <input type="number" min="1" name="ticket3" placeholder="Количество билетов в Таджикистан-Душанбе"><br>
        <input type="number" min="1" name="ticket4" placeholder="Количество билетов в Азербайджан-Баку"><br>
        <input type="number" min="1" name="ticket5" placeholder="Количество билетов в Киргизию-Бишкек"><br>
        <input type="number" min="1" name="ticket6" placeholder="Количество билетов в Беларусь-Минск"><br>
        <input type="number" min="1" name="ticket7" placeholder="Количество билетов в Армению-Ереван"><br>
        <input type="number" min="1" name="ticket8" placeholder="Количество билетов в Туркменистан-Ашхабад"><br>
        <input type="number" min="1" name="ticket9" placeholder="Количество билетов в Казахстан"><br>
        <input type="submit" value="Расчитать" id="submit">
    </form>
</BODY>    
<?php
$ticket1 = $_POST['ticket1'];
$ticket2 = $_POST['ticket2'];
$ticket3 = $_POST['ticket3'];
$ticket4 = $_POST['ticket4'];
$ticket5 = $_POST['ticket5'];
$ticket6 = $_POST['ticket6'];
$ticket7 = $_POST['ticket7'];
$ticket8 = $_POST['ticket8'];
$ticket9 = $_POST['ticket9'];

if(empty($ticket1)) {$ticket1=0;}
if(empty($ticket2)) {$ticket2=0;}
if(empty($ticket3)) {$ticket3=0;}
if(empty($ticket4)) {$ticket4=0;}
if(empty($ticket5)) {$ticket5=0;}
if(empty($ticket6)) {$ticket6=0;}
if(empty($ticket7)) {$ticket7=0;}
if(empty($ticket8)) {$ticket8=0;}
if(empty($ticket9)) {$ticket9=0;}

$res = 1500*$ticket1 + 1600*$ticket2 + 2100*$ticket3 + 1670*$ticket4 + 1800*$ticket5 +
1230*$ticket6 + 1200*$ticket7 + 1590*$ticket8 + 2500*$ticket9 ;

echo "Общая стоимость: " . $res;
?>