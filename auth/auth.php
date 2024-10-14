<?php
session_start();

// Return true if user is logged in, false otherwise
function isLoggedIn() {
  return isset($_SESSION["user_id"]);
}
?>
