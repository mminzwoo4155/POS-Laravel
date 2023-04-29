## Install instruction:
-Step 1: Clone project.
Install composer dependencies
```
composer install
```
-Step 2: Create database.
* Create a MySQL database with the name provided inside the env file.
* Migrate database
```
php artisan migrate 
```
* Run seeder
```
php artisan db:seed
```
-Step 3: Create a storage link
```
php artisan storage:link
```
-Finally: Start local server
```
php artisan serve 
```
---Admin Login Details---

- Email: `minzwoo1234@gmail.com`
- Password: `minh1234`
