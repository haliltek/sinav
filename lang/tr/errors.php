<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hata Sayfaları
    |--------------------------------------------------------------------------
    */

    'defaults' => [
        'app_name' => 'ZiExam AI',
    ],

    '403' => [
        'code'    => '403',
        'title'   => 'Erişim Reddedildi',
        'message' => 'Bu kaynağı görüntülemek için gerekli izinlere sahip değilsiniz. Bunun bir hata olduğunu düşünüyorsanız sistem yöneticinizle iletişime geçin.',
        'go_back' => 'Geri Dön',
        'home'    => 'Ana Sayfaya Dön',
    ],

    '404' => [
        'code'    => '404',
        'title'   => 'Sayfa Bulunamadı',
        'message' => 'İstenen değerlendirme veya sayfayı bulamadık. Taşınmış, kaldırılmış olabilir ya da URL yanlış olabilir.',
        'home'    => 'Ana Sayfaya Git',
    ],

    '500' => [
        'code'    => '500',
        'title'   => 'Dahili Sunucu Hatası',
        'message' => 'Tarafımızda bir şeyler yanlış gitti. Yaşanan rahatsızlık için özür dileriz.',
        'subtext' => 'Teknik ekibimiz bilgilendirildi ve bu sorunu çözmek için çalışıyor.',
        'return'  => 'Güvenli Sayfaya Dön',
    ],

    '503' => [
        'default_title'   => 'Bakımda',
        'default_message' => 'Şu anda hizmetlerimizi geliştirmek için planlı bakım yapıyoruz. Kısa süre içinde geri döneceğiz.',
        'contact_support' => 'Destek ile İletişime Geç',
        'check_status'    => 'Durumu Kontrol Et',
        'image_alt'       => 'Bakım Modu Görseli',
    ],

];
