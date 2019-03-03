<?php

	require_once 'config.php'; // Inclui o arquivo de configurações do site
	include(HEADER_TEMPLATE);  // Inclui o header da página
?>
<!-- Seção Historia-->
<section id ="historia">
	<!-- Alinha elementos no centro da tela -->
	<div class="container">
		<div class="row marge"><!-- Textos -->
				<div class="col-md-6  texto-historia">
						<p>
								A LIGA UNIVERSITÁRIA DE ESPORTS (LUE)
					      É O MAIOR EVENTO PRESENCIAL UNIVERSITÁRIO
								DE ESPORTES ELETRÔNICOS DO BRASIL.
								O EVENTO TEM COMO PRINCIPAL OBJETIVO
								PROPORCIONAR UMA EXPERIÊNCIA DE IMERSÃO
								NESSE UNIVERSO, ONDE SÃO REALIZADOS
								TORNEIOS DE DIVERSAS MODALIDADES.
					</p>
				</div>
				<div class="col-md-6 texto-historia2">
						<p>
								Tendo surgido em 2016, esta é sua 3ª edição e espera-se
								a presença de mais de 800 universitários de todas
								as regiões do país que vão marcar a história
								do eSport universitário brasileiro.
					  </p>
				</div>
		</div>
	</div><!-- container -->
</section><!-- historia -->

<!-- Seção Edições Anteriores -->
<section id="edicoes-anteriores">
	<!-- Alinha elementos no centro da tela -->
	<div class="container">
		<div class="titulo-secao">EDIÇÕES ANTERIORES</div>
		<!-- Código da seção -->
			<div class="row"> <!-- Imagens e botão -->
					<div class="col-md-6 img-centralizada">
						<img class = "img-responsive" src="img/home/edicao2016.png">
						<a class="btn botao marge" href="https://www.facebook.com/pg/LigaUniversitariaEsports/photos/?tab=album&album_id=1814619785475686" role="button"><b>Veja</b> como foi</a>
					</div>
					<div class="col-md-6 img-centralizada">
						<img class = "img-responsive" src="img/home/edicao2017.png">
						<a class="btn botao marge" href="https://www.youtube.com/watch?v=0fK3BLHt4co&t=104s" role="button"><b>Veja</b> como foi</a>
					</div>
			</div>
	</div> <!-- container -->
</section> <!-- edicoes-anteriores -->

<div class="divisoria-secao">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="img/divisoriaSecao.png" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<!-- Seção Nosso Time -->
<section id="nosso-time">
	<!-- Alinha elementos no centro da tela -->
	<div class="container">
		<div class="titulo-secao">NOSSO TIME</div>
		<!-- Código da seção -->
		<div class="row">
			<div class="col-md-2 col-sm-0"></div>
			<div class="col-md-2 col-sm-3 col-xs-6">
				<img src="img/home/01_RaphaelMobis.png" alt = "Raphael Mobis" class="img-time1">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-6">
				<img src="img/home/02_LuisaRibeiro.png" alt="Luisa Ribeiro" class="img-time1">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-6">
				<img src="img/home/03_IsabelaCapristano.png" alt="Isabela Capristano" class="img-time1">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-6">
				<img src="img/home/04_KarlaPereira1.png" alt="Karla Pereira" class="img-time1">
			</div>
			<div class="col-md-2 col-sm-0"></div>
		</div>
		<div class="row marge">
			<div class="col-md-1 col-sm-1 col-xs-0"></div>
			<div class="col-md-2 col-sm-2 col-xs-6">
				<img src="img/home/05_Vinicius Marmoro.png" alt = "Vinicius Marmoro" class="img-time2">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6">
				<img src="img/home/06_EduardoVieira.png" alt="Eduardo Vieira" class="img-time2">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6">
				<img src="img/home/07_JayNeto.png" alt="Jay Neto" class="img-time2">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6">
				<img src="img/home/08_ViniciusCarneiro.png" alt="Vinicius Carneiro" class="img-time2">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6">
				<img src="img/home/09_SamuelHenrique.png" alt="Samuel Henrique" class="img-time2">
			</div>
			<div class="col-md-1 col-sm-1 col-xs-0"></div>
		</div>
		<div class = "row">
			<div class="col-md-12">
				<a class="btn botao marge marge-botao" href="index.php#contato" role="button">Fazer parte da <b>Equipe</b></a>
			</div>
		</div>
	</div> <!-- container -->
</section> <!-- nosso-time -->
<div class="divisoria-secao espacamento-secao">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="img/divisoriaSecao.png" class="img-responsive img-espelhada">
			</div>
		</div>
	</div>
</div>

<!-- Seção Mídia -->
<section id="midia">
	<!-- Alinha elementos no centro da tela -->
	<div class="container container-60">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-secao">MÍDIA</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="embed-responsive embed-responsive-16by9 playlist-youtube">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLkv7q5ZNOxDsPGGca34eMO-T-kmea0s-i" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- SnapWidget -->
				<script src="https://snapwidget.com/js/snapwidget.js"></script>
				<iframe src="https://snapwidget.com/embed/592544" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
			</div>
		</div>


	</div> <!-- container -->
</section> <!-- midia -->

<div class="divisoria-secao">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="img/divisoriaSecao.png" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<!-- Seção Contato -->
<section id="contato">
	<!-- Alinha elementos no centro da tela -->
	<div class="container">
		<div class="titulo-secao">CONTATO</div>
		<!-- Código da seção -->
		<div class="row">
			<div id="texto-contato" class="col-md-12">
			Deseja fazer parte da equipe? Conte-nos um pouco sobre você<BR>
			Tem alguma dúvida? Mande sua mensagem!<BR><BR>
			</div>
		</div>
		<form class="form-horizontal" action="mailer.php" method="post">
			<div class="form-group">
				<label for="inputNome" class="col-md-4 control-label">NOME</label>
				<div class="col-md-4" >
					<input type="text" name="nome" class="form-control" id="nomeInput" aria-describedby="nomeHelp" placeholder="Digite seu nome" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="col-md-4 control-label">EMAIL</label>
				<div class="col-md-4" >
					<input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Digite seu email" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputAssunto" class="col-md-4 control-label">ASSUNTO</label>
				<div class="col-md-4" >
					<input type="text" name="assunto" class="form-control" id="assuntoInput" aria-describedby="assuntoHelp" placeholder="Digite o assunto da mensagem" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputMensagem" class="col-md-4 control-label">MENSAGEM</label>
				<div class="col-md-4" >
					<textarea rows="5" name="mensagem" class="form-control" id="msgInput" aria-describedby="msgHelp" placeholder="Digite a mensagem" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="botao botao-submit">Enviar</button>
			</div>
		</form>


	</div> <!-- container -->
</section> <!-- contato -->

<?php
	include(FOOTER_TEMPLATE); // Inclui o rodapé da página
?>
