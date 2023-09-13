## About Project :

- Car Marketplace , buy and sell used cars 
- Login to list your car for sale 
- Login to see detailed listings
- Search desired car (desired mileage , brand , type , etc.)
- Profile Section : update name , email , password and delete account
- Manage Listings : See your listing/s where u can edit or delete them 

<hr>

## Cloning process

```bash
git clone git@github.com:lisshporta/carGarage.git

```

## Configure application 

```bash
cp .env.example .env
```

```bash
composer install
```

```bash
php artisan key:generate
```
- ↑ generate application key
```bash
php artisan storage:link
```

```bash
php artisan migrate 
```
- ↑ type yes to create db
```bash
php artisan migrate:fresh --seed
```
- ↑ this will seed the db

```bash
php artisan serve
```
- ↑ to run the application
