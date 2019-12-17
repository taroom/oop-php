[kembali ke beranda](index.md)
## Inheritance
adalah proses penurunan gen (dalam kehidupan nyata) contohnya : kelas B mewarisi kelas A, maka kelas B mempunyai atribut dan method yang dimiliki oleh kelas A, kecuali jika method dan atribut dari kelas A modifiernya adalah private, yang mana tidak ikut terwariskan ke kelas B. Hubungan inherit ini harus melambangkan object apa yang sedang dibuat

## Extends
cara untuk mewarisi kelas sangat sederhana kita tinggal menambahkan **extends** di belakang nama kelas. contoh :

```php
class kelasB extends kelasA {

}
```

dengan begitu maka kelas B sudah mewarisi kelas A
hasil contoh penggunaan : [inherit.php](../demo/inherit.php)

![class.php demo](../pic/as.png)

## Construct

## Destruct

## Override
adalah kondisi dimana atribut dan method dari kelas asal diganti di kelas baru

## 'final'
adalah kondisi dimana atribut dan method dari kelas awal tidak dapat digantikan di kelas baru, karena kata kunci final ini

## 'static'
adalah kondisi dimana atribut dan method dari kelas dapat diakses secara langsung tanpa perlu membuat objek terlebih dahulu [**Lihat pada bagian instance**](index.md#instance-membuat-objek)

## Constant


