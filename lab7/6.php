<!DOCTYPE html>
<html>
<head>
    <title>Проверка тройки Пифагора</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Введите три числа для проверки тройки Пифагора:</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Введите первое число">
        <input type="text" name="num2" placeholder="Введите второе число">
        <input type="text" name="num3" placeholder="Введите третье число">
        <button type="submit">Проверить</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        
        if (!empty($num1) && !empty($num2) && !empty($num3) && is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
            $num1 = (int)$num1;
            $num2 = (int)$num2;
            $num3 = (int)$num3;
            
            $maxNum = max($num1, $num2, $num3);
            
            if ($maxNum**2 == ($num1**2 + $num2**2 + $num3**2 - $maxNum**2)) {
                echo "Введенные числа образуют тройку Пифагора.";
            } else {
                echo "Введенные числа не образуют тройку Пифагора.";
            }
        } else {
            echo "Введите корректные числа.";
        }
    }
    ?>
</body>
</html>
