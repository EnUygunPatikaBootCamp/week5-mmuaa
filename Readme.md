# Research

## Question 1:

- PDO, PHP Data Object (PHP Veri Nesneleri) kısaltmasıdır. PDO, desteklediği veritabanları için ortak metot ve özellikleri barındıran bir OOP sınıfıdır.

- PDO, PHP’nin OOP desteği sayesinde, PHP geliştiricileri tarafından yazılmış veritabanı işlemleri için ortak bir yapı sunar. PDO öncesinde her bir veritabanı için farklı bir fonksiyon veya eklenti kullanılıyordu (MySQL için mysql_, ODBC için odbc_, Oracle için oci_ vb.). Ancak PHP ile geliştirilen uygulamadaki veritabanı sistemin değiştirilmesiyle tüm kodların yeniden düzenlenmesi gerekir. PDO sayesinde sadece veritabanı bağlantısı parametresini yeni veritabanı sistemine göre yapılması yeterli olacaktır. PDO içerisinde bulunan ön hazırlık sorgu yapısı sayesinde SQL Injection gibi istemeyen durumlar içinde çözüm sunar.

## Question 2:

- İndeksler, bir veritabanının arka planında sorgulamayı hızlandırmak için kullanılan güçlü bir araçtır. İndexler, talep edilen verileri hızlı bir şekilde aramak için bir yöntem sağlayarak güç sorguları.

### Avantajlar

- SELECT sorgusunu hızlandırır.
- Bir satırı benzersiz veya kopyasız hale getirmeye yardımcı olur.
- İndeks dolgu-metin indeksi olarak ayarlanmışsa, büyük string değerlerine karşı arama yapabiliriz. Örneğin bir cümleden kelime bulmak vb.

### Dezavantajları

- İndeksler ek disk alanı kaplar.
- İndeksler INSERT, UPDATE ve DELETE'i yavaşlatır, ancak WHERE koşulunda indekslenmiş bir alan varsa GÜNCELLEME'yi hızlandırır. INSERT, UPDATE ve DELETE yavaşlar çünkü her işlemde indekslerin de güncellenmesi gerekir.