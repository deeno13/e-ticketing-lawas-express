<?php

include("config.php");

if (isset($_SESSION['user_id'])) {
  $auth_content = '<a href="' . BASE_URL . 'auth/logout.php">Logout</a>';
} else {
  $auth_content = '<a href="' . BASE_URL . 'pages/login.php">Login</a>';
}

?>

<nav class="header__nav">
  <ul class="header__links">
      <li><a href="<?= BASE_URL ?>index.php">Home</a></li>
      <li><a href="<?= BASE_URL ?>pages/schedule.php">Schedule</a></li>
      <li><a href="<?= BASE_URL ?>pages/about.php">About</a></li>
      <li><a href="<?= BASE_URL ?>pages/contact.php">Contact</a></li>
      <li style="float: right;"><?= $auth_content; ?></li>
  </ul>
</nav>
