<?php

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

use App\Models\Page;
use App\Models\PageSection;

$pagesData = [
    [
        'title' => 'Hakkımızda',
        'slug' => 'hakkimizda',
        'meta_title' => 'Hakkımızda - Sınav Merkezi',
        'meta_description' => 'Yapay zeka destekli sınav çözümleri sunan modern ve güvenli sınav platformu.',
        'is_published' => true,
        'sections' => [
            [
                'type' => 'hero',
                'sort_order' => 0,
                'content' => [
                    'heading' => 'Biz Kimiz?',
                    'subtext' => 'Yapay zeka destekli sınav çözümleri sunan modern ve güvenli sınav platformu.'
                ]
            ],
            [
                'type' => 'text',
                'sort_order' => 1,
                'content' => [
                    'body' => '<p><strong>Sınav Merkezi</strong>, sınav süreçlerini dijitalleştirerek daha güvenli, adil ve erişilebilir hale getirmek amacıyla kurulmuştur.</p><p>Platformumuz, en son yapay zeka teknolojilerini kullanarak sınav güvenliğini (proctoring) sağlar, otomatik değerlendirme araçlarıyla zamandan tasarruf ettirir ve detaylı analitik raporlar sunar.</p>'
                ]
            ],
            [
                'type' => 'features',
                'sort_order' => 2,
                'content' => [
                    'items' => "Yapay Zeka Destekli Gözetmenlik (Proctoring)\nAnında Sonuç Değerlendirme\nKolay Kullanım ve Mobil Uyum\nÜst Düzey Güvenlik Protokolleri"
                ]
            ]
        ]
    ],
    [
        'title' => 'Hakkımızda (Türkçe Karakterli)',
        'slug' => 'hakkımızda',
        'meta_title' => 'Hakkımızda - Sınav Merkezi',
        'meta_description' => 'Yapay zeka destekli sınav çözümleri sunan modern ve güvenli sınav platformu.',
        'is_published' => true,
        'sections' => [
            [
                'type' => 'hero',
                'sort_order' => 0,
                'content' => [
                    'heading' => 'Biz Kimiz?',
                    'subtext' => 'Yapay zeka destekli sınav çözümleri sunan modern ve güvenli sınav platformu.'
                ]
            ],
            [
                'type' => 'text',
                'sort_order' => 1,
                'content' => [
                    'body' => '<p><strong>Sınav Merkezi</strong>, sınav süreçlerini dijitalleştirerek daha güvenli, adil ve erişilebilir hale getirmek amacıyla kurulmuştur.</p><p>Platformumuz, en son yapay zeka teknolojilerini kullanarak sınav güvenliğini (proctoring) sağlar, otomatik değerlendirme araçlarıyla zamandan tasarruf ettirir ve detaylı analitik raporlar sunar.</p>'
                ]
            ],
            [
                'type' => 'features',
                'sort_order' => 2,
                'content' => [
                    'items' => "Yapay Zeka Destekli Gözetmenlik (Proctoring)\nAnında Sonuç Değerlendirme\nKolay Kullanım ve Mobil Uyum\nÜst Düzey Güvenlik Protokolleri"
                ]
            ]
        ]
    ],
    [
        'title' => 'Kullanım Şartları',
        'slug' => 'kullanim-sartlari',
        'meta_title' => 'Kullanım Şartları - Sınav Merkezi',
        'meta_description' => 'Sınav Merkezi kullanım şartları ve üyelik sözleşmesi.',
        'is_published' => true,
        'sections' => [
            [
                'type' => 'hero',
                'sort_order' => 0,
                'content' => [
                    'heading' => 'Kullanım Şartları',
                    'subtext' => 'Lütfen platformumuzu kullanmadan önce kullanım şartlarını dikkatlice okuyunuz.'
                ]
            ],
            [
                'type' => 'text',
                'sort_order' => 1,
                'content' => [
                    'body' => '<p>Sınav Merkezi platformuna üye olarak ve hizmetlerimizi kullanarak, bu sayfada belirtilen tüm şart ve koşulları kabul etmiş olursunuz.</p><ul><li>Sınav platformunu kötüye kullanamazsınız.</li><li>Hesap bilgilerinizi üçüncü şahıslarla paylaşamazsınız.</li><li>Sistem kaynaklarını aşırı tüketecek veya engelleyecek aktiviteler yasaktır.</li></ul>'
                ]
            ]
        ]
    ],
    [
        'title' => 'Gizlilik Politikası',
        'slug' => 'gizlilik-politikasi',
        'meta_title' => 'Gizlilik Politikası - Sınav Merkezi',
        'meta_description' => 'Sınav Merkezi gizlilik politikası ve kişisel verilerin korunması.',
        'is_published' => true,
        'sections' => [
            [
                'type' => 'hero',
                'sort_order' => 0,
                'content' => [
                    'heading' => 'Gizlilik Politikası',
                    'subtext' => 'Verilerinizin güvenliği bizim için en büyük önceliktir.'
                ]
            ],
            [
                'type' => 'text',
                'sort_order' => 1,
                'content' => [
                    'body' => '<p>Sınav Merkezi olarak, kullanıcılarımızın kişisel verilerinin gizliliğini korumak ve güvenliğini sağlamak için gerekli tüm teknik ve idari tedbirleri almaktır.</p><p>Platformumuz üzerinden toplanan kişisel bilgiler, yalnızca size daha iyi hizmet sunmak ve sınav süreçlerini güvenle yönetebilmek amacıyla işlenmektedir.</p>'
                ]
            ]
        ]
    ]
];

foreach ($pagesData as $pData) {
    // Check if page already exists
    $page = Page::where('slug', $pData['slug'])->first();
    if ($page) {
        echo "Page with slug '{$pData['slug']}' already exists. Updating...\n";
        $page->update([
            'title' => $pData['title'],
            'meta_title' => $pData['meta_title'],
            'meta_description' => $pData['meta_description'],
            'is_published' => $pData['is_published']
        ]);
    } else {
        echo "Creating page with slug '{$pData['slug']}'...\n";
        $page = Page::create([
            'title' => $pData['title'],
            'slug' => $pData['slug'],
            'meta_title' => $pData['meta_title'],
            'meta_description' => $pData['meta_description'],
            'is_published' => $pData['is_published']
        ]);
    }

    // Delete existing sections to overwrite
    $page->sections()->delete();

    // Create sections
    foreach ($pData['sections'] as $sec) {
        PageSection::create([
            'page_id' => $page->id,
            'type' => $sec['type'],
            'content' => $sec['content'],
            'sort_order' => $sec['sort_order']
        ]);
    }
}

echo "All pages and sections inserted successfully!\n";
