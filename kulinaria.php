<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Kulinaria.pl</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section id="banner">
        <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
    </section>

    <section id="main">

        <section id="left-panel">
            <p>Dania mięsne zamówisz już od 

                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'baza');

                    $zapyt = 'SELECT MIN(cena) as "min" FROM dania WHERE typ LIKE 2';
                    $wynik = mysqli_query($conn, $zapyt);

                    while ($row = mysqli_fetch_assoc($wynik)) {
                        echo $row["min"] . " złotych";
                    };

                    mysqli_close($conn);

                ?>  
                </p>
            <img src="menu.jpg" alt="Pyszne spaghetti">
            <br>
            <a href="menu.jpg">Pobierz obraz</a>
        </section>

        <section id="center-panel">
            <h3>Przekąski</h3>
              <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'baza');

                    $zapyt = 'SELECT id, cena, nazwa from dania where typ = 3';
                    $wynik = mysqli_query($conn, $zapyt);

                    while($row = mysqli_fetch_assoc($wynik)){
                        echo "<p> $row[id] $row[nazwa] $row[cena] </p>";
                    }

                mysqli_close($conn);
              ?>
        </section>

        <section id="right-panel">
            <h3>Napoje</h3>

            <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'baza');

                    $zapyt = 'SELECT id, cena, nazwa from dania where typ = 4';
                    $wynik = mysqli_query($conn, $zapyt);

                    while($row = mysqli_fetch_assoc($wynik)){
                        echo "<p> $row[id] $row[nazwa] $row[cena] </p>";
                    }

                mysqli_close($conn);
             ?>

        </section>

    </section>

    <section id="footer">
        <i>Stronę internetową opracował: 997</i>
    </section>

</body>
</html>