<!DOCTYPE html>
<html>
<head>
    <title>Подсчет слов и символов</title>
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
        <input type="submit" name="submit" value="Подсчитать">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        
        $wordCount = str_word_count($text);
        $charCount = strlen($text);
        
        echo "Количество слов: " . $wordCount . "<br>";
        echo "Количество символов: " . $charCount;
}
?>

</body>
</html>
