<?php

return [
    'title'          => 'Ödemeler',
    'header_title'   => 'Ödeme Geçmişi',
    'header_subtitle' => 'Tüm sistem işlemlerini yönetin ve takip edin.',

    // Para Birimi Ayarları
    'currency_title'           => 'Global Para Birimi Ayarları',
    'currency_desc'            => 'Ana para biriminizi, görüntüleme formatını ve işlem ayraçlarını yapılandırın.',
    'currency_global_currency' => 'Global Para Birimi',
    'currency_global_desc'     => 'Tüm işlemler için ana para birimini ayarlayın.',
    'currency_primary'         => 'ANA PARA BİRİMİ',
    'currency_position'        => 'SEMBOL KONUMU',
    'currency_pos_before'      => 'Tutardan Önce',
    'currency_pos_after'       => 'Tutardan Sonra',
    'currency_pos_before_space' => 'Tutardan Önce (Boşluklu)',
    'currency_pos_after_space'  => 'Tutardan Sonra (Boşluklu)',
    'currency_custom_opt'      => 'Özel Para Birimi',
    'currency_decimal_sep'     => 'ONDALIK AYRAÇ',
    'currency_thousands_sep'   => 'BİNLİK AYRAÇ',
    'currency_decimal_help'    => 'Ondalık için kullanılan karakter (ör. 10.00).',
    'currency_thousands_help'  => 'Binlik için kullanılan karakter (ör. 1.000).',
    'custom_code_label'        => 'ÖZEL KOD (ÖR. :example)',
    'custom_symbol_label'      => 'ÖZEL SEMBOL (ÖR. :example)',
    'example_code_placeholder' => 'ör. TRY',
    'example_symbol_placeholder' => 'ör. ₺',
    'save_settings'            => 'Ayarları Kaydet',

    // Butonlar & Bağlantılar
    'btn_filter'        => 'Filtrele',
    'btn_review_all'    => 'Tümünü İncele',
    'btn_export'        => 'Veriyi Dışa Aktar',
    'btn_view'          => 'Görüntüle',
    'btn_approve'       => 'Onayla',
    'btn_reject'        => 'Reddet',
    'btn_close'         => 'Kapat',
    'btn_clear_filters' => 'Filtreleri Temizle',

    // Yer Tutucular & Girdiler
    'placeholder_search' => 'Ödeme ara...',
    'label_status'       => 'Durum',
    'opt_all'            => 'Tümü',
    'opt_pending'        => 'Beklemede',
    'opt_success'        => 'Başarılı',
    'opt_successful'     => 'Başarılı',
    'opt_failed'         => 'Başarısız',
    'opt_rejected'       => 'Reddedildi',
    'opt_initiated'      => 'Başlatıldı',

    // Uyarılar
    'alert_pending_count' => ':count Bekleyen Ödeme|:count Bekleyen Ödeme',

    // Tablo Başlıkları
    'col_trx'    => 'İŞLEM KİMLİĞİ / AĞGEÇIDI',
    'col_user'   => 'KULLANICI',
    'col_amount' => 'TUTAR (:currency)',
    'col_status' => 'DURUM',
    'col_date'   => 'TARİH',
    'col_action' => 'İŞLEM',

    // Tablo İçeriği
    'text_user_deleted'  => 'Kullanıcı Silindi',
    'text_user_not_found' => 'Kullanıcı bulunamadı',
    'status_success'     => 'Başarılı',
    'status_approved'    => 'Onaylandı',
    'status_pending'     => 'Beklemede',
    'status_initiated'   => 'Başlatıldı',
    'status_failed'      => 'Başarısız',
    'status_rejected'    => 'Reddedildi',
    'empty_title'        => 'Ödeme bulunamadı',

    // Modal Detayları
    'modal_title'          => ':gateway Üzerinden Ödeme',
    'sect_user_info'       => 'Kullanıcı Ödeme Bilgileri',
    'sect_payment_details' => 'Ödeme Detayları',
    'label_fname'          => 'Ad',
    'label_lname'          => 'Soyad',
    'label_bank'           => 'Banka Adı',
    'label_trx'            => 'İşlem Numarası',
    'label_screenshot'     => 'Ekran Görüntüsü',
    'link_attachment'      => 'Ek',
    'text_no_attachment'   => 'Ek sağlanmadı',

    'label_date'        => 'Tarih',
    'label_username'    => 'Kullanıcı Adı',
    'label_method'      => 'Yöntem',
    'label_amount'      => 'Tutar',
    'label_charge'      => 'Ücret',
    'label_after_charge' => 'Ücret Sonrası',
    'label_rate'        => 'Oran',
    'label_total'       => 'Ödenecek Toplam',

    // JS Onayları
    'confirm_title'          => 'Emin misiniz?',
    'confirm_text'           => 'Bu işlem geri alınamaz.',
    'confirm_yes'            => 'Evet, devam et!',
    'confirm_approve_title'  => 'Ödeme Onaylansın mı?',
    'confirm_approve_text'   => ':trx işlemi onaylansın mı?',
    'confirm_reject_title'   => 'Ödeme Reddedilsin mi?',
    'confirm_reject_text'    => ':trx işlemi reddedilsin mi? Bu işlem geri alınamaz.',
];
