<?php

return [
    'name'        => 'DomainNameAPI',
    'description' => 'Popüler alan adı tescil firmalarından biri olan domainnameapi.com ile domain api üzerinden tüm alan adı işlemlerini anlık olarak sağlayabilirsiniz. Bunun için domainnameapi.com müşteri hesabı bilgilerinizi aşağıdaki alanlara tanımlayınız.',
    'fields'      => [
        'username'      => 'Bayi ID / API Kullanıcı Adı',
        'password'      => 'API Anahtarı / API Şifresi',
        'test-mode'     => 'Test Modu',
        'adp'           => 'Maliyetleri Oto Güncelle',
        'cost-currency' => 'Maliyet Para Birimi',
        'exclude'       => 'Hariç Tutulan Uzantılar',
        'balance'       => 'Bakiye',
    ],
    'desc'        => [
        'username'      => 'DomainNameAPI panelindeki API Ayarları bölümünde bulunan Bayi ID (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx) REST ile, eski tip API kullanıcı adı SOAP ile bağlanır. Panel giriş e-postanız burada çalışmaz.',
        'password'      => 'Bayi ID\'ye ait API Anahtarı ya da eski tip API kullanıcı adının şifresi. Kayıtlı değeri korumak için maskeye dokunmayın.',
        'test-mode'     => 'Test modunda işlem yapmak için aktif ediniz.',
        'adp'           => 'Maliyetleri her gün otomatik olarak çeker ve belirlediğiniz kâr oranında satış fiyatlarını tanımlar.',
        'cost-currency' => 'API\'nin para birimi göndermediği uzantı maliyetleri için kullanılacak para birimi.',
        'exclude'       => 'Hiçbir zaman içe aktarılmayacak ve güncellenmeyecek uzantılar, virgülle ayrılmış. Örn: com.tr,org.tr',
    ],
    'error1'      => 'Api bilgileri mevcut değil.',
    'error2'      => 'Domain ve uzantı bilgisi gelmedi.',
    'error8'      => 'Lütfen api bilgilerini giriniz.',
    'error10'     => 'Bir hata oluştu.',
    'error11'     => 'Firma ünvanı en az 2 kelime içermelidir.',
    'error12'     => 'Alan adı aktifleştirilmeden önce döküman ve kontrol gerekli.',
    'success1'    => 'Ayarlar Başarıyla Kaydedildi.',
];
