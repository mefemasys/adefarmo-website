_<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#FF8C00] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Parcerias e Colaboração</h1>
                <p class="text-xl opacity-90">Trabalhando juntos para o desenvolvimento sustentável de Cabo Delgado.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">Nossos Parceiros Estratégicos</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">A ADEFARMO acredita que a colaboração é a chave para maximizar o impacto social e ambiental.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <div class="p-10 bg-gray-50 dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700">
                        <h3 class="text-2xl font-bold mb-4 text-[#FF8C00]">CESC</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            O Centro de Aprendizagem e Capacitação da Sociedade Civil tem sido um parceiro fundamental no fortalecimento institucional da ADEFARMO.
                        </p>
                    </div>
                    <div class="p-10 bg-gray-50 dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700">
                        <h3 class="text-2xl font-bold mb-4 text-[#FF8C00]">IGUAL</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            Colaboração focada na promoção da igualdade de oportunidades e inclusão social em nossas frentes de trabalho.
                        </p>
                    </div>
                </div>

                <div class="mt-20 bg-[#FFF5F5] dark:bg-gray-800 p-12 rounded-3xl text-center">
                    <h2 class="text-3xl font-bold mb-6">Seja um Parceiro</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">Sua organização pode ajudar a expandir os "Clubes dos Amigos do Meio Ambiente" ou apoiar o desenvolvimento rural.</p>
                    <a href="<?= url('pages/contacto') ?>'" class="inline-block bg-[#800020] text-white px-8 py-4 rounded-lg font-bold hover:bg-[#600018] transition-all">
                        Solicitar Proposta de Parceria
                    </a>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
