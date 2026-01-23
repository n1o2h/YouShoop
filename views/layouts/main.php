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
            scroll-behavior: smooth;
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

             /* Styles spécifiques pour la cohérence des formulaires PHP et du design */
         .custom-form-tech label {
             display: block; font-size: 0.875rem; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;
         }
        .custom-form-tech input {
            width: 100%; padding: 0.75rem 1rem; border-radius: 0.75rem; border: 1px solid #e2e8f0;
            background-color: #f8fafc; transition: all 0.3s ease; outline: none;
        }
        .custom-form-tech input:focus {
            border-color: #2563eb; background-color: #fff; box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }
        .custom-form-tech button {
            width: 100%; background-color: #2563eb; color: white; font-weight: 700; padding: 0.875rem;
            border-radius: 0.75rem; transition: all 0.3s ease; box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
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
            You<span class="text-blue-600">Shop</span>
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
            <a href="/profile" class="flex items-center gap-2 hover:text-blue-600 transition font-medium text-sm">
                <i class="ti ti-user-circle text-xl">
                </i>
                <span class="hidden sm:block"><?= Application::$app->user ? Application::$app->user->getDisplayName() : 'User' ?></span>
            </a>
            <a href="/logout" class="flex items-center gap-2 hover:text-blue-600 transition font-medium text-sm">
                <span class="hidden sm:block">Déconnexion</span>
            </a>
            <button onclick="toggleCart()" class="relative p-2.5 bg-gray-100  rounded-2xl hover:bg-blue-600 transition-all shadow-xl shadow-slate-900/10 group">
                <i class="ti ti-shopping-cart text-xl"></i>
                <span class="absolute -top-1.5 -right-1.5 bg-blue-500 text-white text-[10px] font-bold h-5 w-5 flex items-center justify-center rounded-full border-2 border-white group-hover:scale-110 transition">3</span>
            </button>
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

<script>
    function toggleCart() {
        const sidebar = document.getElementById('cartSidebar');
        const overlay = document.getElementById('cartOverlay');

        if (sidebar.classList.contains('translate-x-full')) {
            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.classList.add('opacity-100');
                sidebar.classList.remove('translate-x-full');
            }, 10);
            document.body.style.overflow = 'hidden';
        } else {
            sidebar.classList.add('translate-x-full');
            overlay.classList.remove('opacity-100');
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 500);
            document.body.style.overflow = '';
        }
    }
    document.getElementById('cartOverlay').addEventListener('click', toggleCart);
</script>

</body>
</html>

