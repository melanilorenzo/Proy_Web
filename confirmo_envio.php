<!-- HEADER -->
<?php include('header.php'); 
?>

<div class="envio_ok"> 
<?php
if (isset($_GET['ok'])) {
    echo "<h1> Su película fue enviada correctamente. ¡Gracias! </h1> ";
} 
?>
</div>

<?php
include('footer.php');
?>

