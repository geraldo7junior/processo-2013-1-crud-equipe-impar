<html>
<head>
	<meta charset=utf-8>
	<title>Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/estiloconsultor.css">
	<script src="jquery1.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>

	<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

<script >
            $(document).ready(function(){
               $("#date").mask("99/99/9999");
               $("#phone").mask("(999) 999-9999");
               $("#tin").mask("99-9999999");
               $("#ssn").mask("999-99-9999");
               $("#cnpj").mask("99.999.999/9999-99");
               $("#cep").mask("99999-999");
               $("#hora").mask("99:99");
              
               
               $(".hora").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
                   $("#txtag").mask("99:99");
                   $("#txtbg").mask("99:99");
                   $("#txtcg").mask("99:99");
                   $("#txtai").mask("99:99");
                   $("#txtbi").mask("99:99");
                   $("#txtci").mask("99:99");
                   
               })
               
            
			 
		
            
});

    </script>              
</head>
<body>
	<header>
		<h1 id="left">1mpar!<sup>®</sup></h1>
		<ul id="right">
			<li><a href="index.php" id="menu1">Home</a></li>
			<li><a href="empresa.php" class="menu">Empresas</a></li>
			<li><a href="consultor.php" class="menu">Consultores</a></li>
			<li><a href="projeto.php" class="menu">Projetos</a></li>
		</ul>
			
	</header>
	<div>
		<hr>
		<h2>Projeto</h2>
		<form action="projeto.html" method="get">
			<div id="btn">
			<input type="button" value="Visualizar" />

			<input type="button" value="Editar" />

			<input type="button" value="Excluir" />
			</div>
		
			<fieldset>
				<legend>Dados do Projeto</legend>
				<label for="txtsigla">Sigla:</label> <input type="text" id="txtsigla" accesskey="S" Value="" /><br />

				<label for="txtdescricao">Descrição:</label> <br />
				<textarea cols="40" rows="6"></textarea>	
				
			</fieldset>

			<br />
	
			<fieldset id="horagrupo"><legend>Hora em Grupo</legend>
				<label for="txtag">A:</label> <input type="text" maxlength="5" size="4%" id="txtag" class="hora" accesskey="AG" Value="" />

				<label for="txtbg">B:</label> <input type="text" maxlength="5" size="4%" id="txtbg" class="hora" accesskey="BG" Value="" />

				<label for="txtcg">C:</label> <input type="text" maxlength="5" size="4%" id="txtcg" class="hora" accesskey="CG" Value="" />

			</fieldset>
			<br />

			<fieldset id="horaindividual">
        		<legend>Hora Individual</legend>
        		<label for="txtai">A:</label> <input type="text" maxlength="5" size="4%" id="txtai" class="hora" accesskey="AG" Value="" />

				<label for="txtbi">B:</label> <input type="text" maxlength="5" size="4%" id="txtbi" class="hora" accesskey="BG" Value="" />

				<label for="txtci">C:</label> <input type="text" maxlength="5" size="4%" id="txtci" class="hora" accesskey="CG" Value="" />
        		
			</fieldset>

			<fieldset id="gerenteconsultor">
        		<legend>Gerente e Consultores</legend>

				<label for="txtrelacionamento">Gerente de Relacionamento:</label><select id="txtrelacionamento">
				<option value="">Selecione</option>
				</select>


				<label for="txtconsultores">Consultores:</label><select id="txtconsultores">
				<option value="">Selecione</option>
				</select>

				<label for="txtempresa">Empresa:</label><select id="txtempresa">
				<option value="">Selecione</option>
				</select>
        		
			</fieldset>  

			<br />
			<div id="confirmar"><input  type="submit" value="Confirmar Cadastro"/></div>

		</form>
		
	</div>
	<hr>
		<address>
		© Desenvolvido por equipe 1mpar! - 2013
		</address>
	<footer>
		
	</footer>

</body>
</html>