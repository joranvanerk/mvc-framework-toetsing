<h1>Ladenoverzicht</h1>
<br>
<table style="border: none;">
  <tr>
    <th style="width: 10%;">id</th>
    <th>Land</th>
    <th>Hoofdstad</th>
    <th>Continent</th>
    <th>AantalInwoners</th>
  </tr>
<?php

foreach ($data['fruit'] as $fruit) {
    echo '<tr>
      <td style="width: 10%;">' . $fruit->id . '</td>
      <td>' . $fruit->name . '</td>
      <td>' . $fruit->capitalCity . '</td>
      <td>' . $fruit->continent . '</td>
      <td>' . $fruit->population . '</td>
    </tr>';
}

?>
</table>
