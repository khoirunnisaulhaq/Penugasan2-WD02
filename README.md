# Konfigurasi Sistem Website Poliklinik

## Login Sebagai Admin
Login admin dilakukan melalui halaman login dokter, dengan rincian:
- **Username**: admin
- **Password**: admin

## Login Sebagai Dokter
Login dokter dilakukan melalui halaman login dokter, menggunakan nama dokter yang sudah diinput oleh admin:
- **Username**: nama (nama dokter)
- **Password**: nama (nama dokter)

## Login Sebagai Pasien
Login pasien dan pendaftaran pasien dilakukan melalui halaman login pasien, menggunakan nama pasien dan password yang sudah terdaftar:
- **Username**: nama (nama pasien)
- **Password**: (password yang diinput saat pendaftaran pasien baru)

## Database
- Database dapat ditemukan di folder "db" dengan nama database: **poliklinik**.

## Cara Running
- **buat folder di xampp/htdocs/Penugasan13611**
- **git clone https://github.com/khoirunnisaulhaq/Penugasan2-WD02.git di folder Penugasan13611**
- **aktifkan MySQL pada aplikasi xampp**
- **lalu import database ke [localhost](http://localhost/phpmyadmin)**
- **buat nama database sesuai dengan "poliklinik" dalam folder db**
- **lalu run localhost dan folder yang dituju semisalkan http://localhost/Penugasan13611/**
