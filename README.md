
# MySQL Anket Uygulaması

Bu proje, kullanıcıların anketlere katılmasını ve sonuçları görüntülemesini sağlayan bir web uygulamasıdır. PHP ve MySQL kullanılarak geliştirilmiştir.

## Gereksinimler

- PHP 7.0 veya üzeri
- MySQL 5.6 veya üzeri
- Bir web sunucusu (Apache, Nginx vb.)

## Kurulum

**Depoyu klonlayın:**

    ```bash
    git clone https://github.com/kullanici_adi/mysql_anket_uygulamasi.git
    cd mysql_anket_uygulamasi
    ```

**Veritabanını oluşturun**

    
**Veritabanı bağlantısını yapılandırın:**

    `baglan.php` dosyasını açın ve veritabanı bağlantı ayarlarınızı girin:

    ```php
    <?php
    try {
        $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=AnketDB;charset=utf8", "kullanici_adi", "sifre");
    } catch (PDOException $Hata) {
        echo "Bağlantı hatası: " . $Hata->getMessage();
        die();
    }
    ?>
    ```

**Anket sorusunu ekleyin:**

    Anket sorusunu ve cevaplarını eklemek için MySQL veritabanına bir kayıt ekleyin:

    ```sql
    INSERT INTO Anket (soru, cevapbir, cevapiki, cevapuc) VALUES ('En sevdiğiniz renk nedir?', 'Kırmızı', 'Mavi', 'Yeşil');
    ```

## Kullanım

- **Anket Gösterimi:**

    `index.php` dosyasında anket sorusu ve cevapları gösterilir. Kullanıcılar cevaplarını seçip oylarını gönderebilirler.

- **Oy Gönderimi:**

    Kullanıcılar, `oyver.php` dosyasına form aracılığıyla oylarını gönderirler. Bu dosya, oylamayı işler ve veritabanına kaydeder.

- **Sonuçları Gösterme:**

    Kullanıcılar, `sonuclar.php` dosyasına giderek anket sonuçlarını görüntüleyebilirler.

## Dosyalar

- `index.php`: Anket formunu gösterir.
- `oyver.php`: Oyları işler ve veritabanına kaydeder.
- `sonuclar.php`: Anket sonuçlarını gösterir.
- `baglan.php`: Veritabanı bağlantı ayarları.


https://github.com/Deryaglmz/MySQL_AnketUygulamasi/assets/129391768/70af3554-b496-4497-bdbd-eec5470e1c04

