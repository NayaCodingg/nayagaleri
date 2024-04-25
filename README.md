# Website Galeri YULIANA MAURANI

## ABOUT WEBSITE  

Aplikasi Web Galeri yang dibuat sederhana untuk public

## FITUR  
- login.
- create account.
- logout.
- add album.
- upload foto.
- add comment.
- like dll.

## TAMPILAN WEBSITE
![pict 1](https://github.com/NayaCodingg/nayagaleri/assets/154432523/638b8462-4153-455f-ae69-6ae7410fb3bf)
![pict 2](https://github.com/NayaCodingg/nayagaleri/assets/154432523/5a7cf1f6-cab4-4b39-b113-2515e835fe77)
![pict 3](https://github.com/NayaCodingg/nayagaleri/assets/154432523/7ea29aa9-19bd-45b2-aa3b-8edfa349d6ff)
![pict 4](https://github.com/NayaCodingg/nayagaleri/assets/154432523/77187d14-8fa6-41a2-a7a9-733ff38b63bf)
![pict 5](https://github.com/NayaCodingg/nayagaleri/assets/154432523/17ef8518-f0e9-4ef8-b3a7-5355c7e0dd22)

## ERD, Relasi dan UML Use Case

'ERD'
![pict 0](https://github.com/NayaCodingg/nayagaleri/assets/154432523/8adbb377-3b95-4d1e-9744-824de2fb05fa)

'RELASI'
![pict lol](https://github.com/NayaCodingg/nayagaleri/assets/154432523/84c4e7ca-d8e1-4d1d-aa68-96cd12cce3f9)

'UML USE CASE'
![WhatsApp Image 2024-04-26 at 00 50 47_8f1d2e79](https://github.com/NayaCodingg/nayagaleri/assets/154432523/447f7891-f982-4f8e-a9b5-44cfd5a0ea0d)


## INSTALASI

#### 1. Clone Repositori
``` http
https://github.com/NayaCodingg/nayagaleri.git
```
#### 2. Install Composer / Update Composer
``` http
composer install
```

``` http
composer update
```
#### 3. Edit Database .env
``` http
DB_PORT=3306
DB_DATABASE=gallery
DB_USERNAME=root
DB_PASSWORD=
```
#### 4. Generate Key | Terminal
``` http
php artisan key:generate
```
#### 5. Running Migrate & Seeder
``` http
php artisan migrate --seed
```
#### 6. Create Storage Link
``` http
php artisan storage:link
```
#### 7. Run the Server
``` http
php artisan serve
```


The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
