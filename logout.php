<?php

  session_start();

  session_unset();
  
  // Verificare
  if ( ! isset($_SESSION['user_id']) ) {
   header('Location: index.php');
  } 
?>