<?php

use App\core\Application;

?>

<section class="relative bg-slate-900 overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-blue-600 blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-purple-600 blur-3xl opacity-20"></div>

    <div class="container mx-auto px-4 py-16 md:py-24 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">

            <div class="md:w-1/2 text-center md:text-left fade-in-up">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-900/50 border border-blue-700 text-blue-300 text-xs font-semibold uppercase tracking-wide mb-6">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                    Nouveauté 2026
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-6">
                    Bienvenue <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500"><?= Application::$app->user ? Application::$app->user->getDisplayName() : 'User' ?></span>
                </h1>
                <p class="text-gray-400 text-lg mb-8 leading-relaxed max-w-lg mx-auto md:mx-0">
                    Découvrez une sélection exclusive des meilleurs produits High-Tech. Performance brute, design épuré,
                    prix imbattables.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#caratlogue"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition transform hover:scale-105 shadow-lg shadow-blue-600/30">
                        Voir le catalogue
                    </a>
                    <a href="#products"
                       class="bg-slate-800 hover:bg-slate-700 text-white font-semibold py-3 px-8 rounded-full border border-slate-700 transition">
                        Nos Promos
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 relative fade-in-up" style="animation-delay: 0.2s;">
                <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?q=80&w=1000&auto=format&fit=crop"
                     alt="Setup Gamer High Tech"
                     class="rounded-2xl shadow-2xl border border-slate-700 transform md:rotate-2 hover:rotate-0 transition duration-500 w-full object-cover h-[400px]">
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-white border-b">
    <div class="container mx-auto px-4">
        <p class="text-center text-sm font-medium text-gray-400 mb-8 uppercase tracking-widest">Nos partenaires
            officiels</p>
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
            <i class="ti ti-brand-apple text-4xl"></i>
            <i class="ti ti-brand-windows text-4xl"></i>
            <i class="ti ti-brand-android text-4xl"></i>
            <i class="ti ti-brand-samsung text-4xl"></i>
            <i class="ti ti-brand-sony text-4xl"></i>
        </div>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-bold text-slate-900" id="caratlogue">Parcourir par catégorie</h2>
                <p class="text-gray-500 mt-2">Trouvez exactement ce que vous cherchez.</p>
            </div>
            <a href="#"
               class="hidden md:flex items-center gap-1 text-blue-600 font-semibold hover:gap-2 transition-all">
                Tout voir <i class="ti ti-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <a href="#"
               class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                <div class="w-14 h-14 mx-auto bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ti ti-device-laptop text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-700 group-hover:text-blue-600">PC Portables</h3>
                <span class="text-xs text-gray-400">120 produits</span>
            </a>

            <a href="#"
               class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                <div class="w-14 h-14 mx-auto bg-purple-50 text-purple-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ti ti-device-mobile text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-700 group-hover:text-purple-600">Smartphones</h3>
                <span class="text-xs text-gray-400">85 produits</span>
            </a>

            <a href="#"
               class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                <div class="w-14 h-14 mx-auto bg-red-50 text-red-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ti ti-device-gamepad-2 text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-700 group-hover:text-red-600">Gaming</h3>
                <span class="text-xs text-gray-400">40 produits</span>
            </a>

            <a href=""
               class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                <div class="w-14 h-14 mx-auto bg-orange-50 text-orange-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ti ti-camera text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-700 group-hover:text-orange-600">Photo & Vidéo</h3>
                <span class="text-xs text-gray-400">32 produits</span>
            </a>

            <a href="#"
               class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                <div class="w-14 h-14 mx-auto bg-teal-50 text-teal-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ti ti-headphones text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-700 group-hover:text-teal-600">Audio</h3>
                <span class="text-xs text-gray-400">65 produits</span>
            </a>

            <a href="#"
               class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                <div class="w-14 h-14 mx-auto bg-gray-100 text-gray-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ti ti-dots text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-700 group-hover:text-black">Accessoires</h3>
                <span class="text-xs text-gray-400">200+ produits</span>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50" id="products">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-slate-900 mb-8 text-center">Les pépites du moment 🔥</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 group overflow-hidden border border-gray-100">
                <div class="relative p-6 bg-gray-50 h-64 flex items-center justify-center">
                    <span class="absolute top-4 left-4 bg-black text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Premium</span>
                    <i class="ti ti-device-laptop text-9xl text-gray-300 group-hover:scale-105 transition-transform duration-500"></i>

                    <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity translate-y-2 group-hover:translate-y-0">
                        <button class="bg-white text-slate-900 p-3 rounded-full shadow-lg hover:bg-blue-600 hover:text-white transition">
                            <i class="ti ti-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-lg text-slate-900 leading-tight">MacBook Pro 14" M3</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-4 truncate">Puce Apple M3, 8 Go RAM, 512 Go SSD...</p>
                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <span class="block text-xl font-bold text-slate-900">1 599 €</span>
                            <span class="text-xs text-green-600 font-medium">En stock</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition flex items-center gap-2">
                            <i class="ti ti-shopping-cart-plus"></i>
                            <span>Ajouter</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 group overflow-hidden border border-gray-100">
                <div class="relative p-6 bg-gray-50 h-64 flex items-center justify-center">
                    <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">-20%</span>
                    <i class="ti ti-headset text-9xl text-gray-300 group-hover:scale-105 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-slate-900 leading-tight mb-2">Sony WH-1000XM5</h3>
                    <p class="text-sm text-gray-500 mb-4 truncate">Réduction de bruit active, 30h autonomie</p>
                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <span class="block text-xl font-bold text-slate-900">320 €</span>
                            <span class="text-sm text-gray-400 line-through">399 €</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition flex items-center gap-2">
                            <i class="ti ti-shopping-cart-plus"></i>
                            <span>Ajouter</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 group overflow-hidden border border-gray-100">
                <div class="relative p-6 bg-gray-50 h-64 flex items-center justify-center">
                    <i class="ti ti-device-gamepad-2 text-9xl text-gray-300 group-hover:scale-105 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-slate-900 leading-tight mb-2">PS5 DualSense Edge</h3>
                    <p class="text-sm text-gray-500 mb-4 truncate">Manette pro sans fil personnalisable</p>
                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <span class="block text-xl font-bold text-slate-900">239 €</span>
                            <span class="text-xs text-orange-500 font-medium">Stock faible</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition flex items-center gap-2">
                            <i class="ti ti-shopping-cart-plus"></i>
                            <span>Ajouter</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 group overflow-hidden border border-gray-100">
                <div class="relative p-6 bg-gray-50 h-64 flex items-center justify-center">
                    <span class="absolute top-4 left-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">New</span>
                    <i class="ti ti-device-watch text-9xl text-gray-300 group-hover:scale-105 transition-transform duration-500"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-slate-900 leading-tight mb-2">Apple Watch Ultra 2</h3>
                    <p class="text-sm text-gray-500 mb-4 truncate">Titane, GPS + Cellular, Bracelet Océan</p>
                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <span class="block text-xl font-bold text-slate-900">899 €</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition flex items-center gap-2">
                            <i class="ti ti-shopping-cart-plus"></i>
                            <span>Ajouter</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
            <a href="#"
               class="inline-block border-2 border-slate-900 text-slate-900 font-bold py-3 px-8 rounded-full hover:bg-slate-900 hover:text-white transition uppercase tracking-wide text-sm">
                Voir tous les produits
            </a>
        </div>
    </div>
</section>

<footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-900">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <a href="#" class="text-2xl font-bold text-white">
                Electro<span class="text-blue-600">Shop</span>
            </a>
            <ul class="flex gap-8 text-sm font-medium">
                <li><a href="#" class="hover:text-white transition">À propos</a></li>
                <li><a href="#" class="hover:text-white transition">Conditions de vente</a></li>
                <li><a href="#" class="hover:text-white transition">Politique de confidentialité</a></li>
            </ul>
            <div class="flex gap-4">
                <a href="#" class="bg-slate-900 p-2 rounded-full hover:bg-blue-600 hover:text-white transition"><i
                            class="ti ti-brand-facebook"></i></a>
                <a href="#" class="bg-slate-900 p-2 rounded-full hover:bg-blue-600 hover:text-white transition"><i
                            class="ti ti-brand-twitter"></i></a>
                <a href="#" class="bg-slate-900 p-2 rounded-full hover:bg-blue-600 hover:text-white transition"><i
                            class="ti ti-brand-instagram"></i></a>
            </div>
        </div>
        <div class="text-center mt-8 text-xs text-slate-600">
            &copy; 2026 ElectroShop Inc. Designé pour le futur.
        </div>
    </div>
</footer>

<div id="cartOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[60] hidden transition-opacity duration-300 opacity-0"></div>

<div id="cartSidebar" class="fixed top-0 right-0 h-full w-full max-w-md bg-white z-[70] shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out flex flex-col">
    <div class="p-8 border-b flex justify-between items-center bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>
        <div class="relative z-10">
            <h2 class="text-xl font-bold flex items-center gap-2 italic uppercase tracking-tighter">
                <i class="ti ti-shopping-cart text-blue-400"></i> Mon <span class="text-blue-400">Panier</span>
            </h2>
            <p class="text-[10px] text-slate-400 uppercase tracking-widest mt-1">3 articles sélectionnés</p>
        </div>
        <button onclick="toggleCart()" class="relative z-10 w-10 h-10 flex items-center justify-center bg-slate-800 hover:bg-red-500 rounded-full transition-all">
            <i class="ti ti-x text-xl"></i>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto p-6 space-y-6 bg-gray-50/50">
        <div class="flex gap-4 p-4 bg-white rounded-2xl border border-gray-100 shadow-sm items-center group">
            <div class="w-20 h-20 bg-gray-50 rounded-xl flex items-center justify-center border group-hover:border-blue-200 transition">
                <i class="ti ti-device-laptop text-3xl text-gray-400"></i>
            </div>
            <div class="flex-1">
                <div class="flex justify-between items-start">
                    <h4 class="font-bold text-slate-800 text-sm leading-tight">MacBook Pro 14" M3</h4>
                    <button class="text-gray-300 hover:text-red-500 transition"><i class="ti ti-trash"></i></button>
                </div>
                <div class="flex justify-between items-end mt-3">
                    <span class="font-black text-blue-600">1 599 €</span>
                    <div class="flex items-center gap-2 border border-gray-100 bg-gray-50 rounded-lg p-1">
                        <button class="w-6 h-6 flex items-center justify-center hover:bg-white rounded">-</button>
                        <span class="text-xs font-bold w-4 text-center">1</span>
                        <button class="w-6 h-6 flex items-center justify-center hover:bg-white rounded">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-8 border-t bg-white space-y-4 shadow-[0_-10px_40px_rgba(0,0,0,0.05)]">
        <div class="flex justify-between items-end mb-4">
            <span class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Sous-total</span>
            <span class="text-2xl font-black text-slate-900">1 599 €</span>
        </div>
        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl transition shadow-xl shadow-blue-600/20 uppercase tracking-[0.1em] text-xs">
            Passer à la caisse
        </button>
        <a href="/cart" class="block text-center text-sm font-bold text-slate-400 hover:text-blue-600 py-2 transition">Voir le panier complet</a>
    </div>
</div>
