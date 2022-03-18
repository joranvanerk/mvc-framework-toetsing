<h1>Fruit overzicht</h1>
<a style="font-weight: 800;">id   naam   kleur   prijs</a>
<br>
<?php

foreach ($data['fruit'] as $fruit) {
    echo $fruit->id . " " .  $fruit->name . " " . $fruit->color . " " . $fruit->price;
    echo "<br>";
}

?>
