<?php
// Set base url for reusable navigations
define('BASE_URL', '/e-ticketing-lawas-express/');

// If logged in, show logout button. Otherwise, show login button.
if (isset($_SESSION['user_id'])) {
  $auth_content = '<a href="' . BASE_URL . 'auth/logout.php">Logout</a>';
} else {
  $auth_content = '<a href="' . BASE_URL . 'login.php">Login</a>';
}
?>

<nav class="header__nav">
  <ul class="header__links">
    <li><a href="<?= BASE_URL ?>index.php">Home</a></li>
    <li><a href="<?= BASE_URL ?>schedule.php">Schedule</a></li>
    <li><a href="<?= BASE_URL ?>about.php">About</a></li>
    <li><a href="<?= BASE_URL ?>contact.php">Contact</a></li>
    <li style="float: right;"><?= $auth_content; ?></li>
  </ul>
</nav>
