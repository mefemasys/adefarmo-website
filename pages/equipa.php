<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#800020] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Nossa Equipa</h1>
                <p class="text-xl opacity-90">Pessoas dedicadas ao desenvolvimento da família rural em Moçambique.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold mb-6">Liderança e Compromisso</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Nossa equipa é composta por profissionais e voluntários apaixonados pela causa social e ambiental, trabalhando juntos para transformar a realidade das comunidades de Cabo Delgado.
                    </p>
                </div>

                <!-- Liderança Executiva -->
                <div class="mb-20">
                    <div class="grid md:grid-cols-3 gap-12">
                        <!-- Membro 1 -->
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all border-b-4 border-[#800020]">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover" alt="Direção Executiva">
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold mb-1">Direção Executiva</h3>
                                <p class="text-[#800020] font-semibold mb-4">Coordenação Geral</p>
                                <p class="text-sm text-gray-500">Liderança estratégica e representação institucional da ADEFARMO.</p>
                            </div>
                        </div>

                        <!-- Membro 2 -->
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all border-b-4 border-[#FF8C00]">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover" alt="Gestão de Projetos">
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold mb-1">Gestão de Projetos</h3>
                                <p class="text-[#FF8C00] font-semibold mb-4">Educação Ambiental</p>
                                <p class="text-sm text-gray-500">Coordenação dos Clubes dos Amigos do Meio Ambiente e ações de reciclagem.</p>
                            </div>
                        </div>

                        <!-- Membro 3 -->
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all border-b-4 border-[#2E8B57]">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover" alt="Mobilização Comunitária">
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold mb-1">Equipa de Campo</h3>
                                <p class="text-[#2E8B57] font-semibold mb-4">Mobilização Social</p>
                                <p class="text-sm text-gray-500">Atuação direta nas comunidades rurais de Chiúre e Pemba.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action - Voluntariado -->
                <div class="bg-[#800020] rounded-3xl p-12 text-white text-center">
                    <h2 class="text-3xl font-bold mb-4">Quer Fazer Parte?</h2>
                    <p class="text-gray-200 mb-8 max-w-2xl mx-auto">A ADEFARMO está sempre aberta a novos voluntários e colaboradores que queiram contribuir para o desenvolvimento de Moçambique.</p>
                    <a href="<?= url('pages/contacto') ?>" class="inline-block bg-white text-[#800020] px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-all shadow-xl">
                        Candidate-se ao Voluntariado
                    </a>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
