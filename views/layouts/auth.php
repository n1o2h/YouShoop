<?php
?>

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
        <a href="/" class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-slate-900">
            <div class="bg-blue-600 text-white p-1 rounded-lg"><i class="ti ti-bolt text-xl"></i></div>
            You<span class="text-blue-600">Shop</span>
        </a>
        <a href="/" class="text-sm text-gray-500 hover:text-blue-600 flex items-center gap-1">
            <i class="ti ti-arrow-left"></i> Retour à l'accueil
        </a>
    </div>
</header>

<section class="min-h-[calc(100vh-80px)] flex items-center justify-center p-4">
    {{content}}
</section>

</body>
</html>
