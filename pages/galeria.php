<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#00008B] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Nossa Galeria</h1>
                <p class="text-xl opacity-90">Registos das nossas ações e impacto nas comunidades de Cabo Delgado.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="flex flex-wrap gap-4 justify-center mb-12">
                    <button class="px-6 py-2 bg-[#00008B] text-white rounded-lg font-semibold shadow-md">Todas</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Desenvolvimento Rural</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Educação Ambiental</button>
                    <button class="px-6 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Comunidade</button>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <!-- Item 1 -->
                    <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-lg cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1592910129881-892b7b392811?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Desenvolvimento Rural">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="text-white">
                                <h3 class="font-bold">Capacitação em Chiúre</h3>
                                <p class="text-sm opacity-80">Desenvolvimento Rural</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-lg cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Educação Ambiental">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="text-white">
                                <h3 class="font-bold">Clubes Ambientais em Pemba</h3>
                                <p class="text-sm opacity-80">Educação Ambiental</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-lg cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Inclusão Social">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="text-white">
                                <h3 class="font-bold">Encontro de Jovens</h3>
                                <p class="text-sm opacity-80">Inclusão Social</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-lg cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Meio Ambiente">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="text-white">
                                <h3 class="font-bold">Ação de Reciclagem</h3>
                                <p class="text-sm opacity-80">Educação Ambiental</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
