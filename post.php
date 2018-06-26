 <!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<? 
mb_internal_encoding("UTF-8");
// Принимаем данные с формы 
 
$town=$_POST['town']; 
$town2=$_POST['town2']; 
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$days1=$_POST['days1']; 
$days2=$_POST['days2'];
$colvo=$_POST['colvo']; 
// $backurl = "http://paromas56.ru";
 
$checkbox = $_POST['checkbox']; // здесь будет массив с номерами строк с отмеченными чекбоксами
    foreach($checkbox as $lineNum) { // прокручиваемся через боксы 
        $jija.= $lineNum .","; // вывод на экран 
    } 
		 
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$message = '<html> 
    <head> 
        <title>Доставка</title> 
    </head> 
    <body> 
        <p>Имя:'.$name.'</p>
		 <p>Почта: '.$email.'</p>
		  <p>Телефон: '.$phone.'</p>
		   <p>Жидкость:'.mb_substr($jija, 0, -1).'</p>
		    <p>Пожелания: '.$pozhelania.'</p>	  
    </body> 
</html>'; 
		 

	

echo $message;
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
Доставка оформлена, сейчас будете перенаправлены на главную страницу
 ";
 
mail("trayserg@gmail.com", "Доставка", $message, $headers); 

 
?>

</body>
</html>