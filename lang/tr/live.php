<?php

return [
    'page_title'    => 'Canlı Sınav İzleme',
    'header_title'  => 'Canlı İzleme',
    'header_desc'   => 'Aktif aday oturumlarının gerçek zamanlı denetimi.',
    'status_connected' => 'Bağlı',
    'refresh'       => 'Yenile',

    // KPI
    'kpi_active'   => 'Aktif Adaylar',
    'kpi_critical' => 'Kritik Risk',
    'kpi_paused'   => 'Duraklatılan Oturumlar',
    'kpi_finished' => 'Bugün Tamamlanan',

    // Komut Çubuğu
    'filters'            => 'Filtreler',
    'search_placeholder' => 'Aday ara...',
    'filter_all_exams'   => 'Tüm Sınavlar',
    'filter_risk_level'  => 'Risk Seviyesi',
    'filter_status'      => 'Durum',
    'risk_normal'        => 'Normal',
    'risk_warning'       => 'Uyarı',
    'risk_critical'      => 'Kritik',
    'risk_low'           => 'Düşük',
    'status_active'      => 'Aktif',
    'status_paused'      => 'Duraklatıldı',
    'status_flagged'     => 'İşaretlendi',
    'status_completed'   => 'Tamamlandı',
    'status_terminated'  => 'Sonlandırıldı',

    // Yapay Zeka Durumu
    'ai_engine_label' => 'Yapay Zeka Risk Motoru:',
    'ai_mode_adaptive' => 'Uyarlanabilir · Orta',
    'active_signals'  => 'Aktif Sinyaller:',
    'signal_types'    => 'Sekme Değiştirme • Odak Kaybı • IP Değişikliği',
    'live_sync'       => 'Canlı Senkronizasyon',
    'auto_refresh'    => 'Otomatik Yenileme: 5sn',
    'updated'         => 'Güncellendi',

    // Tablo Başlıkları
    'table_candidate' => 'Aday',
    'table_exam'      => 'Sınav',
    'table_progress'  => 'İlerleme',
    'table_risk'      => 'Risk',
    'table_status'    => 'Durum',
    'table_actions'   => 'İşlemler',

    // Filtre Offcanvas
    'filter_sessions'      => 'Oturumları Filtrele',
    'filter_exam_label'    => 'Sınav',
    'filter_risk_label'    => 'Risk Seviyesi',
    'filter_all_risks'     => 'Tüm Risk Seviyeleri',
    'filter_status_label'  => 'Durum',
    'filter_all_statuses'  => 'Tüm Durumlar',
    'apply_filters'        => 'Filtreleri Uygula',

    // Detaylar & Satırlar
    'ip'                   => 'IP',
    'unknown_location'     => 'Bilinmeyen Konum',
    'unknown'              => 'Bilinmiyor',
    'unknown_device'       => 'Bilinmeyen Cihaz',
    'detail_env'           => 'Ortam',
    'detail_ai_events'     => 'Yapay Zeka İşaretlenen Olaylar',
    'detail_timeline'      => 'Zaman Çizelgesi',
    'more_events'          => 'daha fazla olay',
    'no_suspicious_activity' => 'Şüpheli aktivite yok.',
    'clean_session_log'    => 'Temiz oturum kaydı.',
    'started'              => 'Başladı',
    'last_active'          => 'Son Aktif',
    'never'                => 'Hiçbir Zaman',
    'duration_limit'       => 'Süre Limiti',
    'mins'                 => 'dk',

    // Mobil Kart Etiketleri
    'label_exam'      => 'Sınav:',
    'label_progress'  => 'İlerleme:',
    'label_time_left' => 'Kalan Süre:',
    'label_risk'      => 'Risk:',
    'paused_label'    => 'Duraklatıldı',
    'ended_label'     => 'Bitti',

    // Rozetler
    'pill_active' => 'AKTİF',
    'pill_paused' => 'DURAKLATILDI',
    'pill_ended'  => 'BİTTİ',

    // Butonlar
    'btn_view_session' => 'Oturumu Görüntüle',
    'btn_reopen'       => 'Yeniden Aç',
    'btn_pause'        => 'Duraklat',
    'btn_end'          => 'Bitir',
    'btn_resume'       => 'Devam Et',

    // Araç İpuçları
    'action_reopen'    => 'Sınav Oturumunu Yeniden Aç',
    'action_pause'     => 'Sınavı Duraklat',
    'action_resume'    => 'Sınavı Devam Ettir',
    'action_terminate' => 'Zorla Gönder',
    'high_risk_detected' => 'Yüksek Risk Tespit Edildi',

    // Boş Durum
    'empty_title'       => 'Aktif Oturum Yok',
    'empty_desc'        => 'Adayların sınava başlaması bekleniyor.',
    'empty_desc_table'  => 'Adayların sınava başlaması bekleniyor...',
];
