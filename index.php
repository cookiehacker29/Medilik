<?php // Include and instantiate the class.
require_once 'Ressources/Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
  //echo "Version mobile indisponible pour le moment !";
  header('Location: PC/indexPC.php');
  exit;
}
else{
  header('Location: PC/indexPC.php');
  exit;
}
?>
