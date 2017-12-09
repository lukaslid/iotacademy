# iotacademy

## Installing project
```
git clone https://github.com/lukaslid/iotacademy.git
```
## Setup Database
# Create database "teltonika"
# Migrate tables
```
php artisan migrate:install
php artisan migrate
```
# Seed database
```
php artisan db:seed --class=CountriesTableSeeder
php artisan db:seed --class=CitiesTableSeeder
```
