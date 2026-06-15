<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Kimlik Doğrulama Dil Satırları
    |--------------------------------------------------------------------------
    */

    'failed'   => 'Bu kimlik bilgileri kayıtlarımızla eşleşmiyor.',
    'password' => 'Girilen şifre yanlış.',
    'throttle' => 'Çok fazla giriş denemesi yaptınız. Lütfen :seconds saniye sonra tekrar deneyin.',

    /*
    |--------------------------------------------------------------------------
    | Özel UI Dil Satırları
    |--------------------------------------------------------------------------
    */

    // Genel Alan Etiketleri
    'name'             => 'Ad Soyad',
    'email_label'      => 'E-posta Adresi',
    'phone_label'      => 'Telefon Numarası',
    'password_label'   => 'Şifre',
    'confirm_password' => 'Şifreyi Onayla',
    'remember_me'      => 'Beni Hatırla',
    'forgot_password'  => 'Şifremi unuttum?',
    'select_option'    => '-- Seçenek Seçin --',

    // Form Yer Tutucuları
    'placeholder_name'    => 'Ahmet Yılmaz',
    'placeholder_email'   => 'isim@sirket.com',
    'placeholder_phone'   => '+90 532 000 00 00',
    'placeholder_captcha' => 'Güvenlik kodunu girin',

    // Giriş Sayfası
    'login' => [
        'title'     => 'Giriş Yap',
        'tagline'   => 'Yapay Zeka Destekli Sınav Platformu',
        'headline'  => 'Akıllı Sınavları Yapay Zeka ile Yönetin.',
        'brand_sub' => 'Anlık yapay zeka değerlendirmesi ve derin performans analiziyle güvenli, otomatik sınavlar.',

        'features' => [
            'instant'   => 'Anlık Yapay Zeka Değerlendirmesi',
            'security'  => 'Kurumsal Düzeyde Güvenlik',
            'analytics' => 'Gelişmiş Performans Analitiği',
        ],

        'welcome'     => 'Tekrar Hoş Geldiniz',
        'welcome_sub' => 'Sınavlarınıza, sonuçlarınıza ve yapay zeka analizine erişmek için giriş yapın.',

        'captcha_label'       => 'Güvenlik Kontrolü',
        'captcha_placeholder' => 'Kodu girin',
        'captcha_help'        => 'Kodu yenilemek için resme tıklayın.',

        'submit'      => 'Giriş Yap',
        'or_continue' => 'ya da şununla devam edin',

        'no_account'     => 'Hesabınız yok mu?',
        'create_account' => 'Hesap oluşturun',
        'secure_badge'   => '256-bit şifreli güvenli bağlantı',
    ],

    // Kayıt Sayfası
    'register' => [
        'title'      => 'Hesap Oluşturun',
        'subtitle'   => 'Dakikalar içinde başlayın ve yapay zeka destekli sınavlara anında erişin.',
        'headline'   => 'Yapay Zeka Değerlendirmesinin Geleceğine Katılın.',
        'tagline'    => 'Yapay Zeka Destekli Sınav Platformu',
        'brand_desc' => 'Akıllı motorumuzla değerlendirmelerinizi dakikalar içinde oluşturun, yönetin ve ölçeklendirin.',

        'features' => [
            'ai_tests'    => 'Sınırsız Yapay Zeka Pratik Testleri',
            'global_cert' => 'Global Sertifikasyon Standartları',
            'auto_results' => 'Otomatik Sonuç Üretimi',
        ],

        'password_hint' => 'En az 8 karakter, harf ve rakam içermeli.',

        'captcha_label'       => 'Güvenlik Kontrolü',
        'captcha_placeholder' => 'Kodu girin',
        'captcha_help'        => 'Kodu yenilemek için resme tıklayın.',

        'or_signup' => 'ya da şununla kayıt olun',

        'terms_text' => 'Hesap oluşturarak kabul etmiş olursunuz:',
        'terms'      => 'Kullanım Şartları',
        'privacy'    => 'Gizlilik Politikası',

        'already_account' => 'Zaten hesabınız var mı?',
        'signin'          => 'Giriş Yapın',
        'submit'          => 'Hesap Oluştur',
    ],

    // Şifremi Unuttum / Sıfırla
    'forgot_title'     => 'Şifremi Unuttum',
    'forgot_subtitle'  => 'E-postanızı girin, size sıfırlama bağlantısı gönderelim',
    'send_reset_link'  => 'Şifre Sıfırlama Bağlantısı Gönder',
    'reset_link_sent'  => 'E-posta adresinize şifre sıfırlama bağlantısı gönderildi.',
    'email_not_found'  => 'Bu e-posta adresine sahip bir kullanıcı bulunamadı.',

    'reset_title'       => 'Şifremi Sıfırla',
    'reset_subtitle'    => 'Hesabınız için yeni bir şifre oluşturun',
    'reset_button'      => 'Şifreyi Sıfırla',
    'password_updated'  => 'Şifreniz başarıyla sıfırlandı.',
    'token_invalid'     => 'Bu şifre sıfırlama belirteci geçersiz veya süresi dolmuş.',

    // E-posta Doğrulama
    'verify' => [
        'title'      => 'E-postayı Doğrula - :app',
        'heading'    => 'E-postanızı Doğrulayın',
        'subheading' => 'Tüm özelliklere erişmek için e-posta adresinizi doğrulayın.',
        'check_inbox' => 'Gelen kutunuzu kontrol edin',
        'sent_to'    => ':email adresine doğrulama bağlantısı gönderdik',
        'resent'     => 'E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.',
        'help'       => 'E-postayı almadınız mı? Spam klasörünüzü kontrol edin veya aşağıdan yeniden gönderin.',
        'resend'     => 'Doğrulama E-postasını Yeniden Gönder',
        'sign_out'   => 'Çıkış Yap',
        'verified_success' => 'E-postanız başarıyla doğrulandı.',
        'already_verified' => 'E-postanız zaten doğrulanmış.',
    ],

    // Ortak UI Mesajları
    'security_check'    => 'Güvenlik Kontrolü',
    'confirm_identity'  => 'Kimliğinizi doğrulayın',
    'continue'          => 'Devam Et',
    'success'           => 'Başarılı',
    'error'             => 'Hata',
    'warning'           => 'Uyarı',
    'info'              => 'Bilgi',
    'something_wrong'   => 'Bir şeyler yanlış gitti. Lütfen tekrar deneyin.',
    'session_expired'   => 'Oturumunuz sona erdi. Lütfen tekrar giriş yapın.',
    'account_disabled'  => 'Hesabınız devre dışı bırakıldı. Lütfen destek ile iletişime geçin.',

    'reset' => [
        'title'      => 'Yeni Şifre Belirle',
        'subtitle'   => 'Aşağıya yeni ve güçlü şifrenizi girin ve onaylayın.',
        'headline'   => 'Güvenlik Kontrolünü Tamamlayın.',
        'brand_sub'  => 'Hesabınızın korunmasını sağlamak için güçlü bir yeni şifre seçin.',
        'features'   => [
            'secure_token' => 'Güvenli Token Doğrulaması',
            'strong_pw'    => 'Güçlü Şifre Zorunluluğu',
        ],
        'email_label'    => 'E-posta Adresi',
        'password_label' => 'Yeni Şifre',
        'confirm_label'  => 'Yeni Şifreyi Onayla',
        'submit'         => 'Şifreyi Sıfırla',
        'secure_badge'   => 'Sektör standartlarıyla korunmaktadır',
    ],

    'email' => [
        'title'      => 'Şifremi Unuttum',
        'subtitle'   => 'Şifrenizi güvenle sıfırlayın ve sınavlarınıza hemen geri dönün.',
        'headline'   => 'Erişime mi İhtiyacınız Var? Buradayız.',
        'page_title' => 'Giriş Yapmakta Sorun mu Var?',
        'page_sub'   => 'Güvenli şifre sıfırlama bağlantısı almak için e-posta adresinizi girin.',
        'features'   => [
            'secure_process'   => 'Güvenli Sıfırlama İşlemi',
            'instant_delivery' => 'Anında E-posta Teslimi',
        ],
        'submit'       => 'Sıfırlama Bağlantısı Gönder',
        'return'       => 'Giriş Sayfasına Dön',
        'secure_badge' => 'SSL ile korunan güvenli istek',
    ],

    'sent' => [
        'title'       => 'Gelen Kutunuzu Kontrol Edin',
        'subtitle'    => 'E-posta adresinize güvenli bir şifre sıfırlama bağlantısı gönderdik.',
        'help'        => 'Almadınız mı? Spam klasörünüzü kontrol edin veya',
        'try_again'   => 'tekrar deneyin',
        'return'      => 'Giriş Sayfasına Dön',
        'secure_badge' => 'Güvenli işlem',
    ],

    'success' => [
        'title'       => 'Başarılı!',
        'subtitle'    => 'Şifreniz başarıyla güncellendi. Artık yeni kimlik bilgilerinizle giriş yapabilirsiniz.',
        'signin'      => 'Şimdi Giriş Yap',
        'secure_badge' => 'Hesap Güvende',
    ],

];
