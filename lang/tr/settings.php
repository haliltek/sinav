<?php

return [
    'mobile_menu' => 'Ayarlar Menüsü',
    'nav_title'   => 'Ayarlar Navigasyonu',

    'groups' => [
        'system'        => 'Sistem',
        'appearance'    => 'Görünüm',
        'communication' => 'İletişim',
        'billing'       => 'Faturalandırma',
        'regional'      => 'Bölgesel',
        'visibility'    => 'Görünürlük',
        'automation'    => 'Otomasyon',
        'security'      => 'Güvenlik',
    ],

    'links' => [
        'general'      => ['title' => 'Genel Ayarlar', 'sub' => 'Site Kimliği ve Saat Dilimi'],
        'config'       => ['title' => 'Temel Yapılandırma', 'sub' => 'Ortam ve Limitler'],
        'roles'        => ['title' => 'Roller ve İzinler', 'sub' => 'Kullanıcı Erişim Kontrolü'],
        'maintenance'  => ['title' => 'Bakım', 'sub' => 'Kesinti Yönetimi'],

        'logo'         => ['title' => 'Logo ve Favicon', 'sub' => 'Marka Varlıkları'],
        'registration' => ['title' => 'Kayıt Alanları', 'sub' => 'Kayıt Formu Özelleştirme'],
        'certificates' => ['title' => 'Sertifikalar', 'sub' => 'Şablonlar ve Tasarım'],
        'frontend'     => ['title' => 'Ön Yüz', 'sub' => 'Genel Görünürlük'],
        'css'          => ['title' => 'Özel CSS', 'sub' => 'Global Geçersiz Kılmalar'],

        'alerts' => ['title' => 'Uyarılar', 'sub' => 'Sistem Bildirimleri'],
        'email'  => ['title' => 'E-posta Kurulumu', 'sub' => 'SMTP ve Sürücüler'],
        'social' => ['title' => 'Sosyal Giriş', 'sub' => 'OAuth Sağlayıcıları'],

        'gateways' => ['title' => 'Ağ Geçitleri', 'sub' => 'Stripe, PayPal, vb.'],
        'currency' => ['title' => 'Para Birimi', 'sub' => 'Semboller ve Formatlar'],
        'tax'      => ['title' => 'Vergi Kuralları', 'sub' => 'KDV ve Satış Vergisi'],

        'language' => ['title' => 'Yerelleştirme', 'sub' => 'Dil ve Ülke'],

        'seo'     => ['title' => 'SEO Yapılandırması', 'sub' => 'Meta Etiketleri ve Analitik'],
        'sitemap' => ['title' => 'Site Haritası', 'sub' => 'XML Oluşturma'],

        'ai'         => ['title' => 'Yapay Zeka Entegrasyonu', 'sub' => 'LLM Yapılandırması'],
        'cron'       => ['title' => 'Cron İşleri', 'sub' => 'Zamanlanmış Görevler'],
        'extensions' => ['title' => 'Uzantılar', 'sub' => 'Modüller ve Eklentiler'],

        'gdpr'   => ['title' => 'GDPR ve Çerezler', 'sub' => 'Onay Yönetimi'],
        'policy' => ['title' => 'Hukuki Sayfalar', 'sub' => 'Şartlar ve Gizlilik'],
    ],

    'status' => [
        'operational' => 'Sistem Çalışıyor'
    ]
];
