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

foreach ($data['country'] as $country) {
    echo '<tr>
      <td style="width: 10%;">' . $country->id . '</td>
      <td>' . $country->name . '</td>
      <td>' . $country->capitalCity . '</td>
      <td>' . $country->continent . '</td>
      <td>' . $country->population . '</td>
    </tr>';
}

?>
</table>
