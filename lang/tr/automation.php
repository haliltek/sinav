<?php

return [
    'save'        => 'Değişiklikleri Kaydet',
    'recommended' => 'Önerilen:',
    'or'          => 'veya',
    'copy_url'    => 'URL\'yi Kopyala',

    'ai' => [
        'title'          => 'Yapay Zeka Yapılandırması',
        'desc'           => 'Otomatik içerik oluşturma ve puanlama için LLM sağlayıcılarına bağlanın.',
        'primary_driver' => 'Birincil Yapay Zeka Motoru',
        'driver_desc'    => 'Oluşturma görevleri için kullanılacak motoru seçin.',
        'disabled'       => 'Devre Dışı',
        'driver_gemini'  => 'Google Gemini (Önerilen)',
        'driver_openai'  => 'OpenAI (ChatGPT)',

        'gemini' => [
            'title'   => 'Gemini Ayarları',
            'desc'    => 'Google\'ın üretken yapay zeka modellerine erişimi yapılandırın.',
            'api_key' => 'Gemini API Anahtarı',
            'model'   => 'Model Sürümü',
        ],

        'openai' => [
            'title'   => 'OpenAI Ayarları',
            'desc'    => 'ChatGPT modellerine erişimi yapılandırın.',
            'api_key' => 'OpenAI API Anahtarı',
            'model'   => 'Model Sürümü',
        ],
    ],

    'cron' => [
        'title'        => 'Cron İş Zamanlayıcı',
        'desc'         => 'Bildirimler ve bakım için zamanlanmış arka plan görevlerini yönetin.',
        'info_title'   => 'Bu neden gereklidir?',
        'info_desc'    => 'Cron işleri; sınav sonucu işleme, abonelik yenilemeleri ve e-posta bildirimleri gibi kritik tekrar eden görevleri yürütür. Bu yapılandırma olmadan otomatik özellikler çalışmaz.',
        'server_cmd'   => 'Sunucu Komutu',
        'server_cmd_desc' => 'Bu girdiyi sunucunuzun crontab\'ına ekleyin (ör. cPanel).',
        'entry_label'  => 'Cron Girdisi (Her dakika çalıştır)',
        'token_label'  => 'Güvenlik Belirteci',
        'token_ph'     => 'Benzersiz güvenlik belirteci',
        'token_help'   => 'Harici cron servisleri için URL\'yi güvence altına alır.',
        'enable_label' => 'Zamanlayıcıyı Etkinleştir',
        'enable_desc'  => 'Arka plan görevlerini işle.',
        'copied'       => 'Komut panoya kopyalandı',
        'copy_fail'    => 'Komut kopyalanamadı',
    ],

    'ext' => [
        'title' => 'Uzantı Yapılandırmaları',
        'desc'  => 'Üçüncü taraf entegrasyonları, widget\'ları ve güvenlik araçlarını yönetin.',

        'google' => [
            'title'         => 'Google Girişi',
            'desc'          => 'Kullanıcıların Google ile giriş yapmasına izin verin.',
            'client_id'     => 'İstemci Kimliği',
            'client_secret' => 'İstemci Gizli Anahtarı',
            'callback'      => 'Geri Çağırma URL\'si',
            'help'          => 'Bu URL\'yi Google Geliştirici Konsolu yapılandırmanıza yapıştırın.',
        ],

        'facebook' => [
            'title'      => 'Facebook Girişi',
            'desc'       => 'Kullanıcıların Facebook ile giriş yapmasına izin verin.',
            'app_id'     => 'Uygulama Kimliği',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'callback'   => 'Geri Çağırma URL\'si',
            'help'       => 'Bu URL\'yi Facebook Geliştirici Ayarlarınıza yapıştırın (OAuth yönlendirme URI\'ları).',
        ],

        'captcha' => [
            'title'  => 'Özel Captcha',
            'desc'   => 'Dahili doğrulama.',
            'length' => 'Kod Uzunluğu',
            'chars'  => 'Karakter',
        ],

        'recaptcha' => [
            'title'      => 'Google Recaptcha v2',
            'desc'       => 'Spam koruması.',
            'site_key'   => 'Site Anahtarı',
            'secret_key' => 'Gizli Anahtar',
        ],

        'tawk' => [
            'title'      => 'Tawk.to Canlı Destek',
            'desc'       => 'Müşteri desteği.',
            'link_label' => 'Doğrudan Sohbet Bağlantısı',
            'link_help'  => 'Tawk.to kontrol panelinizdeki Doğrudan Sohbet Bağlantısını yapıştırın.',
        ],
    ],
];
