<?php
use App\core\Application;
?>


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

        <?php if(Application::isExisteUser()):  ?>
        <div class="flex items-center gap-6">
            <a href="/login" class="flex items-center gap-2 hover:text-blue-600 transition font-medium text-sm">
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
        <?php else: ?>
        <div class="flex items-center gap-6">
            <a href="/logout" class="flex items-center gap-2 hover:text-blue-600 transition font-medium text-sm">
                <i class="ti ti-user-circle text-xl"></i>
                <span class="hidden sm:block">Déconnexion</span>
            </a>
            <a href="#" class="relative hover:text-blue-600 transition">
                <div class="p-2 bg-gray-100 rounded-full hover:bg-blue-50 transition">
                    <i class="ti ti-shopping-cart text-xl"></i>
                </div>
                <span class="absolute -top-1 -right-1 bg-blue-600 text-white text-[10px] font-bold h-5 w-5 flex items-center justify-center rounded-full border-2 border-white">3</span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</header>
<div class="container mt-4">
    <?php if ($success = Application::$app->session->getMessage('success')): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif; ?>

    {{content}}
</div>

