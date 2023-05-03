<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate user's credentials here

  if (/* User's credentials are valid */) {
    setcookie('username', $username, time() + (86400 * 30), '/');
    setcookie('password', $password, time() + (86400 * 30), '/');
    header('Location: /info/');
    exit;
  } else {
    echo 'Invalid username or password';
  }
}
?>