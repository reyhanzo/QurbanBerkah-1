# Website QurbanBerkah untuk MPPL (laravel)
Dibuat untuk menyelesaikan tugas :v
## Catatan dan masalah deployment
1. Di MySQL cukup buat DB aja (defaultnya qurbanberkah, edit di .env kalo beda)
2. Pakai migrations, jangan buat tabel sendiri
```bash
php artisan migrate
```
3. Datanya belum ada, input juga belum bisa lewat web
4. Belum sampe buat form, tapi udah install laravelcollective/html
```bash
composer require laravelcollective/html
```
5. User auth baru install dari bawaan laravel
```bash
composer require laravel/ui --dev
php artisan ui bootstrap
```
7. DB ada 3, hewans, gambarhewans, users (bawaan laravel).
   Note: kenapa hewans bukan hewan, itu fitur dari laravel :v
   Note2: Kalo gak suka ganti di modelnya, tambahin attribute $table, selengkapnya cek [docs](https://laravel.com/docs/master/eloquent)