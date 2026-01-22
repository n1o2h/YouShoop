<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - ElectroShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-gray-50 text-gray-800">

<header class="bg-white border-b py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <a href="index.html" class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-slate-900">
            <div class="bg-blue-600 text-white p-1 rounded-lg"><i class="ti ti-bolt text-xl"></i></div>
            Electro<span class="text-blue-600">Shop</span>
        </a>
        <a href="index.html" class="text-sm text-gray-500 hover:text-blue-600 flex items-center gap-1">
            <i class="ti ti-arrow-left"></i> Retour à l'accueil
        </a>
    </div>
</header>

<section class="min-h-[calc(100vh-80px)] flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-4xl w-full flex flex-col md:flex-row-reverse">

        <div class="md:w-1/2 bg-slate-900 relative hidden md:block">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1000&auto=format&fit=crop"
                 alt="Technology Chips"
                 class="absolute inset-0 w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
            <div class="absolute bottom-10 left-10 text-white z-10">
                <h3 class="text-3xl font-bold mb-2">Rejoignez le futur</h3>
                <p class="text-blue-200">Créez votre compte et profitez d'offres exclusives sur la meilleure tech.</p>
            </div>
        </div>

        <div class="md:w-1/2 p-8 md:p-12">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-slate-900">Créer un compte</h2>
                <p class="text-gray-500 mt-2">C'est rapide et gratuit.</p>
            </div>

            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                    <div class="relative">
                        <input type="text" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="John Doe" required>
                        <div class="absolute left-3 top-3.5 text-gray-400">
                            <i class="ti ti-user"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Adresse Email</label>
                    <div class="relative">
                        <input type="email" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="vous@exemple.com" required>
                        <div class="absolute left-3 top-3.5 text-gray-400">
                            <i class="ti ti-mail"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <div class="relative">
                        <input type="password" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="8 caractères min." required>
                        <div class="absolute left-3 top-3.5 text-gray-400">
                            <i class="ti ti-lock"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer mot de passe</label>
                    <div class="relative">
                        <input type="password" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="••••••••" required>
                        <div class="absolute left-3 top-3.5 text-gray-400">
                            <i class="ti ti-lock-check"></i>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="terms" type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="terms" class="ml-2 block text-sm text-gray-900">
                        J'accepte les <a href="#" class="text-blue-600 hover:underline">conditions d'utilisation</a>
                    </label>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition transform hover:scale-[1.02] shadow-lg shadow-blue-500/30">
                    S'inscrire
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                Déjà inscrit ?
                <a href="login.html" class="text-blue-600 font-bold hover:underline">Se connecter</a>
            </div>
        </div>
    </div>
</section>

</body>
</html>