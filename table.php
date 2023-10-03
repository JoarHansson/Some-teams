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
    foreach ($teams as $teamName => $teamData) : ?>

      <tr>
        <th><?= $teamName; ?></th>
        <td><?= $teamData["league"]; ?></td>
        <td><?= $teamData["last-time-champions"] ?? "-"; ?></td>
        <td><?= $teamData["city"]; ?></td>
        <td><?= $teamData["nickname"] ?? "-"; ?></td>
        <td><?= $teamData["url"]; ?></td>
      </tr>

    <?php endforeach; ?>

  </tbody>
  <caption>

    <?php require __DIR__ . "/cities.php";
    require __DIR__ . "/teams.php"; ?>

  </caption>
</table>