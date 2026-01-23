<?php
use App\core\Application;
?>
<div class="flex justify-between items-center mb-10 bg-white p-4 rounded-3xl border border-gray-100 shadow-sm">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center font-black text-xl shadow-inner">
            A
        </div>
        <div>
            <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Session Administrateur</p>
            <h2 class="text-slate-900 font-bold">Bienvenue, <span class="text-blue-600"><?= Application::$app->user ? Application::$app->user->getDisplayName() : 'Admin' ?></span></h2>
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
                <p class="text-2xl font-black text-white">154</p>
                <p class="text-[9px] text-slate-500 uppercase font-bold tracking-widest">Produits</p>
            </div>
            <div class="bg-white/5 backdrop-blur-md border border-white/10 p-5 rounded-3xl text-center">
                <i class="ti ti-shopping-cart text-purple-400 text-2xl mb-2"></i>
                <p class="text-2xl font-black text-white">89</p>
                <p class="text-[9px] text-slate-500 uppercase font-bold tracking-widest">Ventes/Mois</p>
            </div>
        </div>
    </div>
</section>
<main class="flex-1 p-10">

    <div class="flex justify-between items-end mb-10">
        <div>
            <h1 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Catalogue <span class="text-blue-600">Produits</span></h1>
            <p class="text-gray-500 text-sm font-medium">Gestion du stock et des références (US-12, 13, 14)</p>
        </div>
        <a href="/admin/categories"  class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-2xl transition shadow-xl shadow-blue-500/20 flex items-center gap-2 uppercase text-xs tracking-widest">
            <i class="ti ti-plus text-lg"></i> Voir Categories
        </a>
        <button onclick="toggleModal('addProductModal')" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-2xl transition shadow-xl shadow-blue-500/20 flex items-center gap-2 uppercase text-xs tracking-widest">
            <i class="ti ti-plus text-lg"></i> Nouveau Produit
        </button>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Ventes Totales</p>
            <p class="text-3xl font-black text-slate-900">45 280 €</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm border-l-4 border-l-blue-600">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Commandes</p>
            <p class="text-3xl font-black text-slate-900">128</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Clients Actifs</p>
            <p class="text-3xl font-black text-slate-900">1 042</p>
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
            <tbody class="divide-y divide-gray-50 font-medium text-slate-700">
            <tr class="hover:bg-gray-50/50 transition">
                <td class="p-6 flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-slate-400">
                        <i class="ti ti-device-laptop text-xl"></i>
                    </div>
                    <div>
                        <span class="block font-bold text-slate-900">MacBook Pro 14" M3</span>
                        <span class="text-[10px] text-gray-400 uppercase">REF: TECH-992</span>
                    </div>
                </td>
                <td class="p-6"><span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-bold">Laptops</span></td>
                <td class="p-6 font-bold">1 599,00 €</td>
                <td class="p-6">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-500"></span>
                        <span>24 en stock</span>
                    </div>
                </td>
                <td class="p-6 text-right space-x-2">
                    <button class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition" title="Modifier">
                        <i class="ti ti-edit text-xl"></i>
                    </button>
                    <button class="p-2 hover:bg-red-50 text-red-500 rounded-lg transition" title="Supprimer">
                        <i class="ti ti-trash text-xl"></i>
                    </button>
                </td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition">
                <td class="p-6 flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-slate-400">
                        <i class="ti ti-headset text-xl"></i>
                    </div>
                    <span class="font-bold text-slate-900">Sony WH-1000XM5</span>
                </td>
                <td class="p-6"><span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-bold">Audio</span></td>
                <td class="p-6 font-bold">320,00 €</td>
                <td class="p-6">
                    <div class="flex items-center gap-2 text-orange-600">
                        <span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
                        <span>2 restants</span>
                    </div>
                </td>
                <td class="p-6 text-right">
                    <button class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition"><i class="ti ti-edit text-xl"></i></button>
                    <button class="p-2 hover:bg-red-50 text-red-500 rounded-lg transition"><i class="ti ti-trash text-xl"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</main>

<div id="modalOverlay" class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm z-[100] hidden opacity-0 transition-opacity duration-300"></div>

<div id="addProductModal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-2xl z-[110] hidden opacity-0 transition-all duration-300 transform scale-95">

    <div class="bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 overflow-hidden">
        <div class="bg-slate-900 p-8 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>

            <button onclick="toggleModal('addProductModal')" class="absolute top-6 right-6 text-slate-400 hover:text-white transition">
                <i class="ti ti-x text-2xl"></i>
            </button>

            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4 shadow-lg shadow-blue-500/40 transform -rotate-6">
                <i class="ti ti-box-model-2 text-white text-3xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white relative z-10">Ajouter un <span class="text-blue-400">Produit</span></h2>
            <p class="text-slate-400 text-sm mt-1 relative z-10 uppercase tracking-widest">Référence Catalogue US-12</p>
        </div>

        <form action="/admin/products/add" method="POST" class="p-8 custom-form-tech grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="md:col-span-2">
                <label>Désignation du produit</label>
                <input type="text" name="name" placeholder="ex: MacBook Pro 14 M3..." required>
            </div>

            <div>
                <label>Catégorie</label>
                <select name="category" class="w-full p-3 rounded-xl border border-gray-100 bg-gray-50 focus:border-blue-600 outline-none transition font-semibold text-slate-700">
                    <option value="laptops">PC Portables</option>
                    <option value="smartphones">Smartphones</option>
                    <option value="audio">Audio</option>
                </select>
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
                <input type="text" name="image" placeholder="https://images.unsplash.com/...">
            </div>

            <div class="md:col-span-2">
                <label>Description technique</label>
                <textarea name="description" rows="3" class="w-full p-4 rounded-xl border border-gray-100 bg-gray-50 focus:border-blue-600 outline-none transition" placeholder="Détails du produit..."></textarea>
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
</script>