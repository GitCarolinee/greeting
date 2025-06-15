# Inlämningsuppgift 1
## Webbserverprogrammering
### Information om mitt projekt:

- Goal: what will your project do?
    - Målet med projektet är att skapa en interaktiv PHP-sida som samlar in användardata (namn, favoritdjur och favoritfärg) via formulär med både POST- och GET-metoder. Sidan visar ett personligt meddelande till användaren och skriver samtidigt ut olika superglobaler för felsökning.
    
- Form fields: what info will be saved?
    - Formulären innehåller 
        - Namn ('name')
        - Favoritdjur ('animal')
        - Favoritfärg ('color')

- File structure: how will you separate your files?
    - I denna uppgift samlas allt i en php-fil: greeting.php

- Function: What will your function do?
    - Kontrollerar vilken HTTP-metod som används med $_SERVER REQUEST_METHOD.
    - Hämtar och rensar användarinmatning med htmlspecialchars.
    - Visar ett personligt meddelande med användarens namn, favoritdjur och favoritfärg.
    - Sparar favoritdjuret i en $_SESSION variabel.
    - Skriver ut $_POST, $_GET, $_REQUEST och $_SERVER med print_r i ett pre-block för tydlig felsökning.