<?php

$cities = [];

foreach ($teams as $teamName => $teamData) {
  $cities[] = $teamData["city"];
}

$uniqueCities = array_unique($cities);
$lastCity = array_pop($uniqueCities);
// The last item (city) in the array is taken out
// in order to swap out "," to "and" in the <div> below.
// like this: "Göteborg, Malmö, Uppsala AND Stockholm"

?>

<div>
  A table about some football teams in
  <?= implode(", ", $uniqueCities) . " and " . $lastCity . "."; ?>
</div>