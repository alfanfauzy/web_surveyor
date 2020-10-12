# Web Surveyor 🛍️
---
# 📌 Features!
  - 3 Role user : Admin, Surveyor, Pengunjung
  - Admin bertugas menyetujui harga komoditas yang telah dimasukkan oleh surveyor
  - Surveyor bertugas memasukkan harga suatu komoditas di pasar dan hari tertentu
  - Pengunjung dapat mengetahui informasi harga barang yang telah di setujui oleh admin.

## ⚒️ Tech
* [Laravel](https://laravel.com/)

## 📗 Installation

Jalankan aplikasi xampp kemudian lakukan perintah _command line_ dibawah ini

```sh
$ cd xampp/htdocs/
$ git clone https://github.com/alfanfauzy/web_surveyor.git
$ cd web_surveyor
```

**// Setting file .env**
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[nama_database]
DB_USERNAME=[username_database]
DB_PASSWORD=[password_database]
```
**// Menjalankan perintah untuk create tabel**
```sh
$ php artisan migrate
```

**// Menjalankan perintah untuk run applikasi**
```sh
$ php artisan serve
```

_Aplikasi akan jalan di **localhost:8000** atau **http://127.0.0.1:8000**_

### License
----
MIT

**Free Software, Hell Yeah!**