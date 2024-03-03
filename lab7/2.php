<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор факториала</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>

<h1>Калькулятор факториала</h1>

<form method="post">
    <label for="number">Введите число:</label>
    <input type="text" name="number" id="number">
    <button type="submit">Посчитать</button>
</form>

<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    
    if ($number === '') {
        echo "Введите значение";
    } else {
        $number = (int)$number; 
        
        if ($number < 0) {
            echo "Введите положительное число";
        } else {
            $factorial = 1;
            
            if ($number == 0) {
                echo "Факториал числа $number равен 1";
            } else {
                for ($i = 1; $i <= $number; $i++) {
                    $factorial *= $i;
                }
                
                echo "Факториал числа $number равен $factorial";
            }
        }
    }
}
?>
</body>
</html>