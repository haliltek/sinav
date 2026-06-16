<?php

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

use App\Models\SystemSetting;
use Illuminate\Support\Facades\Cache;

$settingsData = [
    'app_name' => 'Sınav Center',
    'app_title' => 'Sınav Center - Yapay Zeka Destekli Sınav Platformu',
    'seo_meta_title' => 'Sınav Center',
    'seo_meta_description' => 'En iyi yapay zeka destekli değerlendirme ve öğrenme platformu.',
    'seo_keywords' => 'sınav, yapay zeka, değerlendirme, öğrenme',
    
    // Translatable fields - we save them as JSON payload
    'contact_address' => json_encode([
        'en' => 'Bornova, İzmir',
        'es' => 'Bornova, İzmir',
        'de' => 'Bornova, İzmir',
        'bn' => 'Bornova, İzmir',
        'tr' => 'Bornova, İzmir',
    ], JSON_UNESCAPED_UNICODE),
    
    'contact_email' => 'info@sinavcenter.tr',
    'contact_phone' => '',
    
    'footer_copyright' => json_encode([
        'en' => '© 2026 Sınav Center. Tüm hakları saklıdır.',
        'es' => '© 2026 Sınav Center. Tüm hakları saklıdır.',
        'de' => '© 2026 Sınav Center. Tüm hakları saklıdır.',
        'bn' => '© 2026 Sınav Center. Tüm hakları saklıdır.',
        'tr' => '© 2026 Sınav Center. Tüm hakları saklıdır.',
    ], JSON_UNESCAPED_UNICODE),

    'footer_about_text' => json_encode([
        'en' => 'Sınav Center, yapay zeka destekli modülleriyle eğitim ve sınav süreçlerinizi dijitalleştiren yenilikçi bir platformdur.',
        'es' => 'Sınav Center, yapay zeka destekli modülleriyle eğitim ve sınav süreçlerinizi dijitalleştiren yenilikçi bir platformdur.',
        'de' => 'Sınav Center, yapay zeka destekli modülleriyle eğitim ve sınav süreçlerinizi dijitalleştiren yenilikçi bir platformdur.',
        'bn' => 'Sınav Center, yapay zeka destekli modülleriyle eğitim ve sınav süreçlerinizi dijitalleştiren yenilikçi bir platformdur.',
        'tr' => 'Sınav Center, yapay zeka destekli modülleriyle eğitim ve sınav süreçlerinizi dijitalleştiren yenilikçi bir platformdur.',
    ], JSON_UNESCAPED_UNICODE),
];

foreach ($settingsData as $key => $val) {
    SystemSetting::updateOrCreate(
        ['key' => $key],
        [
            'value' => $val,
            'group' => str_starts_with($key, 'seo_') ? 'seo' : (str_starts_with($key, 'contact_') || str_starts_with($key, 'footer_') ? 'cms' : 'system')
        ]
    );
    echo "Updated key: {$key}\n";
}

// Clear all cache
Cache::forget('global_settings');
Cache::forget('system_settings');

if (method_exists(SystemSetting::class, 'clearCache')) {
    SystemSetting::clearCache();
}

echo "All settings updated and cache cleared successfully!\n";
