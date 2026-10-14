<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# دليل استخدام وحدة Domainnameapi (WiseCP 5)

هذه الوحدة هي تكامل 'domainnameapi.com' لـ WiseCP

## 📦 التنزيل — استخدم دائماً صفحة الإصدارات (Releases)!

⬇️ **احصل على أحدث نسخة مختبَرة من هنا: https://github.com/domainreseller/wisecp-dna-v5/releases/latest**

> ⚠️ **لا** تستخدم الزر الأخضر **Code → Download ZIP** — فهو يقوم بتنزيل فرع التطوير الخام. حزم الإصدارات مرقّمة ومختبَرة وجاهزة للاستخدام الفعلي.

> ℹ️ هذا المستودع مخصص لـ **WiseCP 5**. إذا كنت تستخدم WiseCP 3.x فاستخدم: https://github.com/domainreseller/wisecp-dna

## المتطلبات

- WiseCP 5.
- PHP 8.2 أو أحدث.

## التثبيت

1. انسخ مجلد "coremio" من الحزمة إلى المجلد الذي تم تثبيت WiseCP فيه (مثال: /home/wisecp/public_html). لا تقم بتضمين ملفي `.gitignore` و `README.md`.
2. تأكد من صحة بنية المجلدات (مثال: /home/wisecp/public_html/coremio/modules/Registrars/DomainNameAPI/DomainNameAPI.php).
3. في لوحة إدارة WiseCP افتح **المنتجات ← النطاقات ← مسجلو النطاقات** وانقر على بطاقة DomainNameAPI.
4. أدخل بيانات API الخاصة بك، وتحقق منها عبر **اختبار الاتصال**، ثم احفظ.

## التحديث

انسخ مجلد "coremio" من الحزمة الجديدة إلى مجلد تثبيت WiseCP. تُحفظ إعداداتك في الملف `config.php` الذي لا تتضمنه الحزمة، لذلك لا يحذفها التحديث أبداً.

## الانتقال من WiseCP 3.x إلى 5

لا ينقل معالج الترحيل في WiseCP إعدادات هذه الوحدة إلى الإصدار 5. بعد الترقية، ارفع هذه الحزمة وأدخل بيانات API مرة أخرى في **المنتجات ← النطاقات ← مسجلو النطاقات**.


### بيانات اعتماد API

1. أدخل **Reseller ID** و **API Key** الخاصين بك.
2. انقر فوق زر "حفظ".

> 💡 ستجد **Reseller ID** و **API Key** في لوحة DomainNameAPI الخاصة بك ضمن قسم **إعدادات API**.
> ⚠️ هذه **بيانات اعتماد API** — بيانات تسجيل الدخول إلى اللوحة **لن تعمل** هنا.

### اختبار الاتصال

1. انقر على زر "اختبار الاتصال" للتحقق مما إذا كان الاتصال قد تم بنجاح.

## استيراد TLD للنطاقات

1. انقر على علامة التبويب "استيراد TLD" لاستيراد امتدادات أسماء النطاق.
2. سيتم استيراد جميع الامتدادات بنجاح.

## استيراد أسماء النطاقات

1. انقر على علامة التبويب "استيراد" لاستيراد أسماء النطاقات.
2. ستظهر لك قائمة بالنطاقات المتاحة. حدد النطاق الذي ترغب في استيراده وقم بتعيينه للعم


## الرموز المرجعية ورموز الأخطاء مع الشروحات

| الكود | الشرح                                           | التفاصيل                                                                                                                                                               |
|-------|-------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000  | Command completed successfully                  | تمت العملية بنجاح                                                                                                                                                      |
| 1001  | Command completed successfully; action pending. | تمت العملية بنجاح؛ إلا أن هناك إجراء قيد الانتظار.                                                                                                                     |
| 2003  | Required parameter missing                      | معلومة مفقودة مطلوبة. مثال؛ عدم تقديم معلومات الهاتف في بيانات الاتصال.                                                                                                |
| 2105  | Object is not eligible for renewal              | الكائن غير مؤهل للتجديد، تم قفل عمليات التحديث عليه. يجب ألا يكون حالة الكائن "clientupdateprohibited". قد تنجم هذه المشكلة عن حالات أخرى.                             |
| 2200  | Authentication error                            | خطأ في المصادقة، الرمز الأماني غير صحيح أو النطاق مسجل في شركة تسجيل أخرى.                                                                                             |
| 2302  | Object exists                                   | اسم النطاق أو معلومات خادم الأسماء موجودة بالفعل في قاعدة البيانات. لا يمكن تسجيلها.                                                                                   |
| 2303  | Object does not exist                           | اسم النطاق أو معلومات خادم الأسماء غير موجودة في قاعدة البيانات. يجب إنشاء تسجيل جديد.                                                                                 |
| 2304  | Object status prohibits operation               | حالة النطاق تمنع العملية. النطاق غير مؤهل للتحديث، تم قفل عمليات التحديث عليه. حالة النطاق لا يجب أن تكون "clientupdateprohibited". قد تنجم هذه المشكلة عن حالات أخرى. |
