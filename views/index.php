<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroShop - Le Futur est ici</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animation douce pour l'apparition */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

<header class="bg-white sticky top-0 z-50 shadow-sm backdrop-blur-md bg-opacity-90">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">

        <a href="#" class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-slate-900">
            <div class="bg-blue-600 text-white p-1 rounded-lg">
                <i class="ti ti-bolt text-xl"></i>
            </div>
            Electro<span class="text-blue-600">Shop</span>
        </a>

        <div class="hidden md:block flex-1 mx-12">
            <div class="relative group">
                <input type="text"
                       class="w-full bg-gray-100 border-transparent focus:bg-white border focus:border-blue-500 rounded-full py-2.5 pl-5 pr-12 transition duration-300 focus:ring-4 focus:ring-blue-100 outline-none"
                       placeholder="Chercher Apple, Samsung, RTX...">
                <button class="absolute right-2 top-1 bg-white p-1.5 rounded-full text-gray-500 hover:text-blue-600 shadow-sm">
                    <i class="ti ti-search"></i>
                </button>
            </div>
        </div>

        <div class="flex items-center gap-6">
            <a href="#" class="flex items-center gap-2 hover:text-blue-600 transition font-medium text-sm">
                <i class="ti ti-user-circle text-xl"></i>
                <span class="hidden sm:block">Connexion</span>
            </a>
            <a href="#" class="relative hover:text-blue-600 transition">
                <div class="p-2 bg-gray-100 rounded-full hover:bg-blue-50 transition">
                    <i class="ti ti-shopping-cart text-xl"></i>
                </div>
                <span class="absolute -top-1 -right-1 bg-blue-600 text-white text-[10px] font-bold h-5 w-5 flex items-center justify-center rounded-full border-2 border-white">3</span>
            </a>
        </div>
    </div>
</header>

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
                    L'Excellence <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">Technologique.</span>
                </h1>
                <p class="text-gray-400 text-lg mb-8 leading-relaxed max-w-lg mx-auto md:mx-0">
                    Découvrez une sélection exclusive des meilleurs produits High-Tech. Performance brute, design épuré,
                    prix imbattables.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition transform hover:scale-105 shadow-lg shadow-blue-600/30">
                        Voir le catalogue
                    </a>
                    <a href="#"
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
                <h2 class="text-3xl font-bold text-slate-900">Parcourir par catégorie</h2>
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

            <a href="#"
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

<section class="py-16 bg-gray-50">
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

</body>
</html>