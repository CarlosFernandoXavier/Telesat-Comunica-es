<!--<nav id="menu">-->
<nav class='navbar fixed-top navbar-light bg-faded' id="menu">  
    <?php
    //echo "<h1>".$menu."</h1>";
    ?>
    <ul class="nav navbar-nav">
        <li>
            <?php
                echo anchor('', img(array('src'=>'assets/imagens/casa.jpg','title'=>'Home','class'=>'thumbnail', 'id'=>'um')));
            ?>
        </li>
        <li>
            <?php
                echo anchor('contato', img(array('src'=>'assets/imagens/telefone.jpg','title'=>'Contato','class'=>'thumbnail', 'id'=>'dois')));
            ?>
        </li>
        <li>
            <?php
                echo anchor('servicos', img(array('src'=>'assets/imagens/servico.jpg','title'=>'Serviços','class'=>'thumbnail', 'id'=>'tres')));
            ?>
            
        </li>
        <li>
            <?php
                echo anchor('cliente', img(array('src'=>'assets/imagens/cliente.jpg','title'=>'Ordem de Serviço','class'=>'thumbnail', 'id'=>'quatro')));
             ?>
        </li>
    </ul>
</nav>
<section id="conteudo">