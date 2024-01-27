<?php 
  
include('config.php');

session_destroy();
header('Location: /coral_walls');
die();