<?php
require_once __DIR__ . '/../config/url-config.php';
?>

<footer class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-[#800020] rounded-md flex items-center justify-center text-white font-bold">
                        AD
                    </div>
                    <span class="font-bold text-2xl tracking-tight">ADEFARMO</span>
                </div>
                <p class="text-gray-400 max-w-sm mb-6">
                    Associação Acções para o Desenvolvimento da Família Rural Moçambicana. 
                    Promovendo o desenvolvimento sustentável e a educação ambiental em Cabo Delgado.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#800020] transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#800020] transition-colors">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#800020] transition-colors">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <!-- Links Rápidos -->
            <div>
                <h4 class="font-bold mb-6 text-lg">Organização</h4>
                <ul class="space-y-4 text-gray-400">
                    <li><a href="<?= url('pages/sobre') ?>" class="hover:text-white transition-colors">Quem Somos</a></li>
                    <li><a href="<?= url('pages/missao-valores') ?>" class="hover:text-white transition-colors">Missão e Valores</a></li>
                    <li><a href="<?= url('pages/equipa') ?>" class="hover:text-white transition-colors">Nossa Equipa</a></li>
                    <li><a href="<?= url('pages/contacto') ?>" class="hover:text-white transition-colors">Contacto</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h4 class="font-bold mb-6 text-lg">Sede</h4>
                <ul class="space-y-4 text-gray-400">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="text-[#800020] shrink-0"></i>
                        <span>Pemba, Província de Cabo Delgado, Moçambique</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="text-[#800020] shrink-0"></i>
                        <span>+258 8X XXX XXXX</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="text-[#800020] shrink-0"></i>
                        <span>contacto@adefarmo.org.mz</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4 text-gray-500 text-sm">
            <p>&copy; <?= date('Y') ?> ADEFARMO – Associação Acções para o Desenvolvimento da Família Rural Moçambicana. Todos os direitos reservados.</p>
            
            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6">
                <p class="text-gray-600 text-xs md:text-sm text-right md:text-left">
                    Desenvolvido por <a href="https://mefemasys.co.mz" target="_blank" rel="noopener" class="text-gray-300 transition-colors">MEFEMA Systems</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>