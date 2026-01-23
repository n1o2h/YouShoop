<?php
include_once '../layouts/main.php'?>

<div class="bg-white min-h-screen">
    <nav class="container mx-auto px-4 py-4 text-sm font-medium text-gray-400">
        <ol class="flex items-center gap-2">
            <li><a href="/" class="hover:text-blue-600 transition">Accueil</a></li>
            <li><i class="ti ti-chevron-right text-xs"></i></li>
            <li><a href="#" class="hover:text-blue-600 transition">PC Portables</a></li>
            <li><i class="ti ti-chevron-right text-xs"></i></li>
            <li class="text-slate-900 font-bold">MacBook Pro 14" M3</li>
        </ol>
    </nav>

    <section class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-12">

            <div class="lg:w-1/2 space-y-4">
                <div class="relative bg-gray-50 rounded-[2.5rem] border border-gray-100 overflow-hidden group aspect-square flex items-center justify-center">
                    <span class="absolute top-6 left-6 bg-slate-900 text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest z-10">
                        Technologie M3
                    </span>
                    <i class="ti ti-device-laptop text-[12rem] text-gray-200 group-hover:scale-110 transition duration-700"></i>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="aspect-square bg-white border-2 border-blue-600 rounded-2xl flex items-center justify-center cursor-pointer">
                        <i class="ti ti-device-laptop text-2xl text-blue-600"></i>
                    </div>
                    <div class="aspect-square bg-gray-50 border border-gray-100 rounded-2xl flex items-center justify-center hover:border-blue-400 transition cursor-pointer">
                        <i class="ti ti-cpu text-2xl text-gray-400"></i>
                    </div>
                    <div class="aspect-square bg-gray-50 border border-gray-100 rounded-2xl flex items-center justify-center hover:border-blue-400 transition cursor-pointer">
                        <i class="ti ti-battery-4 text-2xl text-gray-400"></i>
                    </div>
                    <div class="aspect-square bg-gray-50 border border-gray-100 rounded-2xl flex items-center justify-center hover:border-blue-400 transition cursor-pointer">
                        <i class="ti ti-photo text-2xl text-gray-400"></i>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2">
                <div class="space-y-6">
                    <div>
                        <span class="text-blue-600 font-black text-xs uppercase tracking-[0.2em]">Apple Premium</span>
                        <h1 class="text-4xl md:text-5xl font-black text-slate-900 mt-2 leading-tight uppercase tracking-tighter">
                            MacBook Pro 14" <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Puce M3</span>
                        </h1>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="flex text-orange-400">
                            <i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-half-filled"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-bold border-l pl-4">4.8 (128 avis)</span>
                    </div>

                    <div class="p-6 bg-slate-900 rounded-3xl relative overflow-hidden shadow-2xl shadow-blue-900/20">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>
                        <div class="flex items-end gap-3 relative z-10">
                            <span class="text-4xl font-black text-white italic">1 599,00 €</span>
                            <span class="text-slate-400 line-through mb-1 font-bold">1 999,00 €</span>
                        </div>
                        <p class="text-blue-400 text-xs font-bold mt-2 relative z-10 uppercase tracking-widest">Économisez 400 € aujourd'hui</p>
                    </div>

                    <div class="space-y-4">
                        <p class="text-sm font-black text-slate-900 uppercase">Configuration RAM</p>
                        <div class="flex gap-3">
                            <button class="px-6 py-3 border-2 border-blue-600 rounded-xl text-sm font-bold text-blue-600 bg-blue-50">8 GB</button>
                            <button class="px-6 py-3 border-2 border-gray-100 rounded-xl text-sm font-bold text-slate-600 hover:border-blue-400 transition">16 GB</button>
                            <button class="px-6 py-3 border-2 border-gray-100 rounded-xl text-sm font-bold text-slate-600 hover:border-blue-400 transition">24 GB</button>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <div class="flex items-center border-2 border-gray-100 rounded-2xl p-1 bg-gray-50 sm:w-32 justify-between">
                            <button class="w-10 h-10 flex items-center justify-center hover:bg-white rounded-xl transition"><i class="ti ti-minus"></i></button>
                            <span class="font-black text-slate-900">1</span>
                            <button class="w-10 h-10 flex items-center justify-center hover:bg-white rounded-xl transition"><i class="ti ti-plus"></i></button>
                        </div>

                        <button onclick="toggleCart()" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-2xl transition shadow-xl shadow-blue-500/30 flex items-center justify-center gap-3 uppercase text-sm tracking-widest">
                            <i class="ti ti-shopping-cart-plus text-xl"></i>
                            Ajouter au panier
                        </button>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-50 text-green-600 rounded-full flex items-center justify-center"><i class="ti ti-truck"></i></div>
                            <div class="text-[10px] leading-tight font-bold text-slate-500 uppercase">Livraison Gratuite <br><span class="text-slate-900">Sous 24/48h</span></div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center"><i class="ti ti-shield-check"></i></div>
                            <div class="text-[10px] leading-tight font-bold text-slate-500 uppercase">Garantie Apple <br><span class="text-slate-900">2 ans constructeur</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-24">
            <div class="flex gap-8 border-b border-gray-100 mb-8 overflow-x-auto">
                <button class="pb-4 border-b-4 border-blue-600 text-slate-900 font-black text-sm uppercase tracking-widest">Description</button>
                <button class="pb-4 border-b-4 border-transparent text-gray-400 font-bold text-sm uppercase tracking-widest hover:text-slate-600 transition">Spécifications</button>
                <button class="pb-4 border-b-4 border-transparent text-gray-400 font-bold text-sm uppercase tracking-widest hover:text-slate-600 transition">Avis Clients</button>
            </div>

            <div class="max-w-3xl">
                <h3 class="text-2xl font-black text-slate-900 mb-4">La puissance de la puce M3.</h3>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Le MacBook Pro 14 pouces fait un bond en avant avec la puce M3, une puce d'une puissance phénoménale qui apporte une vitesse et des capacités exceptionnelles pour les tâches quotidiennes et professionnelles les plus exigeantes.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="ti ti-circle-check-filled text-blue-600 mt-1"></i>
                        <span class="text-slate-700 font-medium">Jusqu'à 22 heures d'autonomie pour vous suivre partout.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ti ti-circle-check-filled text-blue-600 mt-1"></i>
                        <span class="text-slate-700 font-medium">Écran Liquid Retina XDR : le meilleur écran jamais vu sur portable.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<style>
/* Pour s'assurer de la cohérence avec ton style global */
button { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
</style>