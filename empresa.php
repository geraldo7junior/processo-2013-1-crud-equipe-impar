<html>
<head>
	<meta charset=utf-8>
	<title>Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/estilocliente.css">
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


			<script type="text/javascript">
/* Máscaras Telefone */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('txttelefone1').onkeypress = function(){
		mascara( this, mtel );
	}
	id('txttelefone2').onkeypress = function(){
		mascara( this, mtel );
	}
	id('txttelefonepatrocinador').onkeypress = function(){
		mascara( this, mtel );
	}
	id('txtcelularpatrocinador').onkeypress = function(){
		mascara( this, mtel );
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
              
               
               $(".cnpj").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
                   $("#txtcnpj").mask("99.999.999/9999-99");
                   
               })
                $(".cep").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
				   $("#txtcep").mask("99999-999");
                   
               })
            
			 
		
            
});

    </script>

    <script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function SomenteLetra(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>65 && tecla<90)) return true;
    else{
    	if (tecla>97 && tecla<122) return true;
	else  return false;
    }
}
</script>

</head>
<body>
	<header>
		<h1 id="left">1mpar!<sup>®</sup></h1>
		<ul id="right">
			<li><a href="index.php" id="home">Home</a></li>
			<li><a href="empresa.php" id="empresas">Empresas</a></li>
			<li><a href="consultor.php" id="consultores">Consultores</a></li>
			<li><a href="projeto.php" id="projetos">Projetos</a></li>
		</ul>
			
	</header>
	<div>
		<hr>
		<h2>Empresa</h2>
		<form action="empresa.html" method="get">
			<div id="btn">
			<input type="button" value="Visualizar" />

			<input type="button" value="Editar" />

			<input type="button" value="Excluir" />
			</div>
		
			<fieldset id="dadosempresa">
				<legend>Dados da Empresa</legend>
				<label for="txtnome">Nome:</label> <input type="text" id="txtnome" accesskey="N" Value="" size="30%" onkeypress='return SomenteLetra(event)' onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

				<label for="txtsigla">Sigla:</label> <input type="text" id="txtsigla" accesskey="S" Value="" maxlength="4" size="3%" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

				<label for="txtcnpj">CNPJ:</label> <input type="text" id="txtcnpj" class="cnpj" accesskey="CN" Value="" maxlength="18" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

				<label for="txttelefone1">Telefone 1:</label> <input type="text" id="txttelefone1" accesskey="T1" Value="" size="10%" maxlength="14" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

				<label for="txttelefone2">Telefone 2:</label> <input type="text" id="txttelefone2" accesskey="T2" Value="" size="10%" maxlength="14" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />
		
			</fieldset>

			<br />

			

			
				<fieldset id="endereco"><legend>Endereço</legend>
					<label for="txtcep">CEP: </label><input maxlength="9" type="text" size="10%" class="cep" id="txtcep" accesskey="CE" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

					<label for="txtlogradouro">Logradouro: </label><input maxlength="45" type="text" id="txtlogradouro" accesskey="L" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

					<label for="txtnumero">Número: </label><input maxlength="5" type="text" size="5%" id="txtnumero" accesskey="NUM" onkeypress='return SomenteNumero(event)' onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

					<label for="txtcomplemento">Complemento:</label><input maxlength="4" type="text" size="2%" id="txtcomplemento" accesskey="COM" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />	


					<label for="txtbairro">Bairro: </label><input id="txtbairro" maxlength="45" type="text" accesskey="B" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" /><br />

					<label for="txtcidade">Cidade: </label><input id="txtcidade" maxlength="45" type="text" accesskey="CID" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

					<label for="txtestado">Estado: </label>
					<select id="txtestado">
						<option value="">Selecione</option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AP">AP</option>
						<option value="AM">AM</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MG">MG</option>
						<option value="MT">MT</option>
						<option value="MS">MS</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="PR">PR</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="RS">RS</option>
						<option value="SC">SC</option>
						<option value="SE">SE</option>
						<option value="SP">SP</option>
						<option value="TO">TO</option>
				</select></fieldset>
			<br />

			<fieldset id="xxx">
        		<legend>Patrocinador</legend>
        		<label for="txtnomepatrocinador">Nome:</label> <input type="text" id="txtnomepatrocinador" accesskey="NO" Value="" onkeypress='return SomenteLetra(event)' onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

        		<label for="txtTelefonepatrocinador">Telefone:</label><input type="text" id="txttelefonepatrocinador" accesskey="TEL" maxlength="14" value="" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

        		<label for="txtcelularpatrocinador">Celular:</label><input type="text" id="txtcelularpatrocinador" accesskey="Cel" maxlength="15" value="" onfocus="this.style.backgroundColor='#F0FFF0'" onblur="this.style.backgroundColor='#ffffff'" />

        		
			</fieldset> 

			<br />
			<div id="confirmar"><input  type="submit" value="Confirmar Cadastro"/></div>

		</form>
		
	</div>
	<footer>
		<hr>
		<address>
		© Desenvolvido por equipe 1mpar! - 2013
		</address>
	</footer>

</body>
</html>