<?php

return [
    App\Providers\AppServiceProvider::class,
];

Gate::define('isSuperAdmin', function ($user) {
    return $user->role === 'superadmin';
});

Gate::define('isAdminOrSuperAdmin', function ($user) {
    return in_array($user->role, ['admin', 'superadmin']);
});
