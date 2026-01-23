<?php
/**
 * @var $categories Category
 */

use App\models\Category;

foreach ($categories as $category) {
    echo $category->getName();  // fonctionne maintenant
    echo $category->description;
}

?>
<div class="flex min-h-screen bg-gray-50">
    <main class="flex-1 p-10">
        <nav class="flex justify-between items-center mb-10 bg-white p-4 rounded-3xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-2 text-sm font-medium text-gray-400">
                <a href="/admin" class="hover:text-blue-600">Admin</a>
                <i class="ti ti-chevron-right text-xs"></i>
                <span class="text-slate-900 font-bold">Catégories</span>
            </div>
            <button onclick="toggleModal('addCategoryModal')"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 px-6 rounded-xl transition shadow-lg shadow-blue-500/20 flex items-center gap-2 uppercase text-[10px] tracking-widest">
                <i class="ti ti-plus text-base"></i> Nouvelle Catégorie
            </button>
        </nav>

        <section
                class="relative bg-slate-900 rounded-[2.5rem] p-10 overflow-hidden mb-10 shadow-2xl shadow-blue-900/20">
            <div class="absolute top-0 right-0 -mr-10 -mt-10 w-64 h-64 bg-blue-600 blur-3xl opacity-20"></div>
            <div class="relative z-10">
                <h1 class="text-3xl font-black text-white uppercase tracking-tighter">Gestion des <span
                            class="text-blue-400">Catégories</span></h1>
                <p class="text-slate-400 mt-2 text-sm max-w-md font-medium">Organisez votre catalogue pour permettre aux
                    visiteurs de filtrer les produits (US-03 & US-15).</p>
            </div>
        </section>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($categories as $category): ?>
                <div class="bg-white rounded-[2rem] p-6 border border-gray-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-500">
                            <i class="ti ti-device-laptop"></i>
                        </div>
                        <div class="flex gap-1">
                            <a href="/admin/categories/edit?id=<?= $category->getId() ?>"
                               class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition">
                                <i class="ti ti-edit"></i>
                            </a>
                            <button class="p-2 hover:bg-red-50 text-red-500 rounded-lg transition"><i
                                        class="ti ti-trash"></i></button>
                        </div>
                    </div>
                    <h3 class="text-lg font-black text-slate-900 uppercase"><?= htmlspecialchars($category->getName() ?? 'Undefined') ?></h3>
                    <p class="text-gray-400 text-xs font-bold mt-1 uppercase tracking-widest">X Produits liés</p>

                    <div class="mt-6 pt-6 border-t border-gray-50">
                        <a href="/admin"
                           class="text-blue-600 text-[10px] font-black uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">
                            Voir les produits <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <button onclick="toggleModal('addCategoryModal')"
                    class="border-2 border-dashed border-gray-200 rounded-[2.5rem] flex flex-col items-center justify-center p-6 hover:border-blue-400 hover:bg-blue-50/30 transition group">
                <div class="w-12 h-12 bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition">
                    <i class="ti ti-plus text-xl"></i>
                </div>
                <span class="text-sm font-bold text-gray-400 group-hover:text-blue-600 uppercase tracking-widest">Ajouter une catégorie</span>
            </button>
        </div>
    </main>
</div>

<div id="modalOverlay"
     class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm z-[100] hidden opacity-0 transition-opacity duration-300"></div>

<div id="addCategoryModal"
     class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-md z-[110] hidden opacity-0 transition-all duration-300 transform scale-95">
    <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden">
        <div class="bg-slate-900 p-6 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>
            <button onclick="toggleModal('addCategoryModal')"
                    class="absolute top-4 right-4 text-slate-400 hover:text-white transition">
                <i class="ti ti-x text-xl"></i>
            </button>
            <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-600 rounded-xl mb-3 shadow-lg shadow-blue-500/40 transform -rotate-6">
                <i class="ti ti-category text-white text-2xl"></i>
            </div>
            <h2 class="text-xl font-bold text-white relative z-10">Nouvelle <span class="text-blue-400">Catégorie</span>
            </h2>
        </div>

        <form action="/admin/categories/store" method="POST" class="p-6 custom-form-tech space-y-4">
            <div>
                <label>Nom de la catégorie</label>
                <input type="text" name="name" placeholder="ex: Gaming, Photo..." required>
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="ex: ti-device-gamepad">
                <p class="text-[9px] text-gray-400 mt-1 uppercase tracking-tighter">Référez-vous à la bibliothèque
                    Tabler Icons</p>
            </div>
            <div class="pt-2">
                <button type="submit" class="flex items-center justify-center gap-3 py-3">
                    <span class="text-sm">Créer la catégorie</span>
                    <i class="ti ti-check"></i>
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
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0', 'scale-95');
                overlay.classList.remove('opacity-0');
            }, 10);
        } else {
            modal.classList.add('opacity-0', 'scale-95');
            overlay.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                overlay.classList.add('hidden');
            }, 300);
        }
    }
</script>

