<!DOCTYPE html>
<html>
<head>
    <title>Расчет дней до дня рождения</title>
    <style>
        button {
            background-color: pink;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Введите дату рождения в формате 'дд.мм.гггг':</h2>
    <form method="post">
        <input type="text" name="birthdate" placeholder="Введите дату рождения">
        <button type="submit">Рассчитать</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST['birthdate'];
        
        if (!empty($birthdate)) {
            $today = new DateTime('today');
            $birthday = DateTime::createFromFormat('d.m.Y', $birthdate);
            
            if ($birthday !== false) {
                $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));
                
                if ($birthday < $today) {
                    $birthday->modify('+1 year');
                }
                
                $daysUntilBirthday = $today->diff($birthday)->days;
                
                echo "До дня рождения осталось $daysUntilBirthday дней.";
            } else {
                echo "Введите корректную дату рождения в формате 'дд.мм.гггг'.";
            }
        } else {
            echo "Введите дату рождения.";
        }
    }
    ?>
</body>
</html>
