<?php
	require_once 'config.php'; // Inclui o arquivo de configurações do site
	include(HEADER_TEMPLATE);  // Inclui o header da página
?>

<section id="menu">
	<div class="container">
		<div class="row no-pad">
			<div class="col-md-1 col-sm-0"></div>
			<div class="col-md-2 col-sm-3 col-xs-4">
				<img onClick=reloadLOL(); class="img-responsive btn-toggle btn-lol" src="img/acompanhe/btnLOL.png">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4">
				<img onClick=reloadCS(); class="img-responsive btn-toggle btn-csgo" src="img/acompanhe/btnCSGO.png">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4">
				<img onClick=reloadFIFA(); class="img-responsive btn-toggle btn-fifa" src="img/acompanhe/btnFIFA.png">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4">
				<img onClick=reloadHS(); class="img-responsive btn-toggle btn-hs" src="img/acompanhe/btnHS.png">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4">
				<img onClick=reloadCLASH(); class="img-responsive btn-toggle btn-clash" src="img/acompanhe/btnCLASH.png">
			</div>
			<div class="col-md-1 col-sm-0"></div>
		</div>
	</div>
</section>

<section id="twitch">
	<!-- Alinha elementos no centro da tela -->
	<div class="container">
		<div id="twitch-embed"></div>
	</div> <!-- container -->
</section> <!-- edicoes-anteriores -->

<section id="tabela">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-secao">TABELA</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img id="tabelaLOL" src="img/acompanhe/LOL_tabela.png" class="img-responsive" alt="Tabela do League of Legends">
				<img id="tabelaCS" src="img/acompanhe/CSGO_tabela.png" class="img-responsive" alt="Tabela do Counter Strike">
				<img id="tabelaHS" src="img/acompanhe/HS_tabela.png" class="img-responsive" alt="Tabela do Hearthstone">
				<img id="tabelaCLASH" src="img/acompanhe/CLASH_tabela.png" class="img-responsive" alt="Tabela do Clash Royale">
				<img id="tabelaFIFA" src="img/acompanhe/FIFA_tabela.png" class="img-responsive" alt="Tabela do FIFA">
			</div>
		</div>
	</div>
</section>

<div class="divisoria-secao">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="img/divisoriaSecao.png" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<section class="destaques" id="destaques-lol">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-secao">DESTAQUES</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquelol01.png" class="img-responsive espacamento-destaque" alt="Destaque LOL #1">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquelol02.png" class="img-responsive espacamento-destaque" alt="Destaque LOL #2">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquelol03.png" class="img-responsive espacamento-destaque" alt="Destaque LOL #3">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquelol04.png" class="img-responsive espacamento-destaque" alt="Destaque LOL #4">
			</div>
		</div>
	</div>
</section>

<section class="destaques" id="destaques-csgo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-secao">DESTAQUES</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquecsgo01.png" class="img-responsive espacamento-destaque" alt="Destaque CS GO #1">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquecsgo02.png" class="img-responsive espacamento-destaque" alt="Destaque CS GO #2">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquecsgo03.png" class="img-responsive espacamento-destaque" alt="Destaque CS GO #3">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquecsgo04.png" class="img-responsive espacamento-destaque" alt="Destaque CS GO #4">
			</div>
		</div>
	</div>
</section>

<section class="destaques" id="destaques-fifa">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="titulo-secao">DESTAQUES</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquefifa01.png" class="img-responsive espacamento-destaque" alt="Destaque FIFA #1">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquefifa02.png" class="img-responsive espacamento-destaque" alt="Destaque FIFA #2">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquefifa03.png" class="img-responsive espacamento-destaque" alt="Destaque FIFA #3">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquefifa04.png" class="img-responsive espacamento-destaque" alt="Destaque FIFA #4">
			</div>
		</div>
	</div>
</section>

<section class="destaques" id="destaques-hs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-secao">DESTAQUES</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquehs01.png" class="img-responsive espacamento-destaque" alt="Destaque Hearthstone #1">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquehs02.png" class="img-responsive espacamento-destaque" alt="Destaque Hearthstone #2">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquehs03.png" class="img-responsive espacamento-destaque" alt="Destaque Hearthstone #3">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaquehs04.png" class="img-responsive espacamento-destaque" alt="Destaque Hearthstone #4">
			</div>
		</div>
	</div>
</section>

<section class="destaques" id="destaques-clash">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-secao">DESTAQUES</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaqueclash01.png" class="img-responsive espacamento-destaque" alt="Destaque Clash Royale #1">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaqueclash02.png" class="img-responsive espacamento-destaque" alt="Destaque Clash Royale #2">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaqueclash03.png" class="img-responsive espacamento-destaque" alt="Destaque Clash Royale #3">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="img/acompanhe/destaqueclash04.png" class="img-responsive espacamento-destaque" alt="Destaque Clash Royale #4">
			</div>
		</div>
	</div>
</section>

<?php
	include(FOOTER_TEMPLATE); // Inclui o rodapé da página
?>
