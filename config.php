<?php
/** Arquivo com algumas configurações úteis para o site **/

/** URL Base dos arquivos no servidor **/
//define('URL_BASE', $_SERVER['REQUEST_URI']);
define('URL_BASE', dirname(__FILE__) . '/');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', URL_BASE . 'inc/header.php');
define('FOOTER_TEMPLATE', URL_BASE . 'inc/footer.php');
