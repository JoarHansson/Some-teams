<?php

require __DIR__ . "/data.php";

?>

<table>
    <thead>
        <tr>
            <th>team</th>
            <th>league</th>
            <th>last-time-champion</th>
            <th>city</th>
            <th>nickname</th>
            <th>url</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < count($teams); $i++) :
            $arrayKeys = array_keys($teams); ?>

            <tr>
                <th><?= $arrayKeys[$i]; ?></th>
                <td><?= $teams[$arrayKeys[$i]]["league"]; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["last-time-champions"] ?? "null"; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["city"]; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["nickname"] ?? "null"; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["url"]; ?></td>
            </tr>

        <?php endfor; ?>

    </tbody>
</table>