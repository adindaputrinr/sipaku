## Profil Mitra

<p align="center"><a href="https://www.instagram.com/klinikgigi_talkdent/?hl=id" target="_blank"><img src="https://drive.google.com/file/d/14xxKLrd5OCAs2MxBOhySWcqYY24hKuYS/view?usp=share_link" width="100" alt="Logo Mitra"></a></p>

Mitranya masih OTW

## Team

Team proyek 3 berasal dari kelompok 7 kelas D4RPL3 tahun 2023. yang beranggotakan:

- **[M Rizky Pratama](https://www.instagram.com/)**
- **[Bidin Wahyudin](https://www.instagram.com/)**
- **[Lusiyana](https://www.instagram.com/lusiiy.ai/)**
- **[Adinda Putri](https://www.instagram.com/adindapnry/)**

## Installation

Laravel 10.x menggunakan PHP versi 8.0. Jadi kalau belum update dulu. Lalu pastikan sudah menginstal composer.

1. Clone repository taroh ditempat yang di inginkan, bisa di download .zip atau dengan perintah git clone seperti ini


```
git clone https://github.com/adindaputrinr/sipaku.git
```

2. Masuk ke folder projek yang sudah di clone, klik kanan git bash here


lalu instal composer

```
composer install
```

3. kemudian ketik perintah 

```
code .
```
untuk membuka projek di vs code


Copy `.env.example` kemudian rename menjadi `.env`. Edit pengaturan database di file `.env`, juga masukkan perintah ini untuk mengisi `APP_KEY`

```
php artisan key:generate
```

4. Migrasi tabelnya ke database dengan perintah

```
php artisan migrate --seed
```

Lalu masukkan perintah berikut untuk insert beberapa data ke database

```
php artisan db:seed
```

5. Siap dijalankan...
```
php artisan serve
```

## Contributing

1. Jika sudah di clone, pull dulu repository ini dengan perintah berikut, supaya dapat editan terbaru

```
git init
```

```
git remote add origin https://github.com/adindaputrinr/sipaku.git
```

```
git pull https://github.com/adindaputrinr/sipaku.git
```

2. Edit projek sesuai keinginan
3. Kalau sudah diedit, push kembali seperti perintah berikut

```
git add .
```

```
git commit -m "pesan perubahan"
```

```
git push origin master
```


## Kelompok 7 - D4RPL3 - 2023as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
