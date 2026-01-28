<?php

// Detecta automaticamente a URL base para funcionar em qualquer ambiente
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost:5500';
// Remove o nome do arquivo atual do caminho se estiver sendo acessado diretamente
$scriptDir = str_replace(['/index.php', '/pages'], '', $_SERVER['SCRIPT_NAME'] ?? '');
$scriptDir = rtrim($scriptDir, '/');

define('BASE_URL', $protocol . '://' . $host . $scriptDir);

/**
 * Retorna URL absoluta para o ficheiro/página fornecida
 * @param string $path Caminho relativo à raiz (ex: 'pages/sobre')
 * @return string
 */

function url($path = '') {
    // Remove barras duplicadas
    $path = trim($path, '/');
    return BASE_URL . ($path ? '/' . $path : '');
}
?>
