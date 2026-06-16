<?php

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

$usersData = [
    [
        'name' => 'Demo Admin',
        'email' => 'admin@sc.com',
        'password' => '123456',
        'role' => 'Super Admin'
    ],
    [
        'name' => 'Demo Öğretmen',
        'email' => 'ogretmen@sc.com',
        'password' => '123456',
        'role' => 'Instructor'
    ],
    [
        'name' => 'Demo Öğrenci',
        'email' => 'ogrenci@sc.com',
        'password' => '123456',
        'role' => 'Student'
    ]
];

foreach ($usersData as $uData) {
    $user = User::where('email', $uData['email'])->first();
    if ($user) {
        echo "User '{$uData['email']}' already exists. Updating password and role...\n";
        $user->update([
            'name' => $uData['name'],
            'password' => Hash::make($uData['password']),
            'email_verified_at' => now(),
        ]);
    } else {
        echo "Creating user '{$uData['email']}'...\n";
        $user = User::create([
            'name' => $uData['name'],
            'email' => $uData['email'],
            'password' => Hash::make($uData['password']),
            'email_verified_at' => now(),
        ]);
    }

    // Assign role safely
    $role = Role::firstOrCreate(['name' => $uData['role'], 'guard_name' => 'web']);
    if (!$user->hasRole($role->name)) {
        // Sync roles to clear any old ones and assign new
        $user->syncRoles([$role->name]);
    }
}

echo "All demo users created/updated and roles assigned successfully!\n";
