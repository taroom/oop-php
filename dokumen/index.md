# Konsep OOP
---
[kembali kehalaman depan](../README.md)

OOP menganggap semua adalah benda, benda memiliki atribut (seperti nama, alamat-rumah, usia, tanggal_lahir dsb) dan memiliki method (berjalan, makan, minum)

## Class
kita bisa memulai dengan menggunakan class penulisannya seperti ini

```php
class kelasku {

}
```
kode diatas adalah contoh untuk membuat sebuah class dengan nama **kelasku** 

## Instance
setelah kita membuat kelas kita bisa membuat objek dari kelas tersebut dengan cara

```php
$objek = new kelasku;
//atau
$objek = new kelasku();
```

## Modifier
adalah bagaimana atribut/method diakses, ada beberapa modifier yang dapat digunakan dalam php
* private
* protected
* public

dimana masing-masing memiliki batasannya