# SISTEM INFORMASI GEOGRAFIS MANGROVE KABUPATEN GRESIK

## Deskripsi

Sistem informasi geografis ini memberikan informasi mengenai perubahan kerapatan mangrove dan luasannya serta hubungan kerapatan mangrove dengan sampel parameter air dan tanah berupa pH air, salinitas air, kadar air tanah, nitrogen (N) tanah, jenis tanah pasir, jenis tanah lanau dan jenis tanah lempung. Informasi ini dapat dijadikan sebagai bahan pertimbangan dalam upaya pencegahan dan penanggulangan kerusakan ekosistem hutan mangrove di wilayah Kabupaten Gresik.

## Teknologi yang Digunakan

1. Bootstrap jQuery
2. Laravel
3. PostgreSQL

## Tutorial Setup

1. Pastikan sudah terinstall composer untuk menginstall dependecies Laravel. Kalau sudah, ketik pada terminal :
    ```
    composer install
    ```

2. Selanjutnya, buat duplikat file **.env.example** menjadi file **.env**. Bisa dengan cara manual atau dengan mengetik pada terminal :
    ```
    cp .env.example .env
    ```
   
3. Generate app key yang terenkripsi ke file **.env** dengan cara mengetik pada terminal :
    ```
    php artisan key:generate
    ```
   
4. Buat database baru, kosongan, tanpa isi.
   
5. Modifikasi *DB_HOST*, *DB_PORT*, *DB_DATABASE*, *DB_USERNAME*, dan *DB_PASSWORD* pada file **.env** sesuai database yang telah dibuat.
   
6. Migrasikan database dengan mengetik pada terminal :
    ```
    php artisan migrate
    ```
    
7. Setelah itu program dapat dijalankan dengan mengetik pada terminal :
    ```
    php artisan serve
    ```
