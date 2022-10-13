<?php

$mysqli = new mysqli("localhost", "tunnikas", "0q!n8Zk8krHqHCrt", "tunniplaan");
$stmt = $mysqli->prepare("SELECT id, pealkiri, sisu FROM lehed");
$stmt->execute();
$stmt->bind_result($id, $pealkiri, $sisu);

?>

<!doctype html>

<html>

<head>

    <title>Teated lehel</title>

</head>

<body>

    <h1>Teadete loetelu</h1>

    <?php

    while ($stmt->fetch()) {
        echo "<h2>" . htmlspecialchars($pealkiri) . "</h2>";

        echo "<div>" . htmlspecialchars($sisu) . "</div>";
    }

    ?>

</body>

</html>

<?php

$mysqli->close();

?>