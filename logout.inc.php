<?php
session_start();
SESSION_UNSET();
SESSION_DESTROY();
header("Location:  index.php");
 ?>
