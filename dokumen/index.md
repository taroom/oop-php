# Konsep OOP
---
* [kembali kehalaman depan](../README.md) 
* [inheritance](child.md)
* [abstraksi](abstraction.md)
* [trait](trait.md)

OOP menganggap semua adalah benda, benda memiliki atribut (seperti nama, alamat-rumah, usia, tanggal_lahir dsb) dan memiliki method (berjalan, makan, minum)

## Class (membuat blueprint)
kita bisa memulai OOP dengan menggunakan class penulisannya seperti ini

```php
class kelasku {

}
```
kode diatas adalah contoh untuk membuat sebuah class dengan nama **kelasku**, bisa kita analogikan bahwa kelas adalah semacam stempel di dunia nyata, cukup satu kali membuat stempel kita bisa membuat banyak kopian (objek) dari stempel tersebut

## Instance (membuat objek)
setelah kita membuat kelas kita bisa membuat objek dari kelas tersebut dengan cara

```php
$objek = new kelasku;
//atau
$objek = new kelasku();
```

## Modifier
adalah bagaimana atribut/method diakses, ada beberapa modifier yang dapat digunakan dalam php
* private (hanya bisa diakses didalam kelas saja)
* protected (sama seperti private, namun ikut terwarisi ketika kelas lain meng-extend)
* public (bisa diakses dimana saja, baik diluar kelas maupun didalam kelas)

dimana masing-masing memiliki batasannya, contoh penggunaan : [class.php](../demo/class.php)

hasil :

![class.php demo](../pic/as.png)

reference :
* [https://www.w3schools.com/php/php_oop_access_modifiers.asp]