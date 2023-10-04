<?php

$cities = [];

foreach ($teams as $teamName => $teamData) {
  $cities[] = $teamData["city"];
}

$uniqueCities = array_unique($cities);
$lastCity = array_pop($uniqueCities);

?>

<div>
  A table about some football teams in
  <?= implode(", ", $uniqueCities) . " and " . $lastCity . "."; ?>
</div>