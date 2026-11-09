<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Domainnameapi Modulunun İstifadəsi üçün README (WiseCP 5)

Bu modul, WiseCP üçün 'domainnameapi.com' inteqrasiyasıdır.

## 📦 Yükləmə — həmişə Releases istifadə edin!

⬇️ **Ən son test edilmiş versiyanı buradan yükləyin: https://github.com/domainreseller/wisecp-dna-v5/releases/latest**

> ⚠️ Yaşıl **Code → Download ZIP** düyməsini **istifadə etməyin** — bu düymə xam inkişaf (development) qolunu yükləyir. Release paketləri versiyalanmış, test edilmiş və istehsalata hazırdır.

> ℹ️ Bu depo **WiseCP 5** üçündür. WiseCP 3.x istifadə edirsinizsə: https://github.com/domainreseller/wisecp-dna

## Tələblər

- WiseCP 5.
- PHP 8.2 və ya daha yüksək.

## Quraşdırma

1. Paketdəki "coremio" qovluğunu WiseCP-nin quraşdırıldığı qovluğun daxilinə atın (Məsələn: /home/wisecp/public_html). `.gitignore`, `README.md` fayllarını atmayın.
2. Qovluq strukturunun düzgün olduğundan əmin olun (Məsələn: /home/wisecp/public_html/coremio/modules/Registrars/DomainNameAPI/DomainNameAPI.php).
3. WiseCP idarəetmə panelində **Məhsullar → Domenlər → Domen Qeydiyyatçıları** ekranını açın və DomainNameAPI kartına klikləyin.
4. API məlumatlarınızı daxil edin, **Bağlantını Yoxla** ilə təsdiqləyin və yadda saxlayın.

## Yeniləmə

Yeni paketdəki "coremio" qovluğunu WiseCP-nin quraşdırıldığı qovluğa atın. Parametrləriniz paketin daxil etmədiyi `config.php` faylında saxlanılır, buna görə yeniləmə onları silmir.

## WiseCP 3.x-dən 5-ə keçid

WiseCP-nin keçid sihirbazı bu modulun parametrlərini 5-ə köçürmür. Keçiddən sonra bu paketi yükləyin və API məlumatlarınızı **Məhsullar → Domenlər → Domen Qeydiyyatçıları** ekranında yenidən daxil edin.


### API Məlumatları

1. **Reseller ID** və **API Key** məlumatlarınızı daxil edin.
2. "Yadda Saxla" düyməsinə klikləyin.

> 💡 **Reseller ID** və **API Key** məlumatlarınızı DomainNameAPI panelinizdə **API Parametrləri** bölməsində tapa bilərsiniz.
> ⚠️ Bunlar **API məlumatlarıdır** — panelə giriş məlumatlarınız burada **işləməyəcək**.

### Bağlantını Test Et

1. Bağlantını sorunsuz şəkildə qurulub-qurulmadığını yoxlamaq üçün "Bağlantını Test Et" düyməsinə klikləyin.

## Qeydlər

- Məcburi əlaqə sahəsi (ad, e-poçt, ünvan, şəhər, ölkə, poçt indeksi, telefon) boş olduqda qeydiyyat və əlaqə məlumatlarının yenilənməsi aydın bir mesajla dayanır. .tr domenləri üçün sahibin T.C. şəxsiyyət nömrəsi (fiziki şəxslər) və ya vergi idarəsi və vergi nömrəsi (şirkətlər) müştəri profilində olmalıdır.

## Xəta hesabatları (telemetriya)

API çağırışı uğursuz olduqda modul DomainNameAPI-nin öz xəta izləmə sisteminə (Sentry, `sentry.atakdomain.com`) xəta hesabatı göndərir. Uğurlu çağırışların təsadüfi seçilmiş kiçik bir hissəsi (4%, üstəlik 1 saniyədən uzun çəkən hər çağırış) performans qeydi kimi göndərilir. Bu, DomainNameAPI-yə problemləri tapıb düzəltməyə kömək edir. Xəta hesabatları **standart olaraq aktivdir**.

**Göndərilənlər:**

- xəta kodu və mesajı
- çağırılan endpoint yolu və HTTP metodu
- çağırışın müddəti
- modulun adı, kitabxananın versiyası və PHP versiyası
- reseller ID və domen adı
- serverin ictimai (public) IP ünvanı (`api.ipify.org` vasitəsilə müəyyən edilir)
- çağırışı başladan panel səhifəsinin ünvanı (URL)
- serverdəki hosting hesabının adı
- API sorğusu və cavabı, domenin əlaqə məlumatları daxil olmaqla; yalnız giriş məlumatları maskalanır — EPP/auth kodları, API açarları, parollar və tokenlər `***` ilə əvəz olunur

**Heç vaxt göndərilməyənlər:** oxunaqlı formada EPP/auth kodları, API açarları, parollar və ya tokenlər; stack trace-lərdəki funksiya çağırışı arqumentləri.

**Niyə və nə qədər müddətə:** məlumatlar yalnız istifadənin ölçülməsi və problemlərin erkən diaqnostikası üçün istifadə olunur, DomainNameAPI-nin öz Sentry serverində 30 gün saxlanılır, sonra avtomatik olaraq silinir.

**Necə söndürmək olar:** DomainNameAPI ayarlar ekranında (**Products → Domains → Service Providers**) **Telemetry & Error Reporting** ayarını söndürüb yadda saxlayın. Standart olaraq aktivdir.

## Alan TLD-lərini İçəri Aktarma

1. "Uzantıları İçəri Aktar" tabını klikləyərək domain adı uzantılarını içəri aktarın.
2. Bütün uzantılar uğurla içəri aktarılacaq.

## Alan Adlarını İçəri Aktarma

1. "İçəri Aktar" tabını klikləyərək domain adlarını içəri aktarın.
2. Siz bir siyahı görəcəksiniz. İçəri aktarmaq istədiyiniz domaini seçin və müştəriyə təyin edin, sonra "İçəri Aktar" düyməsinə klikləyin.

Bu qədər! Artıq Domainnameapi modulunu



## Qayıdış və Səhv Kodları, Təfərrüatları

| Kod  | Açıqlama                                        | Təfərrüat                                                                                                                                                                      |
|------|-------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Əmr uğurla icra edildi                                                                                                                                                         |
| 1001 | Command completed successfully; action pending. | Əmr uğurla icra edildi; amal gözlənilir                                                                                                                                        |
| 2003 | Required parameter missing                      | Tələb olunan parametr yoxdur. Məsələn; Əlaqə məlumatlarında telefon qeyd edilməməsi                                                                                            |
| 2105 | Object is not eligible for renewal              | Nəqliyyat yenilənməyə layiq deyil, yeniləmə əməliyyatları qapalıdır. "clientupdateprohibited" vəziyyət durumu olmamalıdır. Digər vəziyyət durumlarından səbəb götürə bilər     |
| 2200 | Authentication error                            | Doğrulama səhvi, təhlükəsizlik kodu yanlışdır və ya domen başqa bir qeydiyyat şirkətində mövcuddur                                                                             |
| 2302 | Object exists                                   | Domen adı və ya ad server məlumatları verilənlər bazasında mövcuddur. Qeydiyyat edilə bilməz                                                                                   |
| 2303 | Object does not exist                           | Domen adı və ya ad server məlumatları verilənlər bazasında mövcud deyil. Yeni qeydiyyat yaradılmalıdır                                                                         |
| 2304 | Object status prohibits operation               | Domen vəziyyəti əməliyyat üçün maneə törədir, yeniləmə əməliyyatları qapalıdır. Vəziyyət "clientupdateprohibited" olmamalıdır. Digər vəziyyət durumlarından səbəb götürə bilər |
