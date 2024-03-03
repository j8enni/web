<!DOCTYPE html>
<html>
<head>
    <title>Подсчет процентного содержания символов</title>
    <style>
        input {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <form method="post">
        <textarea name="text" rows="4" cols="50"></textarea><br>
        <input type="submit" name="submit" value="Посчитать">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $text = $_POST['text'];

        $text = str_replace(' ', '', strtolower($text));

        $characters = str_split($text);

        $charCount = array_count_values($characters);

        $totalChars = strlen($text);

        foreach($charCount as $char => $count){
            $percentage = ($count / $totalChars) * 100;
            echo "Символ '$char' составляет $percentage% от общего количества символов.<br>";
        }
}
?>

</body>
</html>
