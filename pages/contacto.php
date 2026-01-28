<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="max-w-7xl mx-auto bg-white dark:bg-gray-900 shadow-2xl overflow-hidden min-h-screen pt-20">
        
        <section class="py-16 bg-[#800020] text-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Entre em Contacto</h1>
                <p class="text-xl opacity-90">Estamos à disposição para parcerias, voluntariado e informações sobre nossas ações em Cabo Delgado.</p>
            </div>
        </section>

        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                
                <div class="grid md:grid-cols-2 gap-12 mb-20">
                    <div>
                        <h2 class="text-3xl font-bold mb-8">Informações de Contacto</h2>
                        
                        <div class="space-y-6 mb-10">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-6 h-6 text-[#800020]"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Sede Administrativa</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Cidade de Pemba, Bairro da Expansão<br>Cabo Delgado, Moçambique</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-6 h-6 text-[#FF8C00]"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Telefones</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Geral: +258 8X XXX XXXX<br>
                                        WhatsApp: +258 8X XXX XXXX
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-6 h-6 text-[#00008B]"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Geral: contacto@adefarmo.org.mz<br>
                                        Parcerias: parcerias@adefarmo.org.mz
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-lg flex items-center justify-center shrink-0">
                                    <i data-lucide="clock" class="w-6 h-6 text-gray-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-1">Horário de Atendimento</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Segunda a Sexta: 8h00 - 17h00<br>
                                        Sábado: 8h00 - 12h00
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#FFF5F5] dark:bg-gray-800 rounded-xl p-6 border-l-4 border-[#800020]">
                            <h3 class="font-bold mb-4 flex items-center gap-2">
                                <i data-lucide="heart" class="w-5 h-5 text-[#800020]"></i>
                                Seja um Voluntário
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                Junte-se a nós nas ações de educação ambiental e mobilização comunitária. Sua ajuda faz a diferença no desenvolvimento da família rural.
                            </p>
                            <a href="#" class="text-[#800020] font-bold text-sm flex items-center gap-2">
                                Saiba Mais <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <h2 class="text-2xl font-bold mb-6">Envie uma Mensagem</h2>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium mb-2">Nome Completo *</label>
                                <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#800020] focus:ring-2 focus:ring-[#800020]/20 transition-colors" placeholder="Seu nome">
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email *</label>
                                    <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#800020] focus:ring-2 focus:ring-[#800020]/20 transition-colors" placeholder="email@exemplo.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Telefone *</label>
                                    <input type="tel" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#800020] focus:ring-2 focus:ring-[#800020]/20 transition-colors" placeholder="+258 XX XXX XXXX">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Interesse *</label>
                                <select required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#800020] focus:ring-2 focus:ring-[#800020]/20 transition-colors">
                                    <option value="">Selecione uma opção</option>
                                    <option>Parceria Institucional</option>
                                    <option>Voluntariado</option>
                                    <option>Educação Ambiental</option>
                                    <option>Desenvolvimento Rural</option>
                                    <option>Outros Assuntos</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Mensagem *</label>
                                <textarea required rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 focus:outline-none focus:border-[#800020] focus:ring-2 focus:ring-[#800020]/20 transition-colors resize-none" placeholder="Como podemos colaborar?"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#800020] text-white py-4 rounded-lg font-bold hover:bg-[#600018] transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                                <i data-lucide="send" class="w-5 h-5"></i>
                                Enviar Mensagem
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Parceiros Section -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-3xl p-12">
                    <h2 class="text-2xl font-bold text-center mb-8">Nossos Parceiros e Colaboradores</h2>
                    <div class="grid md:grid-cols-4 gap-8 text-center items-center opacity-60 grayscale hover:grayscale-0 transition-all">
                        <div class="text-xl font-bold">CESC</div>
                        <div class="text-xl font-bold">IGUAL</div>
                        <div class="text-xl font-bold">Governo de Moçambique</div>
                        <div class="text-xl font-bold">Associações Locais</div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('scripts');
get_part('footer');
?>
