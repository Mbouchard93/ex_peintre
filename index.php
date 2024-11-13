<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De merveilleux peintres</title>
    <link href="./style.css" rel="stylesheet" />
</head>
<body>
    <header class='header-main'>
       <h1>De merveilleux peintres</h1> 
    </header>

    <main>
    <?php
    include "db_conn.php";
    $conn = ouvreConnexion();

    $query = "SELECT * FROM `informations`;";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<section>
                    <header>
                        <div class='nom-artiste'> 
                            <h2>" . $row["prenom"] .  " "  . $row["nom"] . "</h2>
                        </div>
                        <div class='donne-naissance'>
                            <p>" . $row["annee_naissance"] . "</p>
                            <p>" . $row["ville_naissance"] . "</p>
                        </div>
                    </header>
                    <figure>
                        <img src='" . $row["oeuvre_image_url"] . "' alt='" . $row["prenom"] . " " . $row["nom"] . " - " . $row["oeuvre_celebre"] . "' />
                        <figcaption>" . $row["oeuvre_celebre"] . "</figcaption>
                    </figure>
                  </section>";
        }  
    }
    ?>
    </main>
    <footer>
        <p>Mariane bouchard</p>
        <p>PMI</p>
        <p>2024</p>
    </footer>
</body>
</html>
