<?php

return [
    'save'        => 'Değişiklikleri Kaydet',
    'save_config' => 'Yapılandırmayı Kaydet',
    'generate_now' => 'Site Haritasını Şimdi Oluştur',

    'alerts' => [
        'remove_title'       => 'Afiş Kaldırılsın mı?',
        'remove_text'        => 'Bu işlem, kaydetme sırasında mevcut SEO afişini kaldıracak.',
        'yes_remove'         => 'Evet, Kaldır',
        'cancel'             => 'İptal',
        'invalid_group'      => 'Geçersiz ayarlar grubu.',
        'updated_success'    => 'SEO ayarları başarıyla güncellendi.',
        'sitemap_generated'  => 'Site haritası başarıyla oluşturuldu.',
        'sitemap_failed'     => 'Site haritası oluşturulamadı: :error',
        'sitemap_not_found'  => 'Site haritası dosyası bulunamadı. Lütfen önce oluşturun.',
    ],

    'defaults' => [
        'desc'     => 'En iyi yapay zeka destekli değerlendirme ve öğrenme platformu.',
        'keywords' => 'sınav, yapay zeka, değerlendirme, öğrenme',
    ],

    'config' => [
        'title'             => 'SEO Yapılandırması',
        'desc'              => 'Meta etiketlerini, sosyal paylaşım görsellerini ve analitik takibini yapılandırın.',
        'meta_title'        => 'Meta Etiketler ve Görseller',
        'meta_desc'         => 'Sitenizin arama sonuçlarında ve sosyal medyada nasıl görüneceğini optimize edin.',
        'meta_title_label'  => 'Meta Başlık (Maks 60 karakter)',
        'meta_title_ph'     => 'ör. ZiExam AI - Öğrenme Platformu',
        'meta_desc_label'   => 'Meta Açıklama (Maks 160 karakter)',
        'meta_desc_ph'      => 'Sitenizin içeriğinin kısa bir özeti.',
        'keywords_label'    => 'Anahtar Kelimeler (Virgülle Ayrılmış)',
        'keywords_ph'       => 'anahtar, kelimeler, virgülle, ayrılmış',

        'analytics_title'   => 'Analitik ve Doğrulama',
        'ga_label'          => 'Google Analytics Takip Kimliği',
        'ga_ph'             => 'UA-XXXXXXXXX-Y veya G-XXXXXXXXX',
        'ga_help'           => 'Google Analytics/GA4 Ölçüm Kimliğinizi girin.',

        'banner_title'      => 'Sosyal Paylaşım Afişi',
        'banner_help'       => 'Önerilen Boyut: 1200x630px. OpenGraph / Twitter Cards için kullanılır.',
        'delete_banner_title' => 'Mevcut afişi sil',
        'no_banner'         => 'Afiş yüklenmemiş.',
    ],

    'sitemap' => [
        'title'          => 'Site Haritası Yapılandırması',
        'desc'           => 'Arama motoru taramalarını kontrol edin ve site haritası XML dosyasını yönetin.',
        'crawling_title' => 'Tarama Kuralları',
        'crawling_desc'  => 'Botların site yapınızla nasıl etkileşime geçeceğini tanımlayın.',
        'robots_label'   => 'Robots Meta Etiketi',
        'robots_options' => [
            'index_follow'    => 'İndeksle ve Takip Et (Varsayılan)',
            'noindex_follow'  => 'İndeksleme, Ancak Takip Et',
            'index_nofollow'  => 'İndeksle, Ancak Takip Etme',
            'noindex_nofollow' => 'Ne İndeksle Ne Takip Et',
        ],
        'robots_help'    => 'Site genelindeki indeksleme davranışını kontrol eder.',

        'status_title'   => 'Site Haritası Durumu',
        'file_url'       => 'Dosya URL\'si:',
        'last_gen'       => 'Son Oluşturulma:',
        'never'          => 'Hiçbir Zaman',
        'download_xml'   => 'XML\'i İndir',
        'info_text'      => '<strong>sitemap.xml</strong> dosyası, arama motorlarının sayfalarınızı keşfetmesine yardımcı olur. Oluşturduktan sonra yukarıdaki tam URL\'yi Google Search Console\'a gönderin.',
    ],
];
