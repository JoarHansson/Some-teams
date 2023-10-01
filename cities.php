<?php

require __DIR__ . "/data.php";

$cities = [];

for ($i = 0; $i < count($teams); $i++) :
    $arrayKeys = array_keys($teams);
    $cities[] = $teams[$arrayKeys[$i]]["city"];
endfor; ?>

<div>
    A table about football teams in
    <?= implode(", ", array_unique($cities)); ?>
</div>