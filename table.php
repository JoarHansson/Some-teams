<?php

require __DIR__ . "/data.php";

?>

<table>
    <thead>
        <tr>
            <th>Team</th>
            <th>League</th>
            <th>Champions (last time)</th>
            <th>City</th>
            <th>Nickname</th>
            <th>Website</th>
        </tr>
    </thead>
    <tbody>

        <?php
        for ($i = 0; $i < count($teams); $i++) :
            $arrayKeys = array_keys($teams); ?>

            <tr>
                <th><?= $arrayKeys[$i]; ?></th>
                <td><?= $teams[$arrayKeys[$i]]["league"]; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["last-time-champions"] ?? "-"; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["city"]; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["nickname"] ?? "-"; ?></td>
                <td><?= $teams[$arrayKeys[$i]]["url"]; ?></td>
            </tr>

        <?php endfor; ?>

    </tbody>
    <caption>

        <?php require __DIR__ . "/cities.php";
        require __DIR__ . "/teams.php"; ?>

    </caption>
</table>