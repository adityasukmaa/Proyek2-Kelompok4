## Default Account for testing

**Admin Default Account**

- email: admin@gmail.com
- Password: 12345678

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/adityasukma/Proyek2-Kelompok4.git
cd Proyek2-Kelompok4
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```
