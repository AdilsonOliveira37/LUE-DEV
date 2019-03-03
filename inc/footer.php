	<footer id="rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="lista-icones">
						<li>
							<a href="https://www.facebook.com/LigaUniversitariaEsports/">
								<img src="img/home/IconeFacebook.png" alt="Logo do facebook">
							</a>
						</li>
						<li>
							<a href="https://www.twitch.tv/ligauniversitariaesports/">
								<img src="img/home/IconeTwitch.png" alt="Logo da twitch">
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCvEAgb3hRK6eoTXGkRQSxGA?">
								<img src="img/home/IconeYoutube.png" alt="Logo do youtube">
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/ligauniversitariaesports/">
								<img src="img/home/IconeInstagram.png" alt="Logo do instagram">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					2018 LIGA UNIVERSITÁRIA DE ESPORTS (29.950.950/0001-69). TODOS DIREITOS RESERVADOS<br>
					DESING BY @viniapk
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

	<!-- JS Base de todas as páginas -->
    <script src="js/base.js"></script>

	<!-- Slick JS -->
    <script type="text/javascript" src="js/slick.min.js"></script>

	<!-- JS Específico da página atual -->
    <?php
    	$pagina = basename($_SERVER['PHP_SELF'],'.php');
    	if($pagina == "index"){
    		echo "<!-- Arquivo(s) JS da Página Home -->";
    		echo "<script src='js/home.js'></script>";
    	}else if($pagina == "acompanhe"){

			echo "<!-- Arquivo(s) JS da Página Acompanhe -->";
			echo "<script src='https://embed.twitch.tv/embed/v1.js'></script>";
    		echo "<script src='js/acompanhe.js'></script>";
		}

    ?>
</body>
</html>
