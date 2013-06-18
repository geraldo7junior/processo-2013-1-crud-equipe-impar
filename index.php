<html>
<head>
    <link rel="shortcut icon" href="img/logo.ico"  />
	<meta charset=utf-8>
	<title>1mpar! - Crud´s</title>
	<link rel="stylesheet" type="text/css" href="css/estiloindex.css">
	<script src="jquery.js" type="text/javascript"></script>
    <link REL="img/1mpar.ico" REF="index.php">
</head>
<body>
	<header>
		<h1>1mpar!<sup>®</sup></h1>
        <p>Sistema de Cadastro, Visualização, Edição e Deleção.</p>
         <?php
           // echo "Sistema de cadastro, edição e deleção. - Consultoria-";
        ?>
		
	</header>
	<hr>
	<div class="destaques-home"><div id="azulejos">
                <div id="empresaTile" class="tile">
                    <div class="boxgrid captionfull">
                        <a href="empresa.php">
                            <img alt="" src="img/empresa.png" /></a>
                        <div class="cover boxcaption">
                            <h3>
                                Empresa</h3>
                        </div>
                    </div>
                </div>
                <div id="consultor" class="tile">
                    <div class="boxgrid captionfull">
                        <a href="consultor.php">
                            <img alt="" src="img/consultor.png" /></a>
                        <div class="cover boxcaption">
                            <h3>
                                Consultor</h3>
                        </div>
                    </div>
                </div>
                <div id="projeto" class="largeTile">
                    <div class="boxgrid slidedown clickable" url="projeto.php">
                        <a href="projeto.php">
                            <img class="cover" alt="" src="img/projeto.png" /></a>
                        <div class="divSlide">
                            <h3>
                                Projetos</h3>
                            <p>
                                Cadastre, edite, visualize e exclua projetos.</p>
                        </div>
                    </div>
                </div>
                </div>
            




        <script type="text/javascript">
    $(document).ready(function () {
        //To switch directions up/down and left/right just place a "-" in front of the top/left attribute  
        //Vertical Sliding  
        $('.boxgrid.slidedown').hover(function () {
            $(".cover", this).stop().animate({ top: '-260px' }, { queue: false, duration: 300 });
        }, function () {
            $(".cover", this).stop().animate({ top: '0px' }, { queue: false, duration: 300 });
        });
        //Horizontal Sliding  
        $('.boxgrid.slideright').hover(function () {
            $(".cover", this).stop().animate({ left: '325px' }, { queue: false, duration: 300 });
        }, function () {
            $(".cover", this).stop().animate({ left: '0px' }, { queue: false, duration: 300 });
        });
        //Diagnal Sliding  
        $('.boxgrid.thecombo').hover(function () {
            $(".cover", this).stop().animate({ top: '260px', left: '325px' }, { queue: false, duration: 300 });
        }, function () {
            $(".cover", this).stop().animate({ top: '0px', left: '0px' }, { queue: false, duration: 300 });
        });
        //Partial Sliding (Only show some of background)  
        $('.boxgrid.peek').hover(function () {
            $(".cover", this).stop().animate({ top: '90px' }, { queue: false, duration: 160 });
        }, function () {
            $(".cover", this).stop().animate({ top: '0px' }, { queue: false, duration: 160 });
        });
        //Full Caption Sliding (Hidden to Visible)  
        $('.boxgrid.captionfull').hover(function () {
            $(".cover", this).stop().animate({ top: '130px' }, { queue: false, duration: 160 });
        }, function () {
            $(".cover", this).stop().animate({ top: '170px' }, { queue: false, duration: 160 });
        });
        //Caption Sliding (Partially Hidden to Visible)  
        $('.boxgrid.caption').hover(function () {
            $(".cover", this).stop().animate({ top: '100px' }, { queue: false, duration: 160 });
        }, function () {
            $(".cover", this).stop().animate({ top: '220px' }, { queue: false, duration: 160 });
        });
        $("div.clickable").click(function () { //o probleminha estava nessa linha.
            window.location = $(this).attr("url");
        });
    });
    </script>
	
		<div id="endereco"><address>
		© Desenvolvido por equipe 1mpar! - 2013
		</address></div>

  
</body>
</html>