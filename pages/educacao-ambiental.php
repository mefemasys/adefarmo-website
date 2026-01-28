<?php
require_once __DIR__ . 
'/../config/bootstrap.php
';

get_part(
'head
');
get_part(
'header
');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#2E8B57] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Educação Ambiental</h1>
                <p class="text-xl opacity-90">Preservando o futuro de Cabo Delgado através da conscientização comunitária.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                
                <!-- Clubes Amigos do Meio Ambiente -->
                <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
                    <div>
                        <span class="text-[#2E8B57] font-bold uppercase tracking-widest mb-4 block">Projeto Destaque</span>
                        <h2 class="text-4xl font-bold mb-6">Clubes dos Amigos do Meio Ambiente</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg">
                            Este projeto é uma das principais iniciativas da ADEFARMO para promover a gestão sustentável de resíduos em comunidades rurais e urbanas de Cabo Delgado.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="text-[#2E8B57]"></i>
                                <span class="font-semibold">Educação sobre Reciclagem</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="text-[#2E8B57]"></i>
                                <span class="font-semibold">Técnicas de Compostagem Orgânica</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="text-[#2E8B57]"></i>
                                <span class="font-semibold">Mobilização de Jovens Voluntários</span>
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80" alt="Educação Ambiental" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Pilares do Projeto -->
                <div class="grid md:grid-cols-3 gap-8 mb-24">
                    <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl">
                        <i data-lucide="recycle" class="w-12 h-12 text-[#2E8B57] mb-6"></i>
                        <h3 class="text-xl font-bold mb-4">Gestão de Resíduos</h3>
                        <p class="text-gray-600 dark:text-gray-400">Capacitamos comunidades para separar, coletar e dar o destino correto aos resíduos sólidos.</p>
                    </div>
                    <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl">
                        <i data-lucide="sprout" class="w-12 h-12 text-[#FF8C00] mb-6"></i>
                        <h3 class="text-xl font-bold mb-4">Compostagem</h3>
                        <p class="text-gray-600 dark:text-gray-400">Transformamos resíduos orgânicos em fertilizante natural para apoiar a agricultura familiar.</p>
                    </div>
                    <div class="p-8 bg-gray-50 dark:bg-gray-800 rounded-2xl">
                        <i data-lucide="users" class="w-12 h-12 text-[#00008B] mb-6"></i>
                        <h3 class="text-xl font-bold mb-4">Mobilização Social</h3>
                        <p class="text-gray-600 dark:text-gray-400">Engajamos jovens e escolas locais na liderança de ações ambientais em seus bairros.</p>
                    </div>
                </div>

                <!-- Parcerias e Apoio -->
                <div class="bg-[#F0F7F4] dark:bg-gray-800/50 p-12 rounded-3xl text-center">
                    <h2 class="text-3xl font-bold mb-6">Parceiros no Desenvolvimento</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-10 max-w-2xl mx-auto">Nossas ações de sustentabilidade são fortalecidas pela colaboração com entidades que acreditam na mudança através da educação.</p>
                    <div class="flex flex-wrap justify-center gap-12 opacity-70 grayscale hover:grayscale-0 transition-all">
                        <div class="text-2xl font-bold text-gray-400">CESC</div>
                        <div class="text-2xl font-bold text-gray-400">IGUAL</div>
                        <div class="text-2xl font-bold text-gray-400">Governo Local</div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part(
'scripts
');
get_part(
'footer
');
?>
