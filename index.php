<?php
function getIP(){
  return getenv('HTTP_CLIENT_IP')?:
  getenv('HTTP_X_FORWARDED_FOR')?:
  getenv('HTTP_X_FORWARDED_FOR')?:
  getenv('HTTP_FORWARDED_FOR')?:
  getenv('HTTP_FORWARDED')?:
  getenv('REMOTE_ADDR')?:'UNKNOWN IP';
}
$ip = getIP();
 ?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>IP Address</title>
  </head>
  <body>
    <form class="" action="index.php" method="get">
      <input type="text" name="ip" value="<?php echo $ip; ?>">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
