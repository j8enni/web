<!DOCTYPE html>
<html>
<head>
    <title>Определить делители числа</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>

<h1>Определить делители числа</h1>

<form method="post">
    <label for="number">Введите число:</label>
    <input type="text" name="number" id="number">
    <button type="submit">Определить</button>
</form>

<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    
    if ($number === '') {
        echo "Введите число";
    } else {
        $number = (int)$number; 
        
        if ($number <= 0) {
            echo "Введите положительное число";
        } else {
            echo "Делители числа $number: ";
            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i == 0) {
                    echo $i . ", ";
                }
            }
        }
    }
}
?>
</body>
</html>