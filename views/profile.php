<div class="container mx-auto mt-10">
    <div class="max-w-xl mx-auto bg-white rounded-2xl shadow p-8 text-center">
        <h1 class="text-3xl font-bold mb-4">Profil de <?= $user->getDisplayName() ?></h1>
        <p class="text-gray-600 mb-4">Email : <?= $user->email ?> </p>
        <p class="text-gray-600 mb-4">Created At : <?= $user->created_at ?>  </p>

        <a href="/logout" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition">
            Déconnexion
        </a>
    </div>
</div>
