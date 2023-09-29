<?php

require __DIR__ . "/data.php";

$cities = [];

for ($i = 0; $i < count($teams); $i++) :
    $arrayKeys = array_keys($teams);
    $cities[] = $teams[$arrayKeys[$i]]["city"];
endfor; ?>

<p>
    Cities in the table:
    <?= implode(", ", array_unique($cities)); ?>
</p>