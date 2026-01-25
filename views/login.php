<?php
/**
 * @var $model \App\models\User
 */
?>

    <div class="bg-white w-full max-auto max-w-md rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">

        <div class="bg-slate-900 p-8 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600 blur-3xl opacity-20 -mr-10 -mt-10"></div>

            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4 shadow-lg shadow-blue-500/40 transform -rotate-6">
                <i class="ti ti-lock text-white text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-white relative z-10">Connexion <span class="text-blue-400">You Shop</span></h1>
            <p class="text-slate-400 text-sm mt-2 relative z-10">Entrez vos accès pour gérer vos commandes</p>
        </div>

        <div class="p-8">
            <?php $form = \App\core\forms\Form::begin("", "post"); ?>

            <div class="space-y-5 custom-form-tech">
                <div class="relative">
                    <?php echo $form->field($model, 'email') ?>
                </div>

                <div class="relative">
                    <?php echo $form->field($model, 'password')->passwordField() ?>
                </div>

                <div class="pt-4">
                    <?php echo $form->button() ?>
                </div>
            </div>

            <?php echo \App\core\forms\Form::end() ?>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <p class="text-sm text-gray-500">
                    Nouveau sur la plateforme ?
                    <a href="/register" class="text-blue-600 font-bold hover:underline">Créer un compte</a>
                </p>
            </div>
        </div>
    </div>

<style>
    .custom-form-tech label {
        display: block;
        font-size: 0.875rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .custom-form-tech input {
        width: 100%;
        padding: 0.75rem 1rem;
        border-radius: 0.75rem;
        border: 1px solid #e2e8f0;
        background-color: #f8fafc;
        transition: all 0.3s ease;
        outline: none;
    }

    .custom-form-tech input:focus {
        border-color: #2563eb;
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    .custom-form-tech button {
        width: 100%;
        background-color: #2563eb;
        color: white;
        font-weight: 700;
        padding: 0.875rem;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    }

    .custom-form-tech button:hover {
        background-color: #1d4ed8;
        transform: translateY(-2px);
        box-shadow: 0 15px 20px -3px rgba(37, 99, 235, 0.4);
    }

    .custom-form-tech .invalid-feedback {
        color: #ef4444;
        font-size: 0.75rem;
        margin-top: 0.25rem;
    }
    .custom-form-tech .is-invalid {
        border-color: #ef4444 !important;
    }
</style>