# NOBEL

## Instalacja

Na początku należy wykonać polecenia
```
git clone https://github.com/michal3085/nobel.git
```
- [ ] Komendy w folderze projektu
```
composer install
```
- [ ] Należy utworzyć plik .env na podstawie pliku .env.example - np.:
```
cp .env.example .env
```
```
php artisan key:generate
```
- [ ] Konfiguracja Bazy Danych w pliku .env, korzystałem z MySQL

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nobel
DB_USERNAME=root
DB_PASSWORD=
```

- [ ] Migracje i seedy
- [ ] w pliku ../database/seeders/UserTableSeeder należy utworzyć użytkowników - jest tam przykładowy użytkownik
```
DB::table('users')->insert([
            'name' => 'nobel001',
            'email' => 'nobel001@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jakiesTrudneHaslo'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
```
- [ ] Następnie komendy wykonujące migrację i seedy
```
php artisan migrate
```
```
php artisan db:seed
```
