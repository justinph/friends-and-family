<?php
include '../wp-config.php';
include '../wp-load.php';

define('DEFAULT_COOKIE_NAME', 'fnf-cookie');
define('DEFAULT_COOKIE_DAYS', 30); // 30 days

function allowAccess() {

  // global $cookie_name, $cookie_val, $cookie_expiry, $cookie_path, $cookie_domain;

  $cookie_name = get_option('fnf-cookiename', DEFAULT_COOKIE_NAME);
  $cookie_val = '1';
  $cookie_expiry = intval(get_option('fnf-cookiedays', DEFAULT_COOKIE_DAYS)*3600*24) + time();
  $cookie_domain = parse_url( get_site_url(), PHP_URL_HOST );
  $cookie_path = trailingslashit(get_site_url(null, '', 'relative'));

  // var_dump($cookie_path); exit();


  setcookie(
    $cookie_name,
    $cookie_val,
    $cookie_expiry,
    $cookie_path,
    $cookie_domain,
    is_ssl(),
    false
  );
  header("Location: /", true, 302);
  exit();
}


if ($_POST && ($_POST['dog'] || $_POST['city']) ) {
  if (strtolower(trim($_POST['dog'])) === 'django') {
    allowAccess();
  } elseif (
    strtolower(trim($_POST['city'])) === 'nyc' ||
    strtolower(trim($_POST['city'])) === 'new york' ||
    strtolower(trim($_POST['city'])) === 'new york city'
  ) {
    allowAccess();
  } else {
    $message = 'Incorrect answer.';
  }
}

include 'tempalate.php';
?>