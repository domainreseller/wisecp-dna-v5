<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Domainnameapi Modülü (WiseCP 5)

Bu modül, WiseCP için geliştirilmiş bir 'domainnameapi.com' entegrasyonudur.

## 📦 İndirme — her zaman Releases kullanın!

⬇️ **En güncel ve test edilmiş sürümü buradan indirin: https://github.com/domainreseller/wisecp-dna-v5/releases/latest**

> ⚠️ Yeşil **Code → Download ZIP** düğmesini **kullanmayın** — bu düğme ham geliştirme dalını indirir. Release paketleri sürümlenmiş, test edilmiş ve canlı kullanıma hazırdır.

> ℹ️ Bu depo **WiseCP 5** içindir. WiseCP 3.x kullanıyorsanız: https://github.com/domainreseller/wisecp-dna

## Gereksinimler

- WiseCP 5.
- PHP 8.2 ve üzeri.

## Kurulum

1. İndirdiğiniz paketteki "coremio" klasörünü WISECP kurulu olduğu klasörün içine atın. (Örnek: /home/wisecp/public_html) `.gitignore`, `README.md` dosyalarını atmayın.
2. Klasör yapısının doğru olduğundan emin olun. (Örnek: /home/wisecp/public_html/coremio/modules/Registrars/DomainNameAPI/DomainNameAPI.php)
3. WiseCP yönetim panelinde **Ürünler → Alan Adları → Servis Sağlayıcılar** ekranını açın ve DomainNameAPI kartına tıklayın.
4. API bilgilerinizi girip **Bağlantıyı Test Et** ile doğrulayın, ardından kaydedin.

## Güncelleme

Yeni paketteki "coremio" klasörünü WISECP kurulu olduğu klasörün içine atın. Ayarlarınız `config.php` dosyasında durur ve paket bu dosyayı içermez, bu yüzden güncelleme ayarlarınızı silmez.

## WiseCP 3.x'ten 5'e Geçiş

WiseCP'nin geçiş sihirbazı bu modülün ayarlarını 5'e taşımaz. Geçişten sonra bu paketi yükleyin ve API bilgilerinizi **Ürünler → Alan Adları → Servis Sağlayıcılar** ekranında yeniden girin.


### API Bilgileri

1. **Bayi ID (Reseller ID)** ve **API Anahtarı (API Key)** bilgilerinizi girin.
2. "Kaydet" düğmesine tıklayın.

> 💡 **Reseller ID** ve **API Key** bilgilerinizi DomainNameAPI panelinizde **API Ayarları** bölümünde bulabilirsiniz.
> ⚠️ Bunlar **API bilgileridir** — panele giriş bilgileriniz (e-posta vb.) burada **ÇALIŞMAZ**.

### Bağlantıyı Test Etme

1. "Bağlantıyı Test Et" düğmesine tıklayarak bağlantının sorunsuz bir şekilde kurulup kurulmadığını kontrol edin.

## Notlar

- Zorunlu bir iletişim alanı (ad, e-posta, adres, şehir, ülke, posta kodu, telefon) eksik olduğunda kayıt ve iletişim bilgisi güncellemeleri açık bir mesajla durur. .tr alan adlarında, alan adı sahibinin T.C. kimlik numarası (bireysel) ya da vergi dairesi ve vergi numarası (kurumsal) müşteri profilinde bulunmalıdır.

## Hata raporlama (telemetri)

Bir API çağrısı başarısız olduğunda modül, DomainNameAPI'nin kendi hata takip sistemine (Sentry, `sentry.atakdomain.com`) bir hata raporu gönderir. Başarılı çağrıların rastgele seçilen küçük bir kısmı (%4, ayrıca 1 saniyeden uzun süren her çağrı) performans kaydı olarak gönderilir. Bu, DomainNameAPI'nin sorunları bulup düzeltmesine yardımcı olur. Hata raporlama **varsayılan olarak açıktır**.

**Gönderilenler:**

- hata kodu ve mesajı
- çağrılan uç nokta yolu ve HTTP yöntemi
- çağrı süresi
- modül adı, kütüphane sürümü ve PHP sürümü
- bayi kimliği (Reseller ID) ve alan adı
- sunucunun genel (public) IP adresi (`api.ipify.org` üzerinden öğrenilir)
- çağrıyı tetikleyen panel sayfasının adresi (URL)
- sunucudaki hosting hesap adı
- API isteği ve yanıtı, alan adının kişi bilgileri dahil; yalnızca kimlik bilgileri maskelenir — EPP/transfer kodları, API anahtarları, parolalar ve token'lar `***` ile değiştirilir

**Asla gönderilmeyenler:** okunabilir biçimde EPP/transfer kodları, API anahtarları, parolalar veya token'lar; hata izlerindeki (stack trace) fonksiyon çağrısı argümanları.

**Neden ve ne kadar süre:** veriler yalnızca kullanım ölçümü ve sorunların erken teşhisi için kullanılır; DomainNameAPI'nin kendi Sentry sunucusunda 30 gün saklanır, ardından otomatik olarak silinir.

**Nasıl kapatılır:** DomainNameAPI ayar ekranında (**Ürünler → Alan Adları → Servis Sağlayıcılar**) **Hata Raporlama** ayarını kapatıp kaydedin. Varsayılan olarak açıktır.

## Alan TLD'lerini İçeri Aktarma

1. "Uzantıları İçeri Aktar" sekmesine tıklayarak alan adı uzantılarını içeri aktarın.
2. Tüm uzantılar başarıyla içeri aktarılacaktır.

## Alan Adlarını İçeri Aktarma

1. "İçeri Aktar" sekmesine tıklayarak alan adlarını görüntüleyin.
2. Listede görünen domainleri göreceksiniz. İçeri aktarmak istediğiniz domaini istediğiniz müşteriye eşitleyin ve "İçeri Aktar" düğmesine tıklayın.

Bu kadar! Artık Domainnameapi modülünü WiseCP'de başarıyla kullanabilirsiniz.

## Dönüş ve Hata Kodları ile Açıklamaları

| Kod  | Açıklama                                        | Detay                                                                                                                                                                         |
|------|-------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | İşlem başarılı.                                                                                                                                                               |
| 1001 | Command completed successfully; action pending. | İşlem başarılı. Fakat işlem şu an tamamlanmak için kuyruğa alındı.                                                                                                            |
| 2003 | Required parameter missing                      | Parametre eksik hatası. Örneğin; Kontak bilgisinde telefon girişi yapılmaması.                                                                                                |
| 2105 | Object is not eligible for renewal              | Domain durumu yenilemeye müsait değil, güncelleme işlemlerine kilitlenmiştir. Durum durumu "clientupdateprohibited" olmamalı. Diğer durum durumlarından kaynaklanabilir.      |
| 2200 | Authentication error                            | Yetki hatası, güvenlik kodu hatalı veya domain başka bir kayıt firmasında bulunuyor.                                                                                          |
| 2302 | Object exists                                   | Domain adı veya name server bilgisi veritabanında mevcut. Kayıt edilemez.                                                                                                     |
| 2303 | Object does not exist                           | Domain adı veya name server bilgisi veritabanında mevcut değil. Yeni kayıt oluşturulmalı.                                                                                     |
| 2304 | Object status prohibits operation               | Domain durumu güncellemeye müsait değildir, güncelleme işlemlerine kilitlenmiştir. Durum durumu "clientupdateprohibited" olmamalı. Diğer durum durumlarından kaynaklanabilir. |



