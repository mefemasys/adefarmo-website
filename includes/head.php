<?php
require_once __DIR__ . '/../config/url-config.php';
?>

<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADEFARMO - Associação Acções para o Desenvolvimento da Família Rural Moçambicana</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            primary: '#800020', // Vinho
                            secondary: '#FF8C00', // Laranja
                            success: '#2E8B57', // Verde
                            info: '#00008B', // Azul
                        }
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="<?= url('css/styles.css') ?>">

    <style>
        body { font-family: 'Inter', sans-serif; }

        #mobile-menu.active {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors">
