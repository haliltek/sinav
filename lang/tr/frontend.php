<?php

return [
    /*
    |--------------------------------------------------------------------------
    | E-posta Doğrulama
    |--------------------------------------------------------------------------
    */
    'email_not_verified' => 'E-posta Adresinizi Doğrulayın',
    'verify_email_desc' => 'Tüm özelliklere erişmek ve bildirimleri almak için lütfen e-posta adresinizi doğrulayın.',
    'resend_link' => 'Doğrulama Bağlantısını Tekrar Gönder',
    'verification_link_sent' => 'E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.',
    'system_alert' => 'Sistem Uyarısı',

    /*
    |--------------------------------------------------------------------------
    | Ön Yüz Paneli & Genel
    |--------------------------------------------------------------------------
    */
    'welcome_back' => 'Tekrar hoş geldin',
    'student_default' => 'Öğrenci',
    'header_subtitle' => 'Odaklanın. Bir sonraki değerlendirmeniz hazır.',
    'assessment' => 'Değerlendirme',
    'minutes' => 'Dakika',
    'mins' => 'Dk',
    'view' => 'Görüntüle',
    'result' => 'Sonuç',
    'sidebar_administration' => 'Yönetim',
    'manage_exams' => 'Sınavları Yönet',
    'manage_users' => 'Kullanıcıları Yönet',
    'system_settings' => 'Sistem Ayarları',
    'admin_dashboard' => 'Yönetici Paneli',

    // Ödeme Akışı (Checkout)
    'checkout_title' => 'Güvenli Ödeme',
    'step_cart' => 'Sepet',
    'step_details' => 'Detaylar',
    'step_payment' => 'Ödeme',

    'upgrade_plan' => 'Planı Yükselt',
    
    // Ödeme Sayfası Başlıkları & Açıklamaları
    'payment_method' => 'Ödeme Yöntemi',
    'payment_desc' => 'İşlemleriniz şifrelenir ve güvence altına alınır.',
    'no_payment_enabled' => 'Şu anda aktif bir ödeme ağ geçidi bulunmamaktadır.',
    
    // Ödeme Seçenekleri
    'credit_debit_card' => 'Kredi / Banka Kartı',
    'bank_transfer_offline' => 'Banka Transferi / Havale', 
    
    // Stripe Alanları
    'card_holder_name' => 'Kart Sahibi Adı',
    'email' => 'E-posta',
    'card_number' => 'Kart Numarası',
    'expiry_date' => 'Son Kullanma Tarihi',
    'cvc' => 'CVC',
    'securely_processed_by_stripe' => 'Stripe ile güvenli bir şekilde işlenir',
    
    // Banka/Çevrimdışı Ödeme Alanları
    'account_holder_name' => 'Hesap Sahibi Adı',
    'bank_name' => 'Banka Adı',
    'account_number_iban' => 'Hesap Numarası / IBAN',
    'ifsc_swift_code' => 'SWIFT / IFSC Kodu',
    'additional_instructions' => 'Ek Talimatlar',
    'offline_gateway_note' => 'Havalenizi tamamlamak için lütfen aşağıdaki bilgileri kullanın. Ödemeniz manuel olarak doğrulandıktan sonra siparişiniz onaylanacaktır.',
    
    // Ödeme Yönlendirmeleri
    'select_gateway_prompt' => 'Gerekli alanları görüntülemek için lütfen yukarıdan bir ödeme yöntemi seçin.',
    'razorpay_redirect_note' => 'Bu yöntem genellikle ödemeyi Razorpay platformunda tamamlamak için yönlendirme gerektirir.',

    // Sipariş Özeti
    'order_summary' => 'Sipariş Özeti',
    'subtotal' => 'Ara Toplam',
    'taxes' => 'Vergiler',
    'total_amount' => 'Toplam Tutar',

    // Butonlar & Güvenlik
    'pay_with_amount' => '{amount} Öde ve Eriş',
    'back_details' => 'Detaylara Geri Dön',
    'bank_security' => 'Banka Düzeyinde Güvenlik',

    // Sınav İşlemleri
    'continue_exam' => 'Sınava Devam Et',
    'start_now' => 'Şimdi Başla',
    'view_instructions' => 'Talimatları Görüntüle',
    'view_all_exams' => 'Tüm Sınavları Görüntüle',
    'retake_exam' => 'Sınavı Tekrar Al',
    'go_to_exams' => 'Sınavlara Git',

    // Sınav Durumları
    'ongoing' => 'Devam Ediyor',
    'ready' => 'Hazır',
    'completed' => 'Tamamlandı',
    'pending' => 'Beklemede',
    
    // Kahraman Alanı - Boş Durum
    'no_active' => 'AKTİF YOK',
    'no_scheduled_title' => 'Planlanmış Değerlendirme Yok',
    'no_scheduled_desc' => 'Mevcut sınavlar veya testler için derslerinizi kontrol edin.',
    'available_now' => 'Şimdi Kullanılabilir',

    // İstatistik Bileşeni
    'scheduled' => 'Planlanan',
    'avg_score' => 'Ort. Puan',
    
    // Sınav Listesi Bölümü
    'your_exams' => 'Sınavlarınız',
    'tab_upcoming' => 'Yaklaşan',
    'tab_history' => 'Geçmiş',
    'no_upcoming_exams' => 'Yaklaşan sınav bulunamadı.',
    'no_history_exams' => 'Tamamlanmış sınav bulunamadı.',
    'score_label' => 'Puan:',
    
    // Performans Bileşeni
    'performance_snapshot' => 'Performans Özeti',
    'accuracy_rate' => 'Doğruluk Oranı',
    'time_management' => 'Zaman Yönetimi',
    'consistency' => 'Kararlılık',
    
    // Güncellemeler Bileşeni
    'exam_updates' => 'Sınav Güncellemeleri',
    'schedule_change' => 'Program Değişikliği',
    'schedule_change_msg' => 'Fizik Ara Sınavı 28 Ekim tarihine ertelendi.',
    'result_published' => 'Sonuç Yayınlandı',
    'result_published_msg' => 'Kimya Final Sınavı sonucu artık görüntülenebilir.',

    // Bildirimler Bileşeni
    'notifications' => 'Bildirimler',
    'no_notifications' => 'Yeni bildirim yok.',
    'view_all_notifications' => 'Tüm Bildirimleri Görüntüle',
    'notification_welcome_title' => 'ZiExam AI\'ye Hoş Geldiniz',
    'notification_welcome_body' => 'Aramıza katıldığınız için heyecanlıyız! Mevcut sınavları inceleyerek başlayabilirsiniz.',
    'notification_result_title' => 'Sınav Sonucu Yayınlandı',
    'notification_result_body' => '"{exam}" sınavı sonuçlarınız artık görüntülenebilir.',
    'notification_payment_title' => 'Ödeme Başarılı',
    'notification_payment_body' => '"{plan}" için ödemenizi aldık. İşlem ID: {trx}',
    'notification_profile_title' => 'Eksik Profil',
    'notification_profile_body' => 'Sertifikaların doğru oluşturulabilmesi için lütfen profil bilgilerinizi tamamlayın.',
    'notification_missed_title' => 'Kaçırılan Sınav',
    'notification_missed_body' => '"{exam}" sınavının planlanan süresini kaçırdınız.',

    /*
    |--------------------------------------------------------------------------
    | Başarı / Hata Sayfası
    |--------------------------------------------------------------------------
    */
    'payment_successful' => 'Ödeme Başarılı!',
    'payment_pending' => 'Ödeme Beklemede',
    'exam_access_active' => 'Sınav erişiminiz artık aktif.',
    'offline_processing' => 'Havale ödemeniz şu anda inceleme aşamasındadır.',
    'purchased_exams' => 'Satın Alınan Sınav(lar)',
    'access_activated' => 'Erişim Etkinleştirildi',
    'access_pending' => 'Erişim Beklemede',
    'order_id' => 'Sipariş Kimliği',
    'amount_paid' => 'Ödenen Tutar',
    'go_to_dashboard' => 'Panele Git',
    'home' => 'Ana Sayfa',
    'not_ready_note' => 'Başlamaya hazır değil misiniz? Bu sınav hesabınıza kaydedildi.',
    'buy_again_btn' => 'Tekrar Satın Al',
    'retake_exam_btn' => 'Sınavı Tekrar Al',
    'start_exam_btn' => 'Sınavı Başlat',
    'buy_exam_btn' => 'Şimdi Satın Al',
    'start_free_btn' => 'Ücretsiz Başla',
    'result_published' => 'Sonuç Yayınlandı',
    'result_pending' => 'Sonuç Bekleniyor',
    'results_locked' => 'Sonuçlar Kilitli',
    'score_label_card' => 'Puan',
    'progress_label' => 'İlerleme',

    // Yaklaşan Sınav Uyarısı
    'upcoming_exam_title' => 'Sınav Yaklaşıyor',
    'upcoming_exam_msg' => 'Bu sınavın başlama tarihi:',
    'upcoming_exam_wait' => 'Katılmak için lütfen başlama saatini bekleyin.',
    'visit_website' => 'Web Sitesini Ziyaret Et',
    'no_exams_match' => 'Kriterlerinize uygun sınav bulunamadı.',
    'no_exams_suggestion' => 'Aradığınızı bulmak için arama terimlerini veya filtreleri ayarlamayı deneyin.',
    'clear_all_filters' => 'Filtreleri Temizle',

    /*
    |--------------------------------------------------------------------------
    | Sertifikalar
    |--------------------------------------------------------------------------
    */
    'my_certificates' => 'Sertifikalarım',
    'certificates_subtitle' => 'Sınavları başarıyla tamamlayarak kazandığınız sertifikalar.',
    'earned_section' => 'Kazanılan Sertifikalar',
    'cert_achievement' => 'Başarı Sertifikası',
    'issued_on' => 'Veriliş Tarihi:',
    'download_pdf' => 'PDF İndir',
    
    'processing_section' => 'Hazırlanıyor',
    'passed_on' => 'Geçtiği Tarih',
    'waiting_admin' => 'Yönetici onayı ve basımı bekleniyor.',
    
    'locked_section' => 'Kilitli',
    'not_earned' => 'Kazanılmadı',
    'highest_score' => 'En Yüksek Puan:',
    'required_score' => 'Gerekli:',
    
    'no_certs_title' => 'Henüz Sertifikanız Yok',
    'no_certs_desc' => 'Resmi sertifikalar kazanmak için sınavları baraj puanının üzerinde tamamlayın.',

    /*
    |--------------------------------------------------------------------------
    | Bildirimler
    |--------------------------------------------------------------------------
    */
    'notifications_title' => 'Bildirimler',
    'notifications_subtitle' => 'En son aktiviteleriniz ve sistem uyarıları.',
    'mark_all_read' => 'Tümünü Okundu İşaretle',
    'view_details' => 'Detayları Görüntüle',
    'remove_notification' => 'Bildirimi Kaldır',
    'no_notifications' => 'Bildirim Yok',
    'no_notifications_desc' => 'Her şey güncel! Gösterilecek yeni bildirim yok.',

    /*
    |--------------------------------------------------------------------------
    | Profil & Hesap
    |--------------------------------------------------------------------------
    */
    'profile_title' => 'Profilim',
    'profile_subtitle' => 'Kişisel bilgilerinizi güncelleyin ve şifrenizi değiştirin.',
    'general_info' => 'Genel Bilgiler',
    'change_avatar' => 'Profil Resmini Değiştir',
    'avatar_help' => 'Maksimum boyut 2MB (JPG/PNG)',
    'file_selected' => 'Dosya Seçildi',
    'full_name' => 'Ad Soyad',
    'email_address' => 'E-posta Adresi',
    'save_general' => 'Genel Bilgileri Kaydet',
    
    'change_password' => 'Şifre Değiştir',
    'current_password' => 'Mevcut Şifre',
    'new_password' => 'Yeni Şifre',
    'confirm_password' => 'Yeni Şifreyi Onayla',
    'update_password' => 'Şifreyi Güncelle',

    /*
    |--------------------------------------------------------------------------
    | İşlemler / Ödemeler Geçmişi
    |--------------------------------------------------------------------------
    */
    'transactions_title' => 'İşlem Geçmişi',
    'transactions_subtitle' => 'Tüm ödemelerinizi ve plan aboneliklerinizi inceleyin.',
    'filter_btn' => 'Filtrele',
    'reset_btn' => 'Temizle',
    'txn_id' => 'İşlem Kimliği',
    'plan_item' => 'Plan / Ürün',
    'amount' => 'Tutar',
    'gateway' => 'Ödeme Yöntemi',
    'status' => 'Durum',
    'date' => 'Tarih',
    'standalone_purchase' => 'Bireysel Satın Alma',
    'days_subscription' => 'günlük abonelik',
    'approved' => 'Onaylandı',
    'success' => 'Başarılı',
    'successful' => 'Başarılı',
    'active' => 'Aktif',
    'pending' => 'Beklemede',
    'initiated' => 'Başlatıldı',
    'rejected' => 'Reddedildi',
    'failed' => 'Başarısız',
    'info' => 'Bilgi',
    
    'no_txn_found' => 'İşlem Bulunamadı',
    'no_txn_desc' => 'Filtrelerinize uyan herhangi bir ödeme kaydı bulunamadı.',
    'browse_plans' => 'Sınavlara & Planlara Göz At',

    /*
    |--------------------------------------------------------------------------
    | Ayarlar
    |--------------------------------------------------------------------------
    */
    'settings_title' => 'Uygulama Ayarları',
    'settings_subtitle' => 'Tercihlerinizi, bildirimlerinizi ve güvenlik seçeneklerinizi yapılandırın.',
    'notification_prefs' => 'Bildirim Tercihleri',
    'email_notify' => 'E-posta Bildirimleri',
    'email_notify_desc' => 'Yeni sonuçlar ve sınav davetleri hakkında güncellemeler alın.',
    'in_app_alerts' => 'Uygulama İçi Bildirimler',
    'in_app_alerts_desc' => 'Kontrol panelinde anlık bildirimleri göster.',
    'regional_settings' => 'Bölgesel ve Saat Ayarları',
    'timezone' => 'Saat Dilimi',
    'language' => 'Dil',
    'save_settings' => 'Ayarları Kaydet',

    /*
    |--------------------------------------------------------------------------
    | Destek Talepleri
    |--------------------------------------------------------------------------
    */
    'tickets_title' => 'Destek Talepleri',
    'tickets_subtitle' => 'Destek taleplerinizi ve yazışmalarınızı yönetin.',
    'create_ticket' => 'Yeni Talep Oluştur',
    'my_active_tickets' => 'Aktif Taleplerim',
    'filter_by' => 'Filtrele:',
    'status_all' => 'Tümü',
    'status_open' => 'Açık',
    'status_replied' => 'Yanıtlandı',
    'status_closed' => 'Kapalı',
    'admin_short' => 'AD',
    
    // Tablo Başlıkları
    'th_ticket_id' => 'TALEP NO',
    'th_subject' => 'KONU',
    'th_priority' => 'ÖNCELİK',
    'th_status' => 'DURUM',
    'th_last_updated' => 'SON GÜNCELLEME',
    'th_action' => 'İŞLEM',
    'no_tickets' => 'Destek talebi bulunamadı.',
    
    // Talep Detayları
    'back_btn' => 'Geri',
    'priority_suffix' => 'Öncelik',
    'created_prefix' => 'Oluşturuldu',
    'me_label' => 'Ben',
    'admin_label' => 'Yönetici',
    'support_agent' => 'Destek Görevlisi',
    'attachments_label' => 'Ekler:',
    'view_file' => 'Dosyayı Görüntüle',
    'no_messages' => 'Bu talepte henüz mesaj bulunmuyor.',
    'reply_label' => 'Yanıtla',
    'reply_placeholder' => 'Yanıtınızı buraya yazın...',
    'attachments_optional' => 'Ekler (İsteğe Bağlı)',
    'send_reply' => 'Yanıtı Gönder',
    'close_ticket' => 'Talebi Kapat',
    'close_confirm' => 'Bu talebi kapatmak istediğinizden emin misiniz? Artık yanıt yazamazsınız.',
    'ticket_closed_msg' => 'Bu destek talebi kapatılmıştır. Daha fazla yardıma ihtiyacınız varsa lütfen',
    'open_new_link' => 'yeni bir talep oluşturun',
    
    // Oluşturma Modalı
    'submit_a_new_support_ticket' => 'Yeni Destek Talebi Gönder',
    'modal_title' => 'Yeni Destek Talebi Gönder',
    'subject_label' => 'Konu',
    'subject_place' => 'Sorunun kısa özeti (ör. Sınav yüklenmiyor)',
    'category_label' => 'Kategori',
    'select_cat' => 'Kategori Seçin...',
    'cat_billing' => 'Faturalandırma / Ödeme',
    'cat_tech' => 'Teknik Sorun',
    'cat_content' => 'Sınav İçeriği',
    'cat_general' => 'Genel Soru',
    'cat_feature' => 'Özellik Talebi',
    'priority_label' => 'Öncelik',
    'p_low' => 'Düşük',
    'p_medium' => 'Orta',
    'p_high' => 'Yüksek',
    'desc_label' => 'Açıklama',
    'desc_place' => 'Lütfen ayrıntılı adımları veya bağlamı açıklayın...',
    'supported_formats' => 'Desteklenen formatlar: JPG, PNG, PDF, DOCX',
    'support_notice' => 'Destek ekibimiz acil taleplere 24 saat içinde yanıt vermeyi hedefler.',
    'cancel_btn' => 'İptal',
    'submit_btn' => 'Talebi Gönder',

    /*
    |--------------------------------------------------------------------------
    | Sınav Sonuçları
    |--------------------------------------------------------------------------
    */
    'results_title' => 'Sınav Sonuçları',
    'results_subtitle' => 'Tamamladığınız değerlendirmeler için ayrıntılı performans raporları.',
    'no_results_title' => 'Henüz Sonuç Yok',
    'no_results_desc' => 'Henüz hiçbir sınavı tamamlamadınız. Bir değerlendirmeyi bitirdiğinizde ayrıntılı performans raporunuz burada görünecektir.',
    'browse_exams_btn' => 'Sınavlara Göz At',
    
    // Durumlar & Kartlar
    'status_passed' => 'Geçti',
    'status_failed' => 'Kaldı',
    'status_pending' => 'Sonuç Bekleniyor',
    'result_available' => 'Sonuç Açıklanma:',
    'completed_on' => 'Tamamlanma:',
    'your_score' => 'Puanınız:',
    'passing_mark' => 'Geçme Puanı:',
    'view_full_report' => 'Tam Raporu Görüntüle',
    'view_status' => 'Durumu Görüntüle',

    // Sonuç Bekleme Sayfası
    'exam_completed_title' => 'Sınav Tamamlandı!',
    'exam_completed_msg' => '":title" sınavını tamamladığınız için teşekkür ederiz. Cevaplarınız başarıyla kaydedildi.',
    'expected_date_label' => 'Beklenen Sonuç Tarihi',
    'publish_time_msg' => 'Sonuçlar şu tarihte yayınlanacak:',
    'tba_title' => 'Yakında Açıklanacak',
    'tba_msg' => 'Eğitmen henüz sonuç yayınlama tarihi belirlemedi.',
    'back_to_exams' => 'Sınavlarıma Geri Dön',

    // Rapor / Göster Sayfası
    'report_prefix' => 'Rapor:',
    'report_subtitle' => 'Denemeniz için ayrıntılı analiz ve soru dökümü.',
    'back_to_results' => 'Sonuçlara Geri Dön',
    'download_pdf_alert' => 'PDF indirme özelliği yakında aktif olacak!',
    'overall_score' => 'Toplam Puan',
    'metric_correct' => 'Doğru Cevaplar',
    'metric_time' => 'Harcanan Süre (Dakika)',
    'metric_total_marks' => 'Toplam Puan',
    'metric_pass_percentage' => 'Gerekli Geçme %',
    
    // Soru Analizi
    'analysis_title' => 'Soru Analizi',
    'analysis_subtitle' => 'Her soru için verdiğiniz cevabı doğru çözümle karşılaştırın.',
    'review_answer_btn' => 'Cevabı İncele',
    'label_your_answer' => 'Sizin Cevabınız:',
    'label_skipped' => 'Atlandı',
    'label_correct_answer' => 'Doğru Cevap:',
    'label_explanation' => 'Açıklama:',

    /*
    |--------------------------------------------------------------------------
    | Sınav Kartları & Talimatlar
    |--------------------------------------------------------------------------
    */
    'no_records_found' => 'Kayıt bulunamadı.',
    'starts' => 'Başlangıç',
    'soon' => 'Yakında',
    'view_report' => 'Raporu Görüntüle',
    'questions_count' => 'Soru',
    
    'instructions_header' => 'Sınav Talimatları',
    'instructions_subtitle' => 'Lütfen ":title" sınavına başlamadan önce bu yönergeleri dikkatlice okuyun.',
    'instruction_1_title' => '1. Cevaplama & Kaydetme',
    'instruction_1_text' => 'Aksi belirtilmedikçe her sorunun yalnızca bir doğru cevabı vardır. Seçimleriniz otomatik olarak kaydedilir.',
    'instruction_2_title' => '2. Gezinme & Gözden Geçirme',
    'instruction_2_text' => 'Kenar çubuğundaki soru gezginini kullanarak sorular arasında serbestçe geçiş yapabilirsiniz. Daha sonra dönmek için "İnceleme İçin İşaretle" bayrağını kullanın.',
    'instruction_3_title' => '3. Süre Sınırı & Gönderim',
    'instruction_3_text' => 'Toplam sınav süresi :minutes dakikadır. Süre dolduğunda sınav otomatik olarak gönderilecektir.',
    'instruction_4_title' => '4. Teknik Güvenlik',
    'instruction_4_text' => 'Kararlı bir internet bağlantınız olduğundan emin olun. Sayfayı yenilemeyin veya tarayıcı penceresini kapatmayın.',
    
    'agree_terms' => 'Yukarıdaki tüm talimatları okudum ve anladım.',
    'back_to_exams' => 'Sınavlarıma Geri Dön',

    /*
    |--------------------------------------------------------------------------
    | Sınavlarım Sayfası
    |--------------------------------------------------------------------------
    */
    'my_exams_title' => 'Sınavlarım',
    'my_exams_subtitle' => 'Satın aldığınız değerlendirmeleri yönetin ve ilerlemenizi takip edin.',
    'tab_available' => 'Kullanılabilir',
    'tab_ongoing' => 'Devam Eden',
    'tab_completed' => 'Tamamlanan',
    'no_exams_ready' => 'Henüz başlamaya hazır bir sınavınız bulunmuyor.',
    'no_exams_progress' => 'Şu anda devam eden bir sınavınız yok.',
    'no_exams_completed' => 'Henüz tamamlanmış bir sınavınız yok.',
    'no_exams_scheduled' => 'Yaklaşan planlı sınav bulunmuyor.',

    /*
    |--------------------------------------------------------------------------
    | Sınav Arama/Liste Sayfası
    |--------------------------------------------------------------------------
    */
    'explore_exams_title' => 'Tüm Sınavları Keşfet',
    'explore_exams_desc' => 'Sınav, deneme testi ve sertifika kataloğumuzun tamamına göz atın.',
    'filters_title' => 'Filtreler',
    'search_placeholder' => 'Sınav ara...',
    'categories_title' => 'Kategoriler',
    'price_title' => 'Fiyat',
    'all_prices' => 'Tüm Fiyatlar',
    'free_only' => 'Yalnızca Ücretsizler',
    'paid_only' => 'Yalnızca Ücretliler',
    'apply_filters_btn' => 'Filtreleri Uygula',
    
    'showing_results' => ':total sınav arasından :first ile :last arası gösteriliyor',
    'showing_results_footer' => ':total sonuç arasından :first ile :last arası gösteriliyor',
    
    'sort_newest' => 'Sıralama: En Yeni',
    'sort_price_low' => 'Fiyat: Düşükten Yükseğe',
    'sort_price_high' => 'Fiyat: Yüksekten Düşüğe',
    
    'free_badge' => 'ÜCRETSİZ',
    'qns_short' => 'Soru',

    /*
    |--------------------------------------------------------------------------
    | Dinamik Sayfalar
    |--------------------------------------------------------------------------
    */
    'page_not_found' => 'Sayfa bulunamadı',
    'back_home' => 'Ana Sayfaya Dön',

    /*
    |--------------------------------------------------------------------------
    | Sepet ve Ödeme
    |--------------------------------------------------------------------------
    */
    'review_selection' => 'Seçimlerinizi İnceleyin',
    'confirm_exams' => 'Devam etmeden önce sınavlarınızı onaylayın.',
    'remove_item' => 'Kaldır',
    'continue_checkout' => 'Ödemeye Devam Et',
    'money_back_guarantee' => '30 Gün Para İade Garantisi',
    'cart_empty' => 'Sepetiniz boş',
    'cart_empty_desc' => 'Kataloğumuza göz atın ve sizin için en uygun sınavı bulun.',

    // Detaylar Sayfası
    'billing_details' => 'Faturalandırma Bilgileri',
    'billing_desc' => 'Faturanız ve sınav erişiminiz için kullanılır.',
    'first_name' => 'Ad',
    'last_name' => 'Soyad',
    'your_order' => 'Siparişiniz',
    'total_to_pay' => 'Ödenecek Toplam',
    'continue_payment' => 'Ödemeye Devam Et',
    'return_cart' => 'Sepete Geri Dön',
    'ssl_secure' => 'SSL Korumalı Güvenli İşlem',

    // Ödeme Sayfası
    'credit_card' => 'Kredi / Banka Kartı',

    // Başarı Sayfası
    'payment_success' => 'Ödeme Başarılı!',
    'access_active' => 'Sınav erişiminiz artık aktif.',
    'save_note' => 'Başlamaya hazır değil misiniz? Bu sınav hesabınıza kaydedilmiştir.',

    /*
    |--------------------------------------------------------------------------
    | Ana Sayfa Bölümleri varsayılanları
    |--------------------------------------------------------------------------
    */
    
    // Ana Banner
    'hero_title_default' => 'Yapay Zeka Otomasyonu ile<br><span class="gradient-text">Online Sınavlar</span> Oluşturun, Satın ve Yönetin',
    'hero_subtitle_default' => 'ZiExam AI; yapay zeka ile oluşturulmuş sınavlar hazırlamanıza, erişim satmanıza, abonelikleri yönetmenize ve sonuçları takip etmenize olanak tanıyan, satışa hazır bir SaaS platformudur.',
    'hero_rating_label' => '58.980+ kullanıcı tarafından güvenilir',
    
    // Kategori Bölümü
    'categories_title_default' => 'Farklı Kategorilerde Sınavlar Oluşturun',
    'categories_subtitle_default' => 'ZiExam AI; akademik testlerden rekabetçi ve profesyonel değerlendirmelere kadar geniş bir sınav yelpazesini destekler.',
    'categories_bottom_text_default' => 'Tüm kategoriler yönetim panelinden tamamen özelleştirilebilir.',
    'category_exams_count' => ':count Sınav',
    'no_categories_found' => 'Kategori bulunamadı. Lütfen Yönetici Panelinden ekleyin.',
    
    // Hedef Kitle Bölümü
    'audience_title_default' => 'Kurumlar, Eğitimciler ve Girişimciler İçin Tasarlandı',
    'audience_subtitle_default' => 'ZiExam AI ölçeklenebilir yapıdadır; ister bir kurum işletin, ister kurs satın veya kendi sınav SaaS işinizi kurun.',
    'audience_bottom_text_default' => 'Hangi modelin size uygun olduğundan emin değil misiniz? ZiExam AI tüm büyük sınav iş modellerini destekler.',
    'audience_card_1_title' => 'Başlık 1',
    'audience_card_1_highlight' => 'Vurgu Metni Burada',
    'audience_card_1_desc' => 'Açıklama içeriği buraya gelir...',

    // Özellikler Bölümü
    'features_title_default' => 'Başlatmak ve Ölçeklendirmek İçin İhtiyacınız Olan Her Şey',
    'features_subtitle_default' => 'Sınavlar oluşturmak, değerlendirmeyi otomatikleştirmek ve platformunuzdan ilk günden itibaren gelir elde etmek için yapay zeka destekli eksiksiz bir araç seti.',
    
    // Özellik Panelleri varsayılanları
    'feat_p1_title' => 'Yapay Zeka ile Sınav Oluşturma ve Kontrol',
    'feat_p1_desc' => 'Hız, doğruluk ve ölçeklenebilirlik için tasarlanmış yapay zeka destekli araçları kullanarak dakikalar içinde profesyonel sınavlar oluşturun.',
    'feat_p1_hint' => 'Yapay Zeka Destekli Üretim',
    
    'feat_p2_title' => 'Otomatik Değerlendirme & Analiz',
    'feat_p2_desc' => 'Performansı anında değerlendirin, sonuçları yayınlayın ve manuel çaba harcamadan öğrenme çıktıları hakkında derin içgörüler elde edin.',
    'feat_p2_hint' => 'Gerçek Zamanlı Analitik',
    
    'feat_p3_title' => 'Gelir Elde Etme ve Erişim',
    'feat_p3_desc' => 'Entegre ödemeler, abonelikler ve rol tabanlı erişim kontrolü ile sınavlarınızı sürdürülebilir bir işe dönüştürün.',
    'feat_p3_hint' => 'Güvenli Ödemeler',
    
    'feat_p4_title' => 'Yönetim ve Güvenlik',
    'feat_p4_desc' => 'Kullanıcıları, rolleri ve verileri büyük ölçekte güvenli bir şekilde yönetmek için kurumsal düzeyde araçlar.',
    'feat_p4_hint' => 'Yönetici Kontrolleri',

    // Nasıl Çalışır Bölümü
    'how_it_works_title_default' => 'Nasıl Çalışır?',
    'how_it_works_subtitle_default' => 'Sınav işinizi 4 basit adımda başlatın.',
    
    'hiw_s1_title' => 'Kurulum ve Yapılandırma',
    'hiw_s1_desc' => 'Kolay yükleyicimizle sunucunuzda dakikalar içinde kurulum yapın.',
    
    'hiw_s2_title' => 'Yapay Zeka ile Sınav Oluşturun',
    'hiw_s2_desc' => 'Sorular oluşturmak ve sınavları yapılandırmak için yapay zekayı anında kullanın.',
    
    'hiw_s3_title' => 'Fiyatları ve Planları Belirleyin',
    'hiw_s3_desc' => 'Abonelik modellerini veya tek seferlik satın alma ücretlerini tanımlayın.',
    
    'hiw_s4_title' => 'Takip Edin ve Ölçeklendirin',
    'hiw_s4_desc' => 'Öğrenci performansını ve gelir artışını izleyin.',

    /*
    |--------------------------------------------------------------------------
    | Fiyatlandırma Bölümü
    |--------------------------------------------------------------------------
    */
    'pricing_title_default' => 'Basit Fiyatlandırma. Ömür Boyu Sahiplik.',
    'pricing_subtitle_default' => 'İş modelinize uygun lisansı seçin. Tek seferlik satın alma. Aylık ücret yok.',
    'most_popular' => 'EN POPÜLER',
    'per_month' => '/ Ay',
    'choose_plan' => ':plan Seç',
    'exams_limit_count' => ':count Sınav',
    'exams_unlimited' => 'Sınırsız Sınav',
    'pricing_trust_1' => 'Güvenli Ödemeler',
    'pricing_trust_2' => 'İstediğiniz Zaman İptal Edin',
    'pricing_trust_3' => 'Gizli Ücret Yok',
    'pricing_trust_4' => 'Onaylanmış Kalite',
    'no_pricing_plans' => 'Yönetim panelinde tanımlanmış fiyatlandırma planı bulunmuyor.',

    /*
    |--------------------------------------------------------------------------
    | Referanslar Bölümü
    |--------------------------------------------------------------------------
    */
    'testimonials_title_default' => 'Dünya Genelinde Eğitimciler, Ekipler ve İçerik Üreticileri Tarafından Güvenilir',
    'testimonials_subtitle_default' => 'Bireysel eğitmenlerden hızla büyüyen kurumlara kadar ekipler, çevrimiçi sınavları güvenle oluşturmak, değerlendirmek ve ölçeklendirmek için platformumuza güveniyor.',

    /*
    |--------------------------------------------------------------------------
    | Öne Çıkan Sınavlar Bölümü
    |--------------------------------------------------------------------------
    */
    'exams_title_default' => 'Sınav Satın ve Düzenli Gelir Elde Edin',
    'exams_subtitle_default' => 'Bireysel sınavları paraya dönüştürün veya bunları abonelik paketleri halinde sunun; hepsi yönetim panelinizden kolayca yönetilir.',
    'no_active_exams' => 'Aktif sınav bulunamadı. Lütfen yönetim panelinden sınav oluşturun.',
    
    'sub_strip_title_default' => 'Sınırsız Erişim Sunun',
    'sub_strip_desc_default' => 'Tüm sınavları aylık veya yıllık abonelik kademelerinde paketleyin.',
    'exams_bottom_text_default' => 'Tüm fiyatlandırma, erişim kuralları ve kullanılabilirlik yönetim panelinden tamamen kontrol edilir.',

    /*
    |--------------------------------------------------------------------------
    | CMS Özellikleri Bölümü
    |--------------------------------------------------------------------------
    */
    'cms_badge_default' => 'İÇERİK YÖNETİMİ DAHİL',
    'cms_title_default' => 'Web Sitenizi Ekstra Araçlar Olmadan Başlatın',
    'cms_desc_default' => 'ZiExam AI, dinamik sayfalar oluşturmanıza, gezinme menülerini yönetmenize ve ana sayfa bölümlerini doğrudan yönetim panelinden düzenlemenize olanak tanıyan yerleşik bir İçerik Yönetim Sistemi (CMS) içerir.',
    
    'cms_feat_1_title' => 'Dinamik Sayfalar',
    'cms_feat_1_desc' => 'Görsel bölüm tabanlı sistem kullanarak sınırsız sayfa oluşturun.',
    
    'cms_feat_2_title' => 'Menü Oluşturucu',
    'cms_feat_2_desc' => 'Gezinme menülerini doğrudan yönetim panelinden oluşturun ve yönetin.',
    
    'cms_feat_3_title' => 'SEO Hazır',
    'cms_feat_3_desc' => 'Daha iyi sıralama için meta başlıkları, açıklamaları ve slug\'ları kontrol edin.',
    
    'cms_feat_4_title' => 'Ana Sayfa Bölümleri',
    'cms_feat_4_desc' => 'Ana banner, özellikler, fiyatlandırma ve CTA bloklarını kolayca düzenleyin.',

    /*
    |--------------------------------------------------------------------------
    | Yönetici Önizleme Bölümü
    |--------------------------------------------------------------------------
    */
    'admin_preview_title_default' => 'Her Şeyi Tek Güçlü Panelden Kontrol Edin',
    'admin_preview_subtitle_default' => 'Kullanıcıları, sınavları, abonelikleri, geliri ve yapay zeka kullanımını büyük ölçekte yönetmek için tasarlanmış merkezi bir yönetim paneli.',
    
    'admin_stat_1_val' => '10.000+',
    'admin_stat_1_lbl' => 'Desteklenen Kullanıcı',
    
    'admin_stat_2_val' => '100%',
    'admin_stat_2_lbl' => 'Rol Tabanlı Erişim',
    
    'admin_stat_3_val' => 'Gerçek Zamanlı',
    'admin_stat_3_lbl' => 'Gelir Takibi',
    
    'admin_stat_4_val' => 'Yapay Zeka Maliyeti',
    'admin_stat_4_lbl' => 'Kullanım & Maliyet Kontrolü',
    
    'admin_feat_1_title' => 'Kullanıcı ve Rol Kontrolü',
    'admin_feat_1_desc' => 'Yöneticileri, eğitmenleri ve öğrencileri ayrıntılı izinlerle yönetin.',
    
    'admin_feat_2_title' => 'Gelir ve Abonelikler',
    'admin_feat_2_desc' => 'Ödemeleri, planları, yenilemeleri ve büyümeyi gerçek zamanlı olarak takip edin.',
    
    'admin_feat_3_title' => 'Yapay Zeka Kullanımı ve Limitler',
    'admin_feat_3_desc' => 'Yapay zeka tüketimini izleyin, limitler belirleyin ve operasyonel maliyetleri kontrol edin.',
    
    'admin_feat_4_title' => 'Sistem Yapılandırması',
    'admin_feat_4_desc' => 'Ödemeleri, e-postayı, güvenliği ve platform davranışını merkezi olarak yapılandırın.',
    
    'admin_check_1' => 'Kodlama Gerekmez',
    'admin_check_2' => 'Kurumsal Düzeyde Hazır Mimari',
    'admin_check_3' => 'Laravel 10 Üzerine İnşa Edildi',

    /*
    |--------------------------------------------------------------------------
    | CTA Bölümü
    |--------------------------------------------------------------------------
    */
    'cta_title_default' => 'Çevrimiçi Sınav İşinizi<br>Bugün Başlatın',
    'cta_subtitle_default' => 'Piyasadaki en gelişmiş yapay zeka destekli sınav scriptini edinin. Platformunuzu aylar değil, dakikalar içinde başlatın.',
    'cta_btn_primary' => 'Hemen Başlayın',
    'cta_btn_secondary' => 'Demoyu İzleyin',

    /*
    |--------------------------------------------------------------------------
    | Alt Bilgi (Footer) Bölümü
    |--------------------------------------------------------------------------
    */
    'footer_about_text_default' => 'ZiExam AI, sınavları zahmetsizce ve güvenli bir şekilde oluşturmanıza, yönetmenize ve yürütmenize yardımcı olan yapay zeka destekli bir çevrimiçi sınav platformudur.',
    'useful_links' => 'Faydalı Bağlantılar',
    'legal' => 'Yasal',
    'copyright_text' => 'Telif Hakkı © :year ZiExam AI. Tüm Hakları Saklıdır.',
    
    // Varsayılan Alt Bilgi Bağlantıları
    'home_link' => 'Ana Sayfa',
    'features_link' => 'Özellikler',
    'pricing_link' => 'Fiyatlandırma',
    'faq_link' => 'SSS',
    'privacy_policy' => 'Gizlilik Politikası',
    'terms_service' => 'Kullanım Şartları',
    'security_policy' => 'Güvenlik Politikası',
    'refund_policy' => 'İade Politikası',

    /*
    |--------------------------------------------------------------------------
    | Başlık & Navigasyon (Header)
    |--------------------------------------------------------------------------
    */
    'dashboard_btn' => 'Kontrol Paneli',
    'start_free_btn_header' => 'Ücretsiz Başla',
    'select_language' => 'Dil Seçin',
    'select_language_caps' => 'DİL SEÇİN',
    
    /*
    |--------------------------------------------------------------------------
    | Sayfalama (Pagination)
    |--------------------------------------------------------------------------
    */
    'previous' => 'Önceki',
    'next' => 'Sonraki',

    /*
    |--------------------------------------------------------------------------
    | Kullanıcı Paneli Kenar ve Üst Çubuğu
    |--------------------------------------------------------------------------
    */
    'sidebar_main_menu' => 'Ana Menü',
    'sidebar_dashboard' => 'Kontrol Paneli',
    'sidebar_my_exams' => 'Sınavlarım',
    'sidebar_results' => 'Sonuçlar',
    'sidebar_certificates' => 'Sertifikalar',
    'sidebar_account' => 'Hesap',
    'sidebar_profile' => 'Profil',
    'sidebar_transactions' => 'İşlem Geçmişi',
    'sidebar_settings' => 'Ayarlar',
    'sidebar_support' => 'Destek',
    'sidebar_tickets' => 'Destek Talepleri',
    'sidebar_logout' => 'Log Out',

    'topbar_search_placeholder' => 'Sınav, sonuç ara...',
    'topbar_go_website' => 'Web Sitesine Git',
    'topbar_select_language' => 'Dil Seçin',
    'topbar_select_language_caps' => 'DİL SEÇİN',
    'topbar_notifications' => 'Bildirimler',
    'topbar_mark_read' => 'Tümünü okundu işaretle',
    'topbar_no_notifications' => 'Yakın tarihli bildirim yok',
    'topbar_view_activity' => 'Tüm Aktiviteleri Görüntüle',
    'topbar_default_student' => 'Öğrenci',
    'topbar_my_profile' => 'Profilim',
    'topbar_menu_settings' => 'Ayarlar',
    'topbar_logout' => 'Çıkış Yap',
    'sidebar_modules' => 'Modüller',
    'results' => 'Sonuçlar',

    /*
    |--------------------------------------------------------------------------
    | Katılım Ekranı
    |--------------------------------------------------------------------------
    */
    'question_label' => 'Soru',
    'of_label' => 'of',
    'loading' => 'Yükleniyor...',
    'previous_btn' => 'Önceki',
    'next_btn' => 'Sonraki',
    'mark_review' => 'İnceleme İçin İşaretle',
    'submit_finish' => 'Gönder ve Bitir',
    'auto_save_msg' => 'Tüm cevaplar otomatik olarak kaydedildi.',
    'progress_overview' => 'İlerleme Özeti',
    'stat_answered' => 'Cevaplanan',
    'stat_marked' => 'İnceleme İçin İşaretlenen',
    'stat_remaining' => 'Kalan',
    'question_navigator' => 'Soru Gezgini',
    'confirm_submission' => 'Gönderimi Onayla',

    // --- JavaScript Dizeleri ---

    // Çekirdek Kullanıcı Arayüzü & Hatalar
    'error_no_questions' => 'Soru bulunamadı. Lütfen destek ile iletişime geçin.',
    'question_missing_text' => 'Soru metni eksik.',
    'no_options_available' => 'Kullanılabilir seçenek yok.',
    
    // Kaydetme Durumları
    'status_saving' => 'Kaydediliyor...',
    'status_saved_success' => 'Tüm cevaplar otomatik olarak kaydedildi.',
    'status_save_error' => 'Bağlantı kesildi. Yeniden bağlanmaya çalışılıyor...',

    // Süre Dolumu
    'timer_time_up_title' => 'Süre doldu!',
    'timer_time_up_text' => 'Sınavınız otomatik olarak gönderiliyor.',
    
    // Soru Doğrulama
    'validation_action_required_title' => 'Eylem Gerekli',
    'validation_answer_or_mark' => 'Lütfen devam etmeden önce bir cevap seçin VEYA bu soruyu inceleme için işaretleyin.',
    'validation_understood' => 'Anlaşıldı',

    // İşaretleme Mesajları
    'mark_unmarked_warning' => 'Sorunun işareti kaldırıldı. Daha sonra devam etmek için yanıtlamalısınız.',
    'mark_marked_info' => 'İnceleme için işaretlendi.',

    // Gönderim Kontrolleri
    'submission_pending_reviews_title' => 'Bekleyen İncelemeler',
    'submission_pending_reviews_text' => 'İnceleme için işaretlenmiş {count} sorunuz var.',
    'submission_submit_anyway' => 'Yine de Gönder',
    'submission_review_questions' => 'Soruları İncele',
    
    // Son Gönderim
    'submission_finish_title' => 'Sınavı Bitir?',
    'submission_finish_text' => 'Gönderdikten sonra cevaplarınızı değiştiremezsiniz.',
    'submission_yes_submit' => 'Evet, Gönder!',

    // Kullanıcı Sonuç Sayfası
    'overall_score' => 'TOPLAM PUAN',
    'status_passed' => 'GEÇTİ',
    'status_failed' => 'KALDI',

    // Ölçüm Etiketleri
    'metric_correct' => 'DOĞRU CEVAPLAR',
    'metric_time' => 'HARCANAN SÜRE (DK)',
    'metric_pass_percentage' => 'GEREKLİ GEÇME %',

    // Negatif Puanlama Anahtarları
    'metric_incorrect' => 'YANLIŞ CEVAPLAR',
    'metric_net_score' => 'NET PUAN',
    'metric_deducted_marks' => 'DÜŞÜLEN PUAN',
    
    // Toplam Puan Etiketi
    'metric_total_marks' => 'TOPLAM PUAN',

    // Yeni Uyarı Anahtarı
    'negative_marking_alert' => 'Negatif puanlama etkin: Yanlış cevap başına :value puan düşülecektir.',
    
    'mins' => 'Dk',
];
