<?php

use App\core\Application;

?>
<div class="container mt-5">
    <div class="card shadow p-4 text-center">
        <h1 class="mb-3">Back Office for <?= Application::$app->user ? Application::$app->user->getDisplayName() : 'Admin' ?></h1>
        <p class="text-muted">Welcome to the admin dashboard. You can manage your application from here.</p>
    </div>
</div>