<?php

use App\core\Application;

?>
<div class="container mt-5">
    <div class="card shadow p-4 text-center">
        <h1 class="mb-3">Welcome,<?= Application::$app->user ? Application::$app->user->getDisplayName() : 'User' ?></h1>
        <p class="text-muted">This is your dashboard. You can access your profile, see your data, and manage your account here.</p>
    </div>
</div>