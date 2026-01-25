<?php
/**
 * @var \App\models\Category $category
 */
?>

<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow">
    <h2 class="text-2xl font-black mb-6">Modifier la catégorie</h2>

    <form action="/admin/categories/update" method="POST" class="space-y-4">
        <input type="hidden" name="id" value="<?= $category->getId() ?>">

        <div>
            <label class="block text-sm font-bold">Nom</label>
            <input type="text"
                   name="name"
                   value="<?= htmlspecialchars($category->getName()) ?>"
                   class="w-full border rounded-xl p-3"
                   required>
        </div>

        <div>
            <label class="block text-sm font-bold">Description</label>
            <input type="text"
                   name="description"
                   value="<?= htmlspecialchars($category->getDescription()) ?>"
                   class="w-full border rounded-xl p-3"
                   required>
        </div>

        <div class="flex justify-end gap-3">
            <a href="/admin/categories" class="px-4 py-2 rounded-xl bg-gray-200">Annuler</a>
            <button class="px-6 py-2 rounded-xl bg-blue-600 text-white font-bold">
                Enregistrer
            </button>
        </div>
    </form>
</div>
