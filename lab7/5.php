<!DOCTYPE html>
<html>
<head>
    <title>Нахождение корней квадратного уравнения</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Введите коэффициенты квадратного уравнения:</h2>
    <form method="post">
        <input type="text" name="a" placeholder="Введите коэффициент a">
        <input type="text" name="b" placeholder="Введите коэффициент b">
        <input type="text" name="c" placeholder="Введите коэффициент c">
        <button type="submit">Найти корни уравнения</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        if (!empty($a) && !empty($b) && !empty($c) && is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            $a = (float)$a;
            $b = (float)$b;
            $c = (float)$c;
            
            $discriminant = $b**2 - 4*$a*$c;
            
            if ($discriminant > 0) {
                $x1 = (-$b + sqrt($discriminant)) / (2*$a);
                $x2 = (-$b - sqrt($discriminant)) / (2*$a);
                echo "Корни уравнения $a*x^2 + $b*x + $c = 0: <br> x1 = $x1, x2 = $x2";
            } elseif ($discriminant == 0) {
                $x = -$b / (2*$a);
                echo "Уравнение имеет один корень: x = $x";
            } else {
                echo "Уравнение не имеет действительных корней.";
            }
        } else {
            echo "Введите корректные коэффициенты.";
        }
    }
    ?>
</body>
</html>
