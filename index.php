<?php
require_once __DIR__ . '/config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen">
        
        <!-- Hero ADEFARMO -->
        <section class="relative h-[90vh] flex items-center justify-center text-white overflow-hidden hero-adefarmo">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="relative z-20 text-center px-6 max-w-5xl">
                <span class="inline-block px-4 py-1 bg-[#800020] text-white rounded-full text-sm font-bold mb-6 uppercase tracking-widest">Capacitando Famílias Rurais em Moçambique</span>
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">Ações para o <br><span class="text-[#FF8C00]">Desenvolvimento da Família</span></h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-100 max-w-3xl mx-auto">Promovemos o desenvolvimento rural sustentável e a educação ambiental na província de Cabo Delgado.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="<?= url('pages/sobre') ?>" class="bg-[#800020] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#600018] transition-all shadow-xl text-lg flex items-center gap-2">
                        Saiba Mais <i data-lucide="info" class="w-5 h-5"></i>
                    </a>
                    <a href="<?= url('pages/educacao-ambiental') ?>" class="bg-white/10 backdrop-blur-md border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-gray-900 transition-all text-lg">
                        Nossos Projetos
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-12 bg-[#800020] text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-extrabold mb-2">10+</div>
                        <div class="text-sm opacity-80 uppercase tracking-wider">Anos de Atuação</div>
                    </div>
                    <div>
                        <div class="text-4xl font-extrabold mb-2">500+</div>
                        <div class="text-sm opacity-80 uppercase tracking-wider">Famílias Apoiadas</div>
                    </div>
                    <div>
                        <div class="text-4xl font-extrabold mb-2">20+</div>
                        <div class="text-sm opacity-80 uppercase tracking-wider">Clubes Ambientais</div>
                    </div>
                    <div>
                        <div class="text-4xl font-extrabold mb-2">100%</div>
                        <div class="text-sm opacity-80 uppercase tracking-wider">Sem Fins Lucrativos</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Áreas de Atuação -->
        <section class="py-24 bg-gray-50 dark:bg-gray-800/50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4">Nossas Frentes de Trabalho</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Atuamos de forma integrada para melhorar a qualidade de vida nas comunidades de Cabo Delgado.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Desenvolvimento Rural -->
                    <div class="card-ngo group">
                        <div class="h-64 bg-[url('https://images.unsplash.com/photo-1592910129881-892b7b392811?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center"></div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <i data-lucide="home" class="text-[#800020] w-8 h-8"></i>
                                <h3 class="text-2xl font-bold">Desenvolvimento Rural</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Capacitação técnica e apoio a famílias rurais para o auto-desenvolvimento e segurança alimentar.</p>
                            <a href="<?= url('pages/desenvolvimento-rural') ?>" class="text-[#800020] font-bold flex items-center gap-2 group-hover:gap-3 transition-all">
                                Ver Detalhes <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Educação Ambiental -->
                    <div class="card-ngo group">
                        <div class="h-64 bg-[url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center"></div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <i data-lucide="leaf" class="text-[#2E8B57] w-8 h-8"></i>
                                <h3 class="text-2xl font-bold">Educação Ambiental</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Implementação dos "Clubes dos Amigos do Meio Ambiente" para gestão de resíduos e reciclagem.</p>
                            <a href="<?= url('pages/educacao-ambiental') ?>" class="text-[#2E8B57] font-bold flex items-center gap-2 group-hover:gap-3 transition-all">
                                Ver Projetos <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Inclusão de Jovens -->
                    <div class="card-ngo group">
                        <div class="h-64 bg-[url('https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center"></div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <i data-lucide="users" class="text-[#00008B] w-8 h-8"></i>
                                <h3 class="text-2xl font-bold">Inclusão Social</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Foco na inclusão de jovens e comunidades vulneráveis em processos de desenvolvimento local.</p>
                            <a href="<?= url('pages/inclusao-social') ?>" class="text-[#00008B] font-bold flex items-center gap-2 group-hover:gap-3 transition-all">
                                Saiba Mais <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Compromisso Ambiental Banner -->
        <section class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-6xl mx-auto px-6">
                <div class="bg-[#FFF5F5] dark:bg-gray-800 rounded-3xl p-12 flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2">
                        <h2 class="text-4xl font-bold mb-6">Compromisso com o Meio Ambiente</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">Nossa atuação em Cabo Delgado foca na preservação ambiental através da educação e práticas sustentáveis de gestão de resíduos.</p>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="flex items-center gap-3">
                                <i data-lucide="recycle" class="text-[#2E8B57]"></i>
                                <span class="font-semibold">Reciclagem & Compostagem</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i data-lucide="globe" class="text-[#2E8B57]"></i>
                                <span class="font-semibold">Consciência Comunitária</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80" alt="Meio Ambiente" class="rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
