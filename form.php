<meta http-equiv='refresh' content='1; url=http://udachi-mirt.ru'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
if (isset($_POST['message'])) {$message = $_POST['message']; if ($message == '') {unset($message);}}
  
if (isset($name) && isset($tel) && isset($message)){
  
$address = "ooo_mirt@list.ru";
$mes = "Письмо с сайта";
$send = mail ($address,$mes, "Имя: $name \nТелефон: $tel \nТекст: $message");
if ($send == 'true')
{echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";}
  
}
else
{
echo "Заполните все поля";
}
?>
