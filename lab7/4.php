<!DOCTYPE html>
<html>
<head>
    <title>Поиск общих делителей двух чисел</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Введите два числа, чтобы найти их общие делители:</h2>
    <form method="post">
        <input type="text" name="number1" placeholder="Введите первое число">
        <input type="text" name="number2" placeholder="Введите второе число">
        <button type="submit">Найти</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        
        if (!empty($number1) && !empty($number2) && is_numeric($number1) && is_numeric($number2)) {
            $number1 = (int)$number1;
            $number2 = (int)$number2;
            
            if ($number1 <= 0 || $number2 <= 0) {
                echo "Введите положительные числа.";
            } else {
                echo "Общие делители чисел $number1 и $number2: ";
                for ($i = 1; $i <= min($number1, $number2); $i++) {
                    if ($number1 % $i == 0 && $number2 % $i == 0) {
                        echo $i . ", ";
                    }
                }
            }
        } else {
            echo "Введите корректные числа.";
        }
    }
    ?>
</body>
</html>
