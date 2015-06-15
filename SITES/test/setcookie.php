<?php
setcookie('pays', 'France', time() + 365*24*3600, '/');
echo $_COOKIE['pays'];
?>