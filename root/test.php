<?php


// Proberen om de waarde van een niet-bestaande index 'age' op te halen
$age = $data['age'];

// Deze lijn zal een undefined index-waarschuwing veroorzaken omdat 'age' niet bestaat in de $data array
echo "Age: $age";
