<?php

require __DIR__ . "/header.php";
require __DIR__ . "/data.php";

?>

<body>
  <header>
    <h1>Some teams</h1>
  </header>
  <main>
    <table>

      <?php
      require __DIR__ . "/table.php";
      ?>

      <caption>

        <?php
        require __DIR__ . "/cities.php";
        require __DIR__ . "/teams.php";
        ?>

      </caption>
    </table>

  </main>
</body>

</html>