<?php
require_once __DIR__ . '/../config/url-config.php';
?>

<header class="fixed w-full z-50 glass-nav">
    <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-[#800020] rounded-md flex items-center justify-center text-white font-bold">
                AD
            </div>
            <span class="font-bold text-lg">ADEFARMO</span>
        </div>


        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center gap-6 text-sm font-semibold">
            <a href="<?= url('') ?>" class="hover:text-[#800020]">Início</a>

                    <!-- Sobre -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-[#800020]">
                    Sobre Nós <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-64 pt-4 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none group-hover:pointer-events-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/sobre') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Quem Somos</a>
                        <a href="<?= url('pages/missao-valores') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Missão e Valores</a>
                        <a href="<?= url('pages/galeria') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Galeria</a>
                        <a href="<?= url('pages/equipa') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Nossa Equipa</a>

                    </div>
                </div>
            </div>

            <!-- Projetos -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-[#800020]">
                    Projetos <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-64 pt-4 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none group-hover:pointer-events-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/agricultura') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Desenvolvimento Rural</a>
                        <a href="<?= url('pages/educacao-ambiental') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Educação Ambiental</a>
                        <a href="<?= url('pages/pecuaria') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Inclusão Social</a>
                        <a href="<?= url('pages/tecnologia') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Parcerias</a>

                    </div>
                </div>
            </div>

            <a href="<?= url('pages/contacto') ?>" class="hover:text-[#800020]">Contacto</a>

            <button id="dark-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <i data-lucide="moon" class="w-4 h-4"></i>
            </button>

            <a href="<?= url('pages/contacto') ?>" class="bg-[#800020] text-white px-5 py-2 rounded-lg hover:bg-[#600018] transition-colors">
                Como Ajudar
            </a>
        </nav>

        <!-- Mobile Toggle -->
        <button id="open-menu" class="lg:hidden">
            <i data-lucide="menu" class="w-7 h-7"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <aside id="mobile-menu" class="fixed inset-y-0 right-0 w-72 bg-white dark:bg-gray-900 transform translate-x-full transition-transform duration-300 flex flex-col p-6 z-[60] shadow-lg">
        <div class="flex justify-between items-center mb-8">
            <span class="text-lg font-bold">Menu ADEFARMO</span>
            <button id="close-menu"><i data-lucide="x" class="w-7 h-7"></i></button>
        </div>
        <nav class="flex flex-col gap-4 text-lg font-semibold">
            <a href="<?= url('') ?>">Início</a>
            <a href="<?= url('pages/sobre') ?>">Sobre Nós</a>
            <a href="<?= url('pages/educacao-ambiental') ?>">Educação Ambiental</a>
            <a href="<?= url('pages/contacto') ?>">Contacto</a>
            <a href="<?= url('pages/contacto') ?>" class="text-[#800020]">Como Ajudar</a>
        </nav>
    </aside>
</header>
