<!--ATUALIZA A PAGINA (SEGUNDOS)-->
<meta http-equiv="refresh" content="300">

<?php 
    //CABECALHO
    include 'cabecalho.php';

    include 'js/mensagens.php';
    include 'js/mensagens_usuario.php';
?>
    <div id="mensagem_acoes"></div>

    <h11><i class="fa-solid fa-sitemap"></i> Controle de Vagas</h11>
    <br>

    <a href="siresp_urgencia.php" class="botao_home"><h21><i class="fa-solid fa-stethoscope"></i> SIRESP - Urgência </h21></a>
	<span class="espaco_pequeno"></span>

    <a href="convenios.php" class="botao_home" type="submit"><h21><i class="fa-solid fa-file-contract"></i> Convênios </h21></a>
	<span class="espaco_pequeno"></span>

    <a href="hmjcf_sjc.php" class="botao_home" type="submit"><h21><i class="fa-solid fa-hospital"></i> HMJCF - SJC </h21></a>
	<span class="espaco_pequeno"></span>

    <?php if ($_SESSION['SN_USUARIO_ADM'] == 'S') { ?>
        <br>
        <br>
        <h11><i class="fas fa-user-cog"></i> Administrador</h11>
        <br>
        
        <a href="justificativas.php" class="botao_home_adm"><h21><i class="fas fa-cog"></i> Cadastro de Justificativas </h21></a>
	    <span class="espaco_pequeno"></span>
    <?php } ?>

<?php
    //RODAPE
    include 'rodape.php';
?>
