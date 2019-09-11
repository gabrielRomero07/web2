<?php

$primeiroNome = "<b>Primeiro nome</b><br>";
$ultimoNome = "<b>Ultimo nome</b><br>";
$eMail = "<b>E-mail</b><br>";
$oQueprecisa = "<b>O que precisa?<b>";

?>

<html>
<head>
	
	<title>BootStrap</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="col-xl-8 offset-xl-2 py-5">

<h1>Aula Bootstrap</h1>
Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Praesent 
malesuada urna nisi, quis volutpat erat 
hendrerit non. Nam vulputate dapibus.<br>
<br>

<div class="messages">

<div class="controls">

<div class="container">

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="form-name"><?php echo $primeiroNome;?> </label><br>
			<input id="form-name" type="text" name="name" placeholder="Primeiro Nome*" data-error="Obrigatório">
			<div class="help-block with-errors"></div>
		</div>	
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="form-name"><?php echo $ultimoNome;?></label><br>
			<input id="form-name" type="text" name="name" placeholder="Ultimo Nome*" data-error="Obrigatório">
			<div class="help-block with-errors"></div>
		</div>	
	</div>		
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="form-name"><?php echo $eMail;?></label><br>
			<input id="form-name" type="text" name="name" placeholder="E-mail*" data-error="Obrigatório">
			<div class="help-block with-errors"></div>
		</div>	
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="form-name"><?php echo $oQueprecisa;?></label><br>
			<select  class="custom-select d-block w-100" id="form-name" type="text" name="name" placeholder="O que precisa*" data-error="Obrigatório"><option>Item 1</option>
			  <option>Item 2</option>
			  <option>Item 3</option>
			  <option>Item 4</option>
			</select>

			<div class="help-block with-errors"></div>
		</div>	
	</div>		
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="form-name">Mensagem</label>
			<textarea class="custom-textarea d-block w-100" id="form-name" name="name" placeholder="Mensagem*" data-error="Obrigatório"></textarea>
			<div class="help-block with-errors"></div>
		</div>	
	</div>
</div>
<hr class="mb-4">
<div>
<button class="btn btn-primary btn-lg" type="submit">Enviar</button>
</div>
</form>
</div>	
</body>
</html>