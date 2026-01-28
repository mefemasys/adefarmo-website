<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#800020] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Missão, Visão e Valores</h1>
                <p class="text-xl opacity-90">Os pilares que sustentam a nossa atuação em Cabo Delgado.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                
                <!-- Missão e Visão -->
                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div class="bg-gradient-to-br from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-[#800020] rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="target" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Missão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">
                            Promover ações integradas para o desenvolvimento da família rural moçambicana, através da capacitação técnica, mobilização comunitária e fomento à sustentabilidade ambiental e social.
                        </p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 p-10 rounded-2xl">
                        <div class="w-16 h-16 bg-[#FF8C00] rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="eye" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Nossa Visão</h2>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">
                            Ser reconhecida como uma organização de referência no empoderamento de famílias rurais e na preservação ambiental em Moçambique, contribuindo para comunidades autossuficientes e resilientes.
                        </p>
                    </div>
                </div>

                <!-- Valores Principais -->
                <div class="mb-20">
                    <h2 class="text-3xl font-bold text-center mb-4">Nossos Valores Fundamentais</h2>
                    <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-3xl mx-auto">
                        Estes princípios orientam cada projeto e decisão da ADEFARMO, garantindo integridade e impacto positivo.
                    </p>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#800020] hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mb-6">
                                <i data-lucide="heart" class="w-7 h-7 text-[#800020]"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Solidariedade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Comprometemo-nos com o apoio mútuo e a empatia para com as necessidades das famílias rurais mais vulneráveis.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#800020] hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mb-6">
                                <i data-lucide="leaf" class="w-7 h-7 text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Sustentabilidade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Buscamos soluções que equilibrem o progresso económico com a preservação ambiental para as gerações futuras.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#800020] hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-6">
                                <i data-lucide="shield-check" class="w-7 h-7 text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Integridade</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Atuamos com ética, transparência e responsabilidade em todas as nossas parcerias e projetos.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#800020] hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mb-6">
                                <i data-lucide="users" class="w-7 h-7 text-orange-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Inclusão Social</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Fomentamos a participação ativa de jovens, mulheres e grupos marginalizados nos processos de desenvolvimento.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#800020] hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mb-6">
                                <i data-lucide="handshake" class="w-7 h-7 text-purple-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Transparência</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Mantemos canais abertos de comunicação e prestação de contas sobre o uso de recursos e resultados alcançados.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-gray-100 dark:border-gray-700 hover:border-[#800020] hover:shadow-xl transition-all">
                            <div class="w-14 h-14 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center mb-6">
                                <i data-lucide="award" class="w-7 h-7 text-emerald-600"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Excelência</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Empenhamo-nos em entregar projetos de alta qualidade que gerem mudanças reais na vida das pessoas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-r from-[#800020] to-[#600018] rounded-3xl p-12 text-white text-center">
                    <h2 class="text-3xl font-bold mb-4">Una-se à Nossa Missão</h2>
                    <p class="text-gray-200 mb-8 max-w-2xl mx-auto">
                        Acreditamos que o desenvolvimento rural é o motor para um Moçambique mais próspero. Seja um parceiro ou voluntário da ADEFARMO.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="<?= url('pages/contacto') ?>" class="inline-block bg-white text-[#800020] px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-all shadow-xl">
                            Como Colaborar
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
