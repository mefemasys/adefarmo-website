<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <!-- Header -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Sobre a ADEFARMO</h1>
                <p class="text-xl text-gray-600 dark:text-gray-400">Associação Acções para o Desenvolvimento da Família Rural Moçambicana</p>
            </div>
        </section>

        <!-- Conteúdo -->
        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Nossa História</h2>
                        <div class="space-y-4 text-gray-600 dark:text-gray-400">
                            <p>A ADEFARMO é uma organização moçambicana sem fins lucrativos, sediada em Pemba, Cabo Delgado, focada em capacitar famílias rurais para o seu próprio desenvolvimento.</p>
                            <p>A associação atua na promoção de desenvolvimento rural e tem implementado projetos inovadores como os "Clubes dos Amigos do Meio Ambiente" para educação ambiental, reciclagem e compostagem.</p>
                            <p>Ao longo dos anos, temos colaborado com entidades de prestígio como o CESC e a IGUAL, fortalecendo nossa capacidade de impacto e alcance nas comunidades mais vulneráveis da província de Cabo Delgado.</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden h-96 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80" alt="ADEFARMO Ação" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Onde Atuamos -->
                <div class="bg-[#FFF5F5] dark:bg-gray-800 rounded-xl p-12 mb-20">
                    <h2 class="text-3xl font-bold mb-12 text-center">Onde Atuamos</h2>
                    <div class="grid md:grid-cols-3 gap-8 text-center">
                        <div class="p-8 bg-white dark:bg-gray-900 rounded-xl shadow-md">
                            <i data-lucide="map-pin" class="w-12 h-12 text-[#800020] mx-auto mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Pemba</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Nossa sede administrativa e centro de operações estratégicas.</p>
                        </div>
                        <div class="p-8 bg-white dark:bg-gray-900 rounded-xl shadow-md">
                            <i data-lucide="map-pin" class="w-12 h-12 text-[#FF8C00] mx-auto mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Chiúre</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Foco intensivo em projetos de mobilização comunitária e agricultura familiar.</p>
                        </div>
                        <div class="p-8 bg-white dark:bg-gray-900 rounded-xl shadow-md">
                            <i data-lucide="map-pin" class="w-12 h-12 text-[#2E8B57] mx-auto mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Cabo Delgado</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Atuação em diversos distritos da província com foco em educação ambiental.</p>
                        </div>
                    </div>
                </div>

                <!-- Missão e Objetivos -->
                <div class="grid md:grid-cols-2 gap-8 mb-20">
                    <div class="bg-gradient-to-br from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-[#800020] rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="target" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Missão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Promover ações integradas para o desenvolvimento da família rural moçambicana, garantindo o acesso a ferramentas de capacitação e sustentabilidade.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-[#00008B] rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="heart" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossos Objetivos</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Melhorar a qualidade de vida e a preservação do meio ambiente, focando na inclusão de jovens e comunidades vulneráveis em Cabo Delgado.
                        </p>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-[#800020] rounded-3xl p-12 text-white text-center">
                    <h2 class="text-3xl font-bold mb-4">Apoie a Nossa Causa</h2>
                    <p class="text-gray-200 mb-8 max-w-2xl mx-auto">Sua colaboração pode transformar a vida de centenas de famílias rurais em Moçambique.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="<?= url('pages/contacto') ?>" class="inline-block bg-white text-[#800020] px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-all shadow-xl">
                            Entre em Contacto
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
