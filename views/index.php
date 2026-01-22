<?php ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroShop - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css">

    <style>
body { font-family: 'Inter', sans-serif; }
        .tech-gradient { background: linear-gradient(90deg, #1e3a8a 0%, #3b82f6 100%); }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white sticky top-0 z-50 shadow-sm">
        <div class="border-b border-gray-200">
            <div class="container mx-auto px-4 py-3 flex items-center justify-between">

                <a href="#" class="text-2xl font-bold tracking-tighter text-gray-900">
                    <span class="text-blue-600">Electro</span>Shop
                </a>

                <div class="hidden md:flex flex-1 mx-10 max-w-xl">
                    <div class="relative w-full">
                        <input type="text" class="w-full border border-gray-300 rounded-lg py-2 pl-4 pr-10 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600" placeholder="Rechercher un produit (ex: iPhone 15, RTX 4060...)">
                        <button class="absolute right-0 top-0 h-full px-3 text-gray-500 hover:text-blue-600">
                            <i class="ti ti-search text-xl"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center space-x-5">
                    <a href="#" class="text-gray-600 hover:text-blue-600 flex flex-col items-center text-xs">
                        <i class="ti ti-user text-xl mb-1"></i>
                        <span>Compte</span>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 relative flex flex-col items-center text-xs">
                        <i class="ti ti-shopping-cart text-xl mb-1"></i>
                        <span>Panier</span>
                        <span class="absolute -top-1 right-1 bg-red-500 text-white text-[10px] font-bold px-1.5 rounded-full">2</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-slate-900 text-white hidden md:block">
            <div class="container mx-auto px-4">
                <ul class="flex space-x-8 py-3 text-sm font-medium">
                    <li><a href="#" class="hover:text-blue-400 text-blue-400">Accueil</a></li>
                    <li><a href="#" class="hover:text-blue-400">Ordinateurs</a></li>
                    <li><a href="#" class="hover:text-blue-400">Smartphones</a></li>
                    <li><a href="#" class="hover:text-blue-400">Gaming</a></li>
                    <li><a href="#" class="hover:text-blue-400">Composants</a></li>
                    <li><a href="#" class="hover:text-blue-400">Accessoires</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="rounded-2xl tech-gradient p-8 md:p-12 relative overflow-hidden text-white flex items-center shadow-lg">
                <div class="relative z-10 max-w-lg">
                    <span class="bg-yellow-400 text-slate-900 text-xs font-bold px-2 py-1 rounded uppercase mb-3 inline-block">Promo de la semaine</span>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">Le Futur est <br>entre vos mains.</h1>
                    <p class="text-blue-100 mb-6 text-lg">Découvrez les nouveaux processeurs M3 Ultra avec des performances inégalées.</p>
                    <a href="#" class="bg-white text-blue-700 hover:bg-gray-100 font-semibold py-3 px-6 rounded-lg transition shadow-md">
    Acheter maintenant <i class="ti ti-arrow-right ml-1"></i>
                    </a>
                </div>
                <div class="absolute right-0 bottom-0 opacity-20 md:opacity-100 md:w-1/2">
                    <i class="ti ti-device-laptop text-[300px] text-white/30 transform translate-x-10 translate-y-10"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-900">Catégories Populaires</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <a href="#" class="bg-white border hover:border-blue-500 hover:shadow-md rounded-xl p-4 text-center transition group">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-50">
                        <i class="ti ti-device-laptop text-2xl text-gray-600 group-hover:text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-blue-600">Laptops</h3>
                </a>

                <a href="#" class="bg-white border hover:border-blue-500 hover:shadow-md rounded-xl p-4 text-center transition group">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-50">
                        <i class="ti ti-device-mobile text-2xl text-gray-600 group-hover:text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-blue-600">Mobiles</h3>
                </a>

                <a href="#" class="bg-white border hover:border-blue-500 hover:shadow-md rounded-xl p-4 text-center transition group">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-50">
                        <i class="ti ti-headphones text-2xl text-gray-600 group-hover:text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-blue-600">Audio</h3>
                </a>

                <a href="#" class="bg-white border hover:border-blue-500 hover:shadow-md rounded-xl p-4 text-center transition group">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-50">
                        <i class="ti ti-device-gamepad-2 text-2xl text-gray-600 group-hover:text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-blue-600">Gaming</h3>
                </a>

                <a href="#" class="bg-white border hover:border-blue-500 hover:shadow-md rounded-xl p-4 text-center transition group">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-50">
                        <i class="ti ti-camera text-2xl text-gray-600 group-hover:text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-blue-600">Photo</h3>
                </a>

                <a href="#" class="bg-white border hover:border-blue-500 hover:shadow-md rounded-xl p-4 text-center transition group">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-50">
                        <i class="ti ti-cpu text-2xl text-gray-600 group-hover:text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700 group-hover:text-blue-600">Composants</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Derniers Arrivages</h2>
                <a href="#" class="text-blue-600 font-medium text-sm hover:underline">Voir tout <i class="ti ti-chevron-right text-xs"></i></a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition relative group">
                    <span class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">-10%</span>
                    <div class="h-48 flex items-center justify-center mb-4 bg-gray-50 rounded">
                        <i class="ti ti-device-laptop text-6xl text-gray-300"></i>
                    </div>
                    <div class="text-xs text-gray-500 mb-1">Ordinateurs</div>
                    <h3 class="font-bold text-gray-900 mb-2 truncate">MacBook Pro 14" M3</h3>
                    <div class="flex items-center space-x-1 mb-3">
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-half-filled text-yellow-400 text-xs"></i>
                        <span class="text-xs text-gray-400">(24 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-lg">1,299 €</span>
                            <span class="text-sm text-gray-400 line-through">1,450 €</span>
                        </div>
                        <button class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition relative">
                    <div class="h-48 flex items-center justify-center mb-4 bg-gray-50 rounded">
                        <i class="ti ti-device-mobile text-6xl text-gray-300"></i>
                    </div>
                    <div class="text-xs text-gray-500 mb-1">Smartphones</div>
                    <h3 class="font-bold text-gray-900 mb-2 truncate">Samsung Galaxy S24 Ultra</h3>
                    <div class="flex items-center space-x-1 mb-3">
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star text-gray-300 text-xs"></i>
                        <span class="text-xs text-gray-400">(8 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-lg">1,150 €</span>
                        <button class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition relative">
                     <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Nouveau</span>
                    <div class="h-48 flex items-center justify-center mb-4 bg-gray-50 rounded">
                        <i class="ti ti-headphones text-6xl text-gray-300"></i>
                    </div>
                    <div class="text-xs text-gray-500 mb-1">Audio</div>
                    <h3 class="font-bold text-gray-900 mb-2 truncate">Sony WH-1000XM5</h3>
                    <div class="flex items-center space-x-1 mb-3">
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <span class="text-xs text-gray-400">(42 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-lg">349 €</span>
                        <button class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-lg transition relative">
                    <div class="h-48 flex items-center justify-center mb-4 bg-gray-50 rounded">
                        <i class="ti ti-device-gamepad-2 text-6xl text-gray-300"></i>
                    </div>
                    <div class="text-xs text-gray-500 mb-1">Gaming</div>
                    <h3 class="font-bold text-gray-900 mb-2 truncate">Manette Xbox Elite Series 2</h3>
                    <div class="flex items-center space-x-1 mb-3">
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star-filled text-yellow-400 text-xs"></i>
                        <i class="ti ti-star text-gray-300 text-xs"></i>
                        <span class="text-xs text-gray-400">(15 avis)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-lg">159 €</span>
                        <button class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <a href="#" class="text-2xl font-bold text-white mb-4 block"><span class="text-blue-500">Electro</span>Shop</a>
    <p class="text-sm">Votre destination numéro 1 pour tous les produits électroniques, composants et accessoires.</p>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-3">Catégories</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:text-blue-400">Ordinateurs</a></li>
                        <li><a href="#" class="hover:text-blue-400">Smartphones</a></li>
                        <li><a href="#" class="hover:text-blue-400">Gaming</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-3">Aide</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:text-blue-400">Mon Compte</a></li>
                        <li><a href="#" class="hover:text-blue-400">Suivre ma commande</a></li>
                        <li><a href="#" class="hover:text-blue-400">SAV</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-3">Contact</h3>
                    <ul class="text-sm space-y-2">
                        <li><i class="ti ti-map-pin mr-1"></i> 123 Tech Street, Paris</li>
                        <li><i class="ti ti-mail mr-1"></i> contact@electroshop.com</li>
                        <li><i class="ti ti-phone mr-1"></i> +33 1 23 45 67 89</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-6 text-center text-sm">
                &copy; 2026 ElectroShop. Tous droits réservés.
            </div>
        </div>
    </footer>

</body>
</html>