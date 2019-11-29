<?php
$title = "Titre de la page";
ob_start();

?>


<?php
$content = ob_get_clean();
require('public/index.php');
?>