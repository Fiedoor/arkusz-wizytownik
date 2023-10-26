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
            <input type="number" value='1' min='1' max='9' name='id'>
            <input type="submit" value='Wyświetl'>
        </form>
    </header>
        <div id='wizyt'>
        <?php
        $conn=mysqli_connect('localhost','root','','firma');
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        }else{
            $id=1;
        }
        $result=mysqli_query($conn,"SELECT id,imie,nazwisko,adres,miasto FROM pracownicy where id=$id");
        foreach ($result as $r){
            echo "<img src='". $r["id"].".jpg' alt='pracownik'>";
            echo "<h2>". $r['imie'].'&nbsp'.$r['nazwisko']."</h2>";
            echo '<h4>Adres:</h4>';
            echo "<p>".$r['adres'].' , '.$r['miasto']."</p>";
        }
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
            $result2=mysqli_query($conn,"SELECT imie, nazwisko FROM pracownicy WHERE czyRODO=0;");
            echo "<ol>";
            foreach($result2 as $res){
                    echo '<li>'.$res['imie']."&nbsp".$res['nazwisko'].'</li>';
            }
            echo "</ol>";
            mysqli_close($conn);
            ?>
        </div>
    </footer>
</body>

</html>