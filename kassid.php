<?php

$mysqli = new mysqli("localhost", "tunnikas", "0q!n8Zk8krHqHCrt", "tunniplaan");
$stmt = $mysqli->prepare("SELECT id, kassinimi, toon FROM kassid");
$stmt->execute();
$stmt->bind_result($id, $nimi, $toon);

?>

<!doctype html>

<html>

<head>

    <title>Kassid</title>

</head>

<body>

    <h1>Kasside loetelu</h1>

    <?php

    while ($stmt->fetch()) {
        //echo "<div>" . htmlspecialchars($nimi) . "</h2>";

        echo "<div style='background:" . htmlspecialchars($toon) . "'>" . htmlspecialchars($toon) . "</div>";
    }

    ?>

</body>

</html>

<?php



$mysqli->close();

?>