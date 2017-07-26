<?php
  define('DB_SERVER', '35.160.127.179');
  define('DB_USERNAME', 'butterflies');
  define('DB_PASSWORD', 'butter2017');
  define('DB_DATABASE', 'butterflies');
  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (!$db) {
    echo '<br><br><br><br><br><br>
    <p style="color: red; font-size: 20px;">
      ERROR_WHILE_CONNECTING_TO_DATABASE
    </p>';
  }
?>
