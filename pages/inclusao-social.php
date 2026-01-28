_<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#00008B] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Inclusão Social</h1>
                <p class="text-xl opacity-90">Focando no empoderamento de jovens e comunidades vulneráveis.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
                    <div class="rounded-3xl overflow-hidden shadow-2xl order-2 md:order-1">
                        <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80" alt="Inclusão de Jovens" class="w-full h-full object-cover">
                    </div>
                    <div class="order-1 md:order-2">
                        <h2 class="text-3xl font-bold mb-6">O Futuro de Cabo Delgado</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg">
                            Nossos programas de inclusão visam integrar jovens em atividades produtivas e de preservação ambiental, criando oportunidades de liderança local.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="text-[#00008B] mt-1"></i>
                                <span>Capacitação em liderança comunitária.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="text-[#00008B] mt-1"></i>
                                <span>Integração em projetos de economia circular.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="text-[#00008B] mt-1"></i>
                                <span>Apoio a grupos de mulheres rurais.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
