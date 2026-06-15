<?php

return [
    'save'      => 'Değişiklikleri Kaydet',
    'configure' => 'Yapılandır',
    'active'    => 'Aktif',
    'variables' => 'Değişkenler:',
    'test_mail' => 'Test Maili',
    'copy_url'  => 'URL\'yi Kopyala',

    'general' => [
        'title'    => 'Bildirim Merkezi',
        'subtitle' => 'Tüm iletişim kanalları için tetikleyicileri, mantığı ve üçüncü taraf ağ geçitlerini yönetin.',
        'tabs' => [
            'logic'     => 'Mantık ve Tetikleyiciler',
            'sms'       => 'SMS Ağ Geçidi',
            'push'      => 'Push Yapılandırması',
            'templates' => 'Şablonlar',
        ],
        'kpi' => [
            'email'         => 'E-posta Sistemi',
            'sms'           => 'SMS Sistemi',
            'push'          => 'Push Bildirimleri',
            'global_switch' => 'Genel Anahtar',
        ],
        'triggers' => [
            'title'      => 'Olay Tetikleyicileri ve Yönlendirme',
            'col_event'  => 'Olay Tetikleyicisi',
            'signup'     => 'Yeni Kullanıcı Kaydı',
            'signup_desc' => 'Kayıt sonrasında hemen tetiklenir.',
            'exam'       => 'Sınav Tamamlama',
            'exam_desc'  => 'Sonuçlar ve puan işleme.',
            'payment'    => 'Ödeme Başarılı',
            'payment_desc' => 'Faturalar ve plan aktivasyonu.',
        ],
        'sms_gateways' => [
            'provider'      => 'SMS Sağlayıcısı',
            'twilio'        => 'Twilio',
            'vonage'        => 'Vonage',
            'standard'      => 'Standart',
            'international' => 'Uluslararası',
            'api_creds'     => 'API Kimlik Bilgileri',
            'account_sid'   => 'Hesap SID',
            'api_key'       => 'API Anahtarı',
            'auth_token'    => 'Doğrulama Belirteci',
            'api_secret'    => 'API Gizli Anahtarı',
            'from'          => 'Gönderen Numara',
            'from_desc'     => 'Gönderen Numara (E.164)',
            'sender_id'     => 'Gönderici Kimliği (Marka Adı)',
            'env'           => 'Ortam',
            'sandbox'       => 'Sandbox Modunu Etkinleştir',
        ],
        'firebase' => [
            'title'      => 'Firebase Cloud Messaging (FCM)',
            'server_key' => 'Sunucu Anahtarı (Eski)',
            'project_id' => 'Proje Kimliği',
            'app_id'     => 'Uygulama Kimliği',
            'sender_id'  => 'Gönderici Kimliği',
            'bucket'     => 'Depolama Klasörü',
        ],
        'template_links' => [
            'email' => 'E-posta Şablonları',
            'sms'   => 'SMS Şablonları',
            'push'  => 'Push Şablonları',
        ],
    ],

    'social' => [
        'title'         => 'Sosyal Giriş',
        'subtitle'      => 'Tek tıklamayla kullanıcı kaydı ve girişi için OAuth sağlayıcılarını yapılandırın.',
        'google'        => 'Google Girişi',
        'google_desc'   => 'Google hesabıyla girişi etkinleştir.',
        'facebook'      => 'Facebook Girişi',
        'facebook_desc' => 'Facebook hesabıyla girişi etkinleştir.',
        'client_id'     => 'İstemci Kimliği',
        'client_secret' => 'İstemci Gizli Anahtarı',
        'app_id'        => 'Uygulama Kimliği',
        'app_secret'    => 'Uygulama Gizli Anahtarı',
        'callback'      => 'Geri Çağırma URL\'si',
        'google_help'   => 'Bu URL\'yi Google Geliştirici Konsolu yapılandırmanıza yapıştırın.',
        'facebook_help' => 'Bu URL\'yi Facebook Geliştirici ayarlarınıza yapıştırın (OAuth yönlendirme URI\'ları).',
    ],

    'email' => [
        'title'        => 'E-posta Yapılandırması',
        'subtitle'     => 'Sistem e-postaları için giden posta sürücülerini ve gönderici kimliğini yapılandırın.',
        'driver_label' => 'Posta Sürücüsü',
        'drivers' => [
            'smtp'        => 'SMTP',
            'smtp_desc'   => 'Önerilen',
            'php'         => 'PHP Mail',
            'php_desc'    => 'Sunucu Varsayılanı',
            'mailgun'     => 'Mailgun',
            'mailgun_desc' => 'API Tabanlı',
        ],
        'smtp' => [
            'title'      => 'SMTP Bağlantı Detayları',
            'host'       => 'Posta Sunucusu',
            'port'       => 'Port',
            'username'   => 'Kullanıcı Adı',
            'password'   => 'Şifre',
            'encryption' => 'Şifreleme',
            'none'       => 'Yok',
        ],
        'mailgun' => [
            'title'    => 'Mailgun API Yapılandırması',
            'domain'   => 'Mailgun Domain',
            'secret'   => 'Mailgun Gizli Anahtarı (API Anahtarı)',
            'endpoint' => 'Mailgun Endpoint',
            'help'     => 'AB bölgeleri için api.eu.mailgun.net kullanın.',
        ],
        'identity' => [
            'title'        => 'Gönderici Kimliği',
            'name'         => 'Gönderen Adı',
            'name_desc'    => 'Alıcının gelen kutusunda görüntülenir.',
            'address'      => 'Gönderen E-posta',
            'address_desc' => 'Sağlayıcınız tarafından yetkilendirilmiş olmalıdır.',
        ],
        'alerts' => [
            'confirm_test' => 'Şu anda oturum açmış kullanıcıya test e-postası gönderilsin mi? Önce Değişiklikleri Kaydettiğinizden emin olun.',
            'sending'      => 'Gönderiliyor...',
            'success'      => 'Başarılı',
            'failed'       => 'Bağlantı Başarısız',
            'error'        => 'Beklenmedik bir hata oluştu.',
        ]
    ],

    'templates' => [
        'email_title'    => 'E-posta Şablonları',
        'email_subtitle' => 'Sistem e-postaları için HTML konu ve içeriği özelleştirin.',
        'sms_title'      => 'SMS Şablonları',
        'sms_subtitle'   => 'Kullanıcılara gönderilen 160 karakterlik metin mesajlarını yapılandırın.',
        'push_title'     => 'Push Bildirimleri',
        'push_subtitle'  => 'Mobil uygulama uyarı stilini ve içeriğini yönetin.',

        'tabs' => [
            'signup'  => 'Kayıt Hoş Geldiniz',
            'exam'    => 'Sınav Sonucu',
            'payment' => 'Ödeme Makbuzu',
        ],

        'fields' => [
            'subject'     => 'Konu Satırı',
            'html_body'   => 'HTML İçeriği',
            'content'     => 'Mesaj İçeriği',
            'alert_title' => 'Uyarı Başlığı',
            'alert_body'  => 'Uyarı İçeriği',
        ],

        'defaults' => [
            'signup_sub'  => 'Platformumuza hoş geldiniz!',
            'signup_body' => '<p>Merhaba {{name}},</p><p>Platformumuza hoş geldiniz!</p>',
            'exam_sub'    => 'Sınav Sonuçları Açıklandı',
            'exam_body'   => '<p>Merhaba {{name}},</p><p><strong>{{score}}%</strong> aldınız.</p>',
            'pay_sub'     => 'Ödeme Makbuzu',
            'pay_body'    => '<p><strong>{{amount}}</strong> tutarındaki ödemenizi aldık.</p>',

            'push_signup_t' => 'Hoş Geldiniz!',
            'push_signup_b' => 'Platformumuza katıldığınız için teşekkürler.',
            'push_exam_t'   => 'Sınav Sonuçları',
            'push_exam_b'   => '{{exam}} sınavında {{score}}% aldınız.',
            'push_pay_t'    => 'Ödeme Alındı',
            'push_pay_b'    => '{{plan}} için aboneliğiniz aktif.',

            'sms_signup' => 'Ziexam\'a hoş geldiniz, {{name}}! Doğrulama: {{link}}',
            'sms_exam'   => 'Tebrikler {{name}}! {{exam}} sınavını {{score}}% ile geçtiniz.',
            'sms_pay'    => '{{plan}} için {{amount}} ödeme alındı. Teşekkürler!',
        ],

        'preview' => [
            'label'    => 'Önizleme',
            'app_name' => 'Uygulama Adı',
            'now'      => 'şimdi',
        ]
    ]
];
