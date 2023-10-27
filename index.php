<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">

						<div class="text-center">
							<h5> Autenticação </h5>
						</div>

						<form action="processa_envio.php" method="post">
							<div class="form-group">
								<label for="para">Email</label>
								<input name="email" type="text" class="form-control" id="email" placeholder="Digite seu email">
							</div>

							<div class="form-group">
								<label for="subject">Senha</label>
								<input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
							</div>

							<?php
							if(isset($_GET["login"]) && $_GET["login"] == "erro"){
							?>

							<p class="text-danger font-weight-light">Por favor, preencher todos os campos</p>
							
							<?php } ?>

							<div class="py-1 text-center">
								<h5> Enviar Email </h5>
							</div>

							<div class="form-group">
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control" id="para" placeholder="Digite email destinatário">
							</div>

							<div class="form-group">
								<label for="subject">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Digite assunto do email">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem" placeholder="Mensagem Email"></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>

							<?php
							if(isset($_GET["login"]) && $_GET["login"] == "erro"){
							?>

							<p class="text-danger font-weight-light">Por favor, preencher todos os campos</p>
							
							<?php } ?>
							
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>
