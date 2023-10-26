<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wizytówki</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <header>
        <h1>Wizytówki pracowników</h1>
        <form action="index.php" method="post">
            <input type="number" value='1' min='1' max='9' >
            <input type="submit" value='Wyświetl'>
        </form>
    </header>
        <div id='wizyt'>
        <?php
        //skrypt1
        ?>
        </div>
    <footer>
        <div id='left'>
            <img src="obraz.jpg" alt="pracownicy firmy">
        </div>
        <div id='mid'>
            <p>Autorem wizytownika jest: Stanisław Fiedoruk 5J</p>
            <a href="http://agencjareklamowa543.pl">Zobacz nasze realizacje</a>
        </div>
        <div id='right'>
            <p>Osoby proszone o podpisanie dokumentu RODO:</p>
            <?php
            //skrypt2
            ?>
        </div>
    </footer>
</body>

</html>