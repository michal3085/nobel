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
-----

# PLIK .env
- [ ] Nazwa strony - w pliku .env należy określić nazwę strony która potem będzie wykorzystywana min. w mailingu:
```
APP_NAME=NOBEL
```
- [ ] Ustawiamy stronę w wersji produkcyjnej:
```
APP_ENV=production
```
- [ ] URL aplikacji - ważne aby to ustawić - aplikacja czasem bedzie z tego korzystać:
```
APP_URL=http://nobel-demo.pl
```
- [ ] konfigurujemy dane skrzynki mailowej:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.costam.pl
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME="${APP_NAME}"
```
- [ ] Konfiguracja adresu mailowego na który będą przychodzić wiadomości od użytkowników strony, np.: z formularzy kontaktowych
```
CONTACT_OFFICE_MAIL_TO='jakis@wasz.mail'
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
- --------------------
# MIGRACJA BAZY DANYCH

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
# Kilka pomocnych linków:

- [ ] do instalacji aplikacji na serwerze napisanych w frameworku Laravel korzystam z tej instrukcji:
- [d-hosting - INSTALACJA LARAVEL](https://dhosting.pl/pomoc/baza-wiedzy/jak-zainstalowac-laravel-na-serwerze/).
####
- [ ] dokumentacja Laravel - wersja aplikacji 11, najnowsza to 12:
- [Dokumentacja Laravel 11](https://laravel.com/docs/11.x).
