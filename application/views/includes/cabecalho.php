<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <!--Está feio o menu por causa da inserção do bootstrap -->
	<meta charset="UTF-8"/>
	<title><?php echo $titulo?></title>
        <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/bootstrap.css"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
            echo link_tag('assets/css/usuario.css');
	?>
    </head>

    <body>
      <div class="container">
        <div class='row'>
	<header id="cabecalho">
            <?php
		echo img(array('src'=>'assets/imagens/Telesat.png','alt'=>'Logo Telesat Comunicações'));
            ?>  
           
       </header>