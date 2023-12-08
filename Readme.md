Kurulum için aşağıdaki komutları sırası ile yazınız.

git clone https://github.com/atalhatabak/Simple-Commerce.git

cd Simple-Commerce

composer install

npm install

php artisan storage:link 

Bağımlılıklar;

Composer, Npm, Php

Not: Veritabanı olarak sqlite kullanılıyor ve dabase klasörü içerisinde Database.sqlite olarak depolanıyor
Php sqlite eklentisini aktif hale getirmek için php.ini içerisindeki 
extension=pdo_sqlite 
satırının başındaki yorum satırı ibaresini kaldırın

Proje Hakkında
Admin panel linki /admin
giriş için admin yetkisine sahip kullanıcının giriş yapmış olması gerekiyor
Kullanıcı Bilgileri
e-posta: admin@gmail.com
şifre: testtest

![Screenshot_20231208_175958](https://github.com/atalhatabak/Simple-Commerce/assets/56918326/636f936d-6ae7-4436-82a6-b5c7d14101aa)
Login ekranı, herhangi bir işlem için zorunlu
![Screenshot_20231208_180041](https://github.com/atalhatabak/Simple-Commerce/assets/56918326/13e48c7b-0a56-4287-a9c6-73bf1716cbd6)
Ana sayfa ürünler sayfası, ürünler marka ve türüne göre bağlantı var ve bu bağlantı ile filtreleme yapılabiliyor
![Screenshot_20231208_180142](https://github.com/atalhatabak/Simple-Commerce/assets/56918326/8c75e1d1-8b95-4abc-a623-4dce3ada278c)
Türüne Göre
![Screenshot_20231208_180150](https://github.com/atalhatabak/Simple-Commerce/assets/56918326/49aa260c-153e-40b4-90b0-a3796f68cdd4)
Markasına Göre

![Screenshot_20231208_180228](https://github.com/atalhatabak/Simple-Commerce/assets/56918326/56403f21-a40c-4cd5-abd4-1270de555ae3)
Admin Paneli, Resim ekleniyor ve anlık eklenen resim görüntüleniyor. alt tarafta ürünleri listeliyor 








