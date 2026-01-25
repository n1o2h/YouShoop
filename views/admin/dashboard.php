<?php

use App\core\Application;
use App\models\Category;
use App\models\Product;
use App\service\DashboardService;

/**
 * @var Product[] $products
 * @var Category[] $categories
 * @var  $stats
 */
//foreach ($products as $product){
//var_dump($product->getId());
//
//}
//exit;
?>
<div class="flex justify-between items-center mb-10 bg-white p-4 rounded-3xl border border-gray-100 shadow-sm">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center font-black text-xl shadow-inner">
            A
        </div>
        <div>
            <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Session Administrateur</p>
            <h2 class="text-slate-900 font-bold">Bienvenue, <span
                        class="text-blue-600"><?= Application::$app->user ? Application::$app->user->getDisplayName() : 'Admin' ?></span>
            </h2>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <div class="text-right hidden sm:block">
            <p class="text-xs font-bold text-slate-900">23 Janvier 2026</p>
            <p class="text-[10px] text-green-500 font-bold flex items-center justify-end gap-1">
                <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> Système en ligne
            </p>
        </div>
    </div>
</div>

<section class="relative bg-slate-900 rounded-[2.5rem] p-8 md:p-12 overflow-hidden mb-10 shadow-2xl shadow-blue-900/20">
    <div class="absolute top-0 right-0 -mr-10 -mt-10 w-64 h-64 bg-blue-600 blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 left-0 -ml-10 -mb-10 w-48 h-48 bg-purple-600 blur-3xl opacity-10"></div>

    <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="text-center md:text-left">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/20 border border-blue-500/30 text-blue-300 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">
                <i class="ti ti-activity"></i> Vue d'ensemble en temps réel
            </div>
            <h1 class="text-3xl md:text-5xl font-black text-white leading-tight uppercase tracking-tighter">
                Tableau de <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600">Bord Master</span>
            </h1>
            <p class="text-slate-400 mt-4 text-sm max-w-sm leading-relaxed font-medium">
                Gérez vos produits, surveillez vos stocks et validez les commandes clients en un seul clic.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 w-full md:w-auto">
            <div class="bg-white/5 backdrop-blur-md border border-white/10 p-5 rounded-3xl text-center">
                <i class="ti ti-package text-blue-400 text-2xl mb-2"></i>
                <p class="text-2xl font-black text-white"><?= $stats['products_count'] ?></p>
                <p class="text-[9px] text-slate-500 uppercase font-bold tracking-widest">Produits</p>
            </div>
            <div class="bg-white/5 backdrop-blur-md border border-white/10 p-5 rounded-3xl text-center">
                <i class="ti ti-shopping-cart text-purple-400 text-2xl mb-2"></i>
                <p class="text-2xl font-black text-white"><?= number_format($stats['total_sales'], 0, ',', ' ') ?></p>
                <p class="text-[9px] text-slate-500 uppercase font-bold tracking-widest">Ventes</p>
            </div>
        </div>
    </div>
</section>
<main class="flex-1 p-10">

    <div class="flex justify-between items-end mb-10">
        <div>
            <h1 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Catalogue <span
                        class="text-blue-600">Produits</span></h1>
            <p class="text-gray-500 text-sm font-medium">Gestion du stock et des références</p>
        </div>
        <a href="/admin/categories"
           class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-2xl transition shadow-xl shadow-blue-500/20 flex items-center gap-2 uppercase text-xs tracking-widest">
            <i class="ti ti-plus text-lg"></i> Voir Categories
        </a>
        <button onclick="toggleModal('addProductModal')"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-2xl transition shadow-xl shadow-blue-500/20 flex items-center gap-2 uppercase text-xs tracking-widest">
            <i class="ti ti-plus text-lg"></i> Nouveau Produit
        </button>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Ventes Totales</p>
            <p class="text-3xl font-black text-slate-900"> <?= number_format($stats['total_sales'], 0, ',', ' ') ?>€</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm border-l-4 border-l-blue-600">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Commandes</p>
            <p class="text-3xl font-black text-slate-900"><?= $stats['orders_count'] ?></p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Clients Actifs</p>
            <p class="text-3xl font-black text-slate-900"><?= $stats['clients_count'] ?></p>
        </div>
    </div>


    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-900 text-white">
            <tr>
                <th class="p-6 text-xs uppercase tracking-widest font-bold">Produit</th>
                <th class="p-6 text-xs uppercase tracking-widest font-bold">Catégorie</th>
                <th class="p-6 text-xs uppercase tracking-widest font-bold">Prix</th>
                <th class="p-6 text-xs uppercase tracking-widest font-bold">Stock</th>
                <th class="p-6 text-xs uppercase tracking-widest font-bold text-right">Actions</th>
            </tr>
            </thead>
            <?php if(count($products) > 0) : ?>
            <tbody class="divide-y divide-gray-50 font-medium text-slate-700">

            <?php foreach ($products as $product): ?>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="p-6 flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-slate-400">
                            <i class="ti ti-device-laptop text-xl"></i>
                        </div>
                        <div>
                            <span class="block font-bold text-slate-900"><?= htmlspecialchars($product->getName()) ?></span>
                            <span class="text-[10px] text-gray-400 uppercase">REF: PROD-<?= $product->getId() ?></span>
                        </div>
                    </td>
                    <td class="p-6">
                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-bold">
                        <?= htmlspecialchars($product->category->getName() ?? 'Indéfini') ?>
                    </span>
                    </td>
                    <td class="p-6 font-bold"><?= number_format($product->getPrice(), 2, ',', ' ') ?> €</td>
                    <td class="p-6">
                        <div class="flex items-center gap-2 <?= $product->getStock() > 5 ? 'text-green-500' : 'text-orange-600' ?>">
                            <span class="w-2 h-2 rounded-full <?= $product->getStock() > 5 ? 'bg-green-500' : 'bg-orange-500 animate-pulse' ?>"></span>
                            <span><?= $product->getStock() ?> en stock</span>
                        </div>
                    </td>
                    <td class="p-6 text-right space-x-2">
                        <button class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition"
                                onclick="openEditProductModal(
                                <?= $product->getId()?>,
                                        '<?= htmlspecialchars($product->getName(), ENT_QUOTES) ?>',
                                        '<?= htmlspecialchars($product->getDescription(), ENT_QUOTES) ?>',
                                <?= $product->getPrice() ?>,
                                <?= $product->getStock() ?>,
                                <?= $product->category_id ?>
                                        )"
                        >
                            <i class="ti ti-edit text-xl"></i>
                        </button>
                        <form action="/admin/products/delete" method="POST" style="display:inline;"
                              onsubmit="return confirm('Supprimer ce produit ?')">
                            <input type="hidden" name="id" value="<?= $product->getId() ?>">
                            <button type="submit" class="p-2 hover:bg-red-50 text-red-500 rounded-lg transition"
                                    title="Supprimer">
                                <i class="ti ti-trash text-xl"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <?php else : ?>
                <h1 class="text-center text-gray-500">Aucun produits est ajouter</h1>
            <?php endif;?>

        </table>
    </div>


</main>

<div id="modalOverlay"
     class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm z-[100] hidden opacity-0 transition-opacity duration-300"></div>

<div id="addProductModal"
     class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-2xl z-[110] hidden opacity-0 transition-all duration-300 transform scale-95">

    <div class="bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 overflow-hidden">
        <div class="bg-slate-900 p-8 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>

            <button onclick="toggleModal('addProductModal')"
                    class="absolute top-6 right-6 text-slate-400 hover:text-white transition">
                <i class="ti ti-x text-2xl"></i>
            </button>

            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4 shadow-lg shadow-blue-500/40 transform -rotate-6">
                <i class="ti ti-box-model-2 text-white text-3xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white relative z-10">Ajouter un <span
                        class="text-blue-400">Produit</span></h2>
            <p class="text-slate-400 text-sm mt-1 relative z-10 uppercase tracking-widest">Référence Catalogue US-12</p>
        </div>

        <form action="/admin/products/store" method="POST"
              class="p-8 custom-form-tech grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="md:col-span-2">
                <label>Désignation du produit</label>
                <input type="text" name="name" placeholder="ex: MacBook Pro 14 M3..." required>
            </div>
            <div>
                <label>Catégorie</label>
                <label>
                    <select name="category"
                            class="w-full p-3 rounded-xl border border-gray-100 bg-gray-50 focus:border-blue-600 outline-none transition font-semibold text-slate-700">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category->getName() ?>"> <?= htmlspecialchars($category->getName()) ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>

            <div>
                <label>Prix de vente (€)</label>
                <input type="number" step="0.01" name="price" placeholder="0.00" required>
            </div>

            <div>
                <label>Quantité en stock</label>
                <input type="number" name="stock" placeholder="ex: 50" required>
            </div>

            <div>
                <label>Image (URL)</label>
                <input type="text" name="image_path" placeholder="https://images.unsplash.com/...">
            </div>

            <div class="md:col-span-2">
                <label>Description technique</label>
                <textarea name="description" rows="3"
                          class="w-full p-4 rounded-xl border border-gray-100 bg-gray-50 focus:border-blue-600 outline-none transition"
                          placeholder="Détails du produit..."></textarea>
            </div>

            <div class="md:col-span-2 pt-4">
                <button type="submit" class="flex items-center justify-center gap-3 group">
                    <span>Enregistrer le produit</span>
                    <i class="ti ti-arrow-right group-hover:translate-x-1 transition"></i>
                </button>
            </div>
        </form>

    </div>
</div>


<div id="editProductModal" class="fixed inset-0 hidden bg-slate-950/60 backdrop-blur-sm z-[100] flex items-center justify-center opacity-0 transition-opacity duration-300">

    <div class="bg-white rounded-[2.5rem] shadow-2xl w-full max-w-md overflow-hidden transform scale-95 transition-all duration-300">

        <div class="bg-slate-900 p-6 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>

            <button type="button" onclick="closeEditProductModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white transition">
                <i class="ti ti-x text-xl"></i>
            </button>

            <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-600 rounded-xl mb-3 shadow-lg shadow-blue-500/40 transform -rotate-6">
                <i class="ti ti-settings text-white text-2xl"></i>
            </div>
            <h2 class="text-xl font-bold text-white relative z-10">Modifier <span class="text-blue-400">Produit</span></h2>
            <p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] font-bold mt-1">Mise à jour des stocks et infos</p>
        </div>

        <form action="/admin/products/update" method="POST" class="p-6 custom-form-tech space-y-4">

            <input type="hidden" name="id"  id="edit-id">

            <div>
                <label class="text-[10px] uppercase tracking-widest font-black text-slate-400 mb-1 block">Nom du produit</label>
                <input type="text" name="name" id="edit-name" required
                       class="w-full bg-gray-50 border border-gray-100 p-3 rounded-xl focus:border-blue-600 focus:bg-white outline-none transition font-semibold text-slate-700">
            </div>

            <div>
                <label class="text-[10px] uppercase tracking-widest font-black text-slate-400 mb-1 block">Description</label>
                <textarea name="description" id="edit-description" rows="2"
                          class="w-full bg-gray-50 border border-gray-100 p-3 rounded-xl focus:border-blue-600 focus:bg-white outline-none transition font-medium text-slate-600 text-sm"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-black text-slate-400 mb-1 block">Prix (€)</label>
                    <input type="number" step="0.01" name="price" id="edit-price"
                           class="w-full bg-gray-50 border border-gray-100 p-3 rounded-xl focus:border-blue-600 focus:bg-white outline-none transition font-bold text-blue-600">
                </div>
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-black text-slate-400 mb-1 block">Stock</label>
                    <input type="number" name="stock" id="edit-stock"
                           class="w-full bg-gray-50 border border-gray-100 p-3 rounded-xl focus:border-blue-600 focus:bg-white outline-none transition font-bold text-slate-700">
                </div>
            </div>

            <div>
                <label class="text-[10px] uppercase tracking-widest font-black text-slate-400 mb-1 block">Catégorie</label>
                <select name="category_id" id="edit-category"
                        class="w-full bg-gray-50 border border-gray-100 p-3 rounded-xl focus:border-blue-600 focus:bg-white outline-none transition font-semibold text-slate-700 text-sm">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->getId() ?>">
                            <?= htmlspecialchars($category->getName()) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="button" onclick="closeEditProductModal()"
                        class="flex-1 px-5 py-3 rounded-xl text-[10px] font-black text-slate-400 hover:text-slate-600 hover:bg-gray-50 transition uppercase tracking-widest">
                    Annuler
                </button>
                <button type="submit"
                        class="flex-1 bg-blue-600 text-white px-5 py-3 rounded-xl text-[10px] font-black shadow-lg shadow-blue-500/30 hover:bg-blue-700 hover:-translate-y-0.5 transition-all uppercase tracking-widest">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>


<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        const overlay = document.getElementById('modalOverlay');

        if (modal.classList.contains('hidden')) {
            // Afficher
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0', 'scale-95');
                overlay.classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        } else {
            // Masquer
            modal.classList.add('opacity-0', 'scale-95');
            overlay.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                overlay.classList.add('hidden');
            }, 300);
            document.body.style.overflow = 'auto';
        }
    }

    // Fermer si on clique sur l'overlay
    document.getElementById('modalOverlay').addEventListener('click', () => {
        toggleModal('addProductModal');
    });

    function openEditProductModal(id, name, desciption, price, stock, category_id) {
        const modal = document.getElementById('editProductModal');
        modal.classList.remove('hidden');
        document.getElementById('edit-id').value = id;
        document.getElementById('edit-name').value = name;
        document.getElementById('edit-description').value = desciption;
        document.getElementById('edit-price').value = price;
        document.getElementById('edit-stock').value = stock;
        document.getElementById('edit-category').value = category_id;

        setTimeout(() => {
            modal.classList.add('opacity-100');
            modal.querySelector('div').classList.remove('scale-95');
        }, 10);
    }

    function closeEditProductModal() {
        const modal = document.getElementById('editProductModal');
        modal.classList.remove('opacity-100');
        modal.querySelector('div').classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>