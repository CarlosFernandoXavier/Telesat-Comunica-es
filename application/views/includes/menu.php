<nav id="menu">
	<?php
		echo "<h1>".$menu."</h1>"
	?>
	<figure id="galeria">
	<?php
		echo anchor('controlador/index', img(array('src'=>'assets/imagens/casa.jpg','title'=>'Home','id'=>'um')));
		echo anchor('controlador/contato', img(array('src'=>'assets/imagens/telefone.jpg','title'=>'Contato','id'=>'dois')));
		echo anchor('controlador/servicos', img(array('src'=>'imagens/servico.jpg','title'=>'Serviços','id'=>'tres')));
		echo anchor('controlador/cliente', img(array('src'=>'imagens/cliente.jpg','title'=>'Ordem de Serviço','id'=>'quatro')));
		echo anchor('controlador/cadastro', img(array('src'=>'imagens/cadastro.jpg','title'=>'Cadastro','id'=>'cinco')));
                echo anchor('controlador/novo_usuario', img(array('src'=>'imagens/novo_usuario.jpg','title'=>'Novo usuário')));
	?>
	</figure>
</nav>