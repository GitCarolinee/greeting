<?php

session_start(); // sessionen startas

$method = $_SERVER['REQUEST_METHOD']; // vilken metod som används

// Initiera variabler namn, favoritdjur och favvofärg
$name = "";
$animal = "";
$color = "";

if ($method === "POST") { // Hämta data med metod POST och rensa med htmlspecialchars
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ""; // isset kontrollerar om en variabel är definierad och inte är null
    $animal = isset($_POST['animal']) ? htmlspecialchars($_POST['animal']) : "";
    $color = isset($_POST['color']) ? htmlspecialchars($_POST['color']) : "";

    $_SESSION['animal'] = $animal; // Sparar favoritdjuret i session

} elseif ($method === "GET") { // om metod är GET hämtas data med detta
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "";
    $animal = isset($_GET['animal']) ? htmlspecialchars($_GET['animal']) : "";
    $color = isset($_GET['color']) ? htmlspecialchars($_GET['color']) : "";

    $_SESSION['animal'] = $animal; // Sparar favoritdjuret i session
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Cornelias inlämningsuppgift 1</title>
</head>
    <style>
        body {
            font-family: Verdana, sans-serif;
        }
    </style>
<body>

<h1>Välkommen hit!</h1>

<?php

if (!empty($name) && !empty($animal)) { // Om både namn och djur är angivna så visas ett personligt meddelande
    echo "<p>Hejsan $name! En $animal är ett fantastiskt djur!</p>";
    if (!empty($color)) {
        echo "<p>Nu vet jag att din favoritfärg är $color.</p>";
    }
} else {
    echo "<p>Fyll i formuläret nedan!</p>";
}
?>

<!-- Formulär med POST-metod -->
<h2>POST-formulär</h2>
<form method="post">
    <input name="name" placeholder="Vad är ditt namn?">
    <br>
    <input name="animal" placeholder="Vad är ditt favoritdjur?">
    <br>
    <input name="color" placeholder="Vad är din favoritfärg?">
    <br>
    <br>
    <button type="submit">Skicka med POST</button>
</form>

<!-- Formulär med GET-metod -->
<h2>GET-formulär</h2>
<form method="get">
    <input name="name" placeholder="Vad är ditt namn?">
    <br>
    <input name="animal" placeholder="Vad är ditt favoritdjur?">
    <br>
    <input name="color" placeholder="Vad är din favoritfärg?">
    <br>
    <br>
    <button type="submit">Skicka med GET</button>
</form>

<!-- Felsökning - superglobalerna -->
<h2>Felsökning</h2>
<pre>
==== POST ====
<?php print_r($_POST); ?>

==== GET ====
<?php print_r($_GET); ?>

==== REQUEST ====
<?php print_r($_REQUEST); ?>

==== SERVER ====
<?php print_r($_SERVER); ?>
</pre>

</body>
</html>