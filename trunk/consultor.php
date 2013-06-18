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
	id('txttelefone').onkeypress = function(){
		mascara( this, mtel );
	}
	id('txtcelular').onkeypress = function(){
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
              
               
               $(".cpf").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
                   $("#txtcpf").mask("999.999.999-99");
                   
               })
                $(".cep").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
				   $("#txtcep").mask("99999-999");
                   
               })
            
			 
		
            
});

    </script>

    <SCRIPT LANGUAGE="JavaScript">
function ValidaEmail()
{
  var obj = eval("document.forms[0].Email");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
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
			<li><a href="index.php" id="menu1">Home</a></li>
			<li><a href="empresa.php" class="menu">Empresas</a></li>
			<li><a href="consultor.php" class="menu">Consultores</a></li>
			<li><a href="projeto.php" class="menu">Projetos</a></li>
		</ul>
			
	</header>
	<div>
		<hr>
		<h2>Consultor</h2>
		<form action="consultor.html" method="get">
			<div id="btn">
			<input type="button" value="Visualizar" />

			<input type="button" value="Editar" />

			<input type="button" value="Excluir" />
			</div>
		
			<fieldset id="dadospessoais">
				<legend>Dados Pessoais</legend>
				<label for="txtnome">Nome:</label> <input type="text" id="txtnome" onkeypress='return SomenteLetra(event)' size="30%" accesskey="N" Value="" />

				<label for="txtabreviacao">Abreviação do Nome:</label> <input type="text" id="txtabreviacao" onkeypress='return SomenteLetra(event)' size="2%" accesskey="A" Value="" maxlength="2" />

				<label for="txtcpf">CPF:</label> <input type="text" id="txtcpf" class="cpf" size="12%" accesskey="C" Value="" maxlength="14"  />
				

				<label for="txtcor">Cor:</label> <input type="color" id="txtcor" accesskey="CO" Value="" />

				<label for="txttelefone">Telefone:</label> <input type="text" id="txttelefone" size="10%" accesskey="T" Value="" maxlength="14" /><br />

				<label for="txtcelular">Celular:</label> <input type="text" id="txtcelular" size="12%"  accesskey="CEL" Value="" maxlength="15" />

				<label for="txtemail">E-mail:</label> <input type="text" id="txtemail" name="Email" accesskey="E" Value="" onBlur="ValidaEmail();" />
			
				
			</fieldset>

			<br />

			

			
				<fieldset id="endereco"><legend>Endereço</legend>
				<label for="txtcep">CEP: </label><input maxlength="9" type="text" id="txtcep" class="cep" size="8%" accesskey="CE" />

				<label for="txtlogradouro">Logradouro: </label><input maxlength="45" type="text" id="txtlogradouro" accesskey="L" />

				<label for="txtnumero">Número: </label><input maxlength="5" type="text" onkeypress='return SomenteNumero(event)' id="txtnumero" size="4%" accesskey="NUM" />

				<label for="txtcomplemento">Complemento:</label><input maxlength="4" type="text" size="2%" id="txtcomplemento" accesskey="COM" />


				<label for="txtbairro">Bairro: </label><input id="txtbairro" maxlength="45" type="text" accesskey="B" /><br />

				<label for="txtcidade">Cidade: </label><input id="txtcidade" maxlength="45" type="text" accesskey="CID" />

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

			<fieldset id="usuario">
        		<legend>Usuário</legend>
        		<label for="txtusuario">Nome de usuário:</label><input type="text" id="txtusuario" onkeypress='return SomenteLetra(event)' accesskey="U" />      

        		<label for="txtsenha">Senha:</label><input type="password" is="txtsenha" accesskey="S" /> 

        		<label for="txttipousuario">Tipo de usuário:</label><select id="txttipousuario">
				<option value="">Selecione</option>
				<option value="">Consultor</option>
				<option value="">Gerente de consultoria</option>
				<option value="">Gerente financeiro</option>
				<option value="">Gerente de relacionamento</option>
				<option value="">Admin</option>
				</select>
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