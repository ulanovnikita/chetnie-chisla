<!DOCTYPE html>
<html>
<head>
    <title>Проверка на четность или нечетность</title>
</head>
<body>
    <h2>Введите число:</h2>
    <form method="post" action="">
        <input type="text" name="number">
        <input type="submit" name="submit" value="Проверить">
    </form>

    <?php
    // Проверяем, было ли отправлено число из формы
    if(isset($_POST['submit'])) {
        // Получаем введенное число
        $number = intval($_POST['number']); // Преобразуем введенное значение в целое число

        // Проверяем четность/нечетность числа и выводим результат
        if($number % 2 == 0) {
            echo "<p>$number - это четное число.</p>";
        } else {
            echo "<p>$number - это нечетное число.</p>";
        }
    }
    ?>
</body>
</html>

