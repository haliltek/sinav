<?php

return [
    'defaults' => [
        'title'          => 'Yerelleştirme Varsayılanları',
        'desc'           => 'Uygulama için varsayılan dili, saat dilimini ve ülkeyi yapılandırın.',
        'regional_title' => 'Bölgesel Ayarlar',
        'regional_desc'  => 'Yeni ziyaretçiler için temel varsayılanları belirleyin.',
        'language_label' => 'Varsayılan Sistem Dili',
        'language_help'  => 'Kullanıcı seçimi eksikse yedek dil.',
        'timezone_label' => 'Varsayılan Saat Dilimi',
        'country_label'  => 'Sistem Varsayılan Ülkesi',
        'countries' => [
            'US' => 'Amerika Birleşik Devletleri',
            'GB' => 'Birleşik Krallık',
            'IN' => 'Hindistan',
            'BD' => 'Bangladeş',
            'TR' => 'Türkiye',
        ],
        'save_btn' => 'Varsayılanları Kaydet',
    ],

    'switchers' => [
        'title'        => 'Dil Değiştiricileri',
        'desc'         => 'Kullanıcıların dilleri değiştirebileceği yerleri kontrol edin.',
        'front_label'  => 'Ön Yüz Değiştirici',
        'front_help'   => 'Ziyaretçilerin genel sitede dil değiştirmesine izin verin.',
        'admin_label'  => 'Yönetici Paneli Değiştirici',
        'admin_help'   => 'Personelin panelde dil değiştirmesine izin verin.',
        'update_btn'   => 'Görünürlüğü Güncelle',
    ],

    'table' => [
        'title'   => 'Mevcut Diller',
        'desc'    => 'Sistem dillerini ve kullanılabilirliklerini yönetin.',
        'add_new' => 'Yeni Ekle',
        'headers' => [
            'name'    => 'Ad',
            'code'    => 'Kod',
            'rtl'     => 'Sağdan Sola',
            'front'   => 'Ön Yüz',
            'admin'   => 'Yönetici',
            'actions' => 'İşlemler',
        ],
        'badges' => [
            'default' => 'Varsayılan',
            'active'  => 'Aktif',
            'hidden'  => 'Gizli',
            'yes'     => 'Evet',
            'no'      => 'Hayır',
        ],
        'tooltips' => [
            'set_default'  => 'Varsayılan Olarak Ayarla',
            'curr_default' => 'Mevcut Varsayılan',
            'delete'       => 'Dili Sil',
        ],
    ],

    'modals' => [
        'add_title'    => 'Yeni Dil Ekle',
        'edit_title'   => 'Dili Düzenle',
        'name_label'   => 'Ad',
        'name_ph'      => 'ör. Fransızca',
        'code_label'   => 'Kod (ISO 2)',
        'code_ph'      => 'ör. fr',
        'flag_label'   => 'Bayrak Simge Kodu',
        'flag_help'    => 'flag-icon-css veya emoji için kullanılır.',
        'rtl_label'    => 'Sağdan Sola (RTL)',
        'front_label'  => 'Ön Yüzde Mevcut',
        'admin_label'  => 'Yönetici Panelinde Mevcut',
        'add_btn'      => 'Dil Ekle',
        'save_btn'     => 'Değişiklikleri Kaydet',
    ],

    'alerts' => [
        'delete_title'  => 'Dil Silinsin mi?',
        'delete_text'   => ':name\'i silmek istediğinizden emin misiniz? Bu işlem çeviri dosyasını kaldıracak ve geri alınamaz.',
        'default_title' => 'Varsayılan Olarak Ayarlansın mı?',
        'default_text'  => ':name birincil sistem dili yapılsın mı? Tüm yeni ziyaretçiler önce bu dili görecek.',
        'yes_delete'    => 'Evet, Sil',
        'yes_default'   => 'Evet, Varsayılan Yap',
        'cancel'        => 'İptal',
    ],
];
