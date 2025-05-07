<?php

//CODIGO FEITO POR ALLAN SILVA DEV
//USE ESTE CÓDIGO PARA ESTUDAR O PHP
// GITHUB: https://github.com/allanalvesofc



// URL da página que você deseja capturar
$url = "https://www.paciencia.co/domino";

// Obtendo o conteúdo HTML da página
$html = file_get_contents($url);

// Verificando se o conteúdo foi obtido com sucesso
if ($html === FALSE) {
    echo "Não foi possível acessar a página.";
    exit;
}

// Removendo o elemento <img> com a classe "gameLogoImg"
$html = preg_replace(
    '/<img class="gameLogoImg"[^>]*>/i', 
    '', 
    $html
);

// Removendo o elemento <div> com o id "create-user"
$html = preg_replace(
    '/<div id="create-user"[^>]*>.*?<\/div>/is', 
    '', 
    $html
);

// Removendo o elemento <nav> com o id "linksTopBar"
$html = preg_replace(
    '/<nav id="linksTopBar"[^>]*>.*?<\/nav>/is',
    '',
    $html
);


// Tornando o elemento com id "gameAArea" invisível
$html = preg_replace(
    '/<div id="gameAArea"([^>]*)>/i',
    '<div id="gameAArea"$1 style="display: none;">',
    $html
);

// Tornando o elemento com a classe "gameInfoMainHeaderWrapper" invisível
$html = preg_replace(
    '/<div class="gameInfoMainHeaderWrapper"([^>]*)>/i',
    '<div class="gameInfoMainHeaderWrapper"$1 style="display: none;">',
    $html
);

// Tornando o elemento com id "generalPageFooterDiv" invisível
$html = preg_replace(
    '/<div id="generalPageFooterDiv"([^>]*)>/i',
    '<div id="generalPageFooterDiv"$1 style="display: none;">',
    $html
);

// Tornando o elemento com id "gameHelpScroll" invisível
$html = preg_replace(
    '/<div id="gameHelpScroll"([^>]*)>/i',
    '<div id="gameHelpScroll"$1 style="display: none;">',
    $html
);


// Tornando o elemento com id "userLoginButtonText" invisível
$html = preg_replace(
    '/<div id="userLoginButtonText"([^>]*)>/i',
    '<div id="userLoginButtonText"$1 style="display: none;">',
    $html
);



// Exibindo o HTML modificado diretamente
echo $html;
?>
