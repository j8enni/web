<!DOCTYPE html>
<html>
<head>
    <title>Конвейер температуры</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>

<h1>Конвейер температуры</h1>

<form method="post">
    <label for="celsius">Введите температуру в Цельсиях:</label>
    <input type="text" name="celsius" id="celsius">
    <button type="submit">Конвертировать</button>
</form>

<?php
if(isset($_POST['celsius']) && !empty($_POST['celsius'])){
    $celsius = $_POST['celsius'];
    $fahrenheit = $celsius * 9/5 + 32;
    echo "<p>$celsius градусов Цельсия равно $fahrenheit градусов Фарингейта.</p>";
} else {
    echo "<p>Введите значение!</p>";
}
?>
</body>
</html>