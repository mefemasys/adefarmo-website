<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#800020] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Desenvolvimento Rural</h1>
                <p class="text-xl opacity-90">Fortalecendo a agricultura familiar e a segurança alimentar em Cabo Delgado.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Capacitação para a Autossuficiência</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg">
                            A ADEFARMO trabalha diretamente com famílias rurais para introduzir técnicas agrícolas sustentáveis que aumentam a produtividade sem comprometer o solo.
                        </p>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="sprout" class="text-[#800020]"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold">Técnicas de Cultivo</h3>
                                    <p class="text-sm text-gray-500">Introdução de rotação de culturas e uso de sementes melhoradas.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="droplets" class="text-[#2E8B57]"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold">Gestão de Água</h3>
                                    <p class="text-sm text-gray-500">Sistemas simples de irrigação e conservação de fontes hídricas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1592910129881-892b7b392811?auto=format&fit=crop&w=800&q=80" alt="Agricultura Familiar" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
