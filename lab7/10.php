<!DOCTYPE html>
<html>
<head>
    <title>Определение дня недели</title>
    <style>
        input {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <form method="post">
        <select name="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="month">
            <option value="1">Январь</option>
            <option value="2">Февраль</option>
            <option value="3">Март</option>
            <option value="4">Апрель</option>
            <option value="5">Май</option>
            <option value="6">Июнь</option>
            <option value="7">Июль</option>
            <option value="8">Август</option>
            <option value="9">Сентябрь</option>
            <option value="10">Октябрь</option>
            <option value="11">Ноябрь</option>
            <option value="12">Декабрь</option>           
        </select>
        
        <select name="year">
            <?php
            for ($i = 1990; $i <= 2025; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Показать день недели">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        
        $timestamp = strtotime("$year-$month-$day");
        $dayOfWeek = date('l', $timestamp);
        
        echo "Выбранная дата: $day.$month.$year<br>";
        echo "День недели: $dayOfWeek";
}
?>

</body>
</html>
