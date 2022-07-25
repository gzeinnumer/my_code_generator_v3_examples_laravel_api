# my_code_generator_v3_examples_laravel_api

## Start From New Project?

- Create Project
```
composer create-project laravel/laravel your_project_name
```

- Make new database `your_database`.
```
CREATE DATABASE databasename;
```

- Setup `.env`.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

- Start Server
```
php artisan serve
```

- Try
```
http://localhost:8000/
```

---

## Start From This Repo

- Just clone it. 
- make database `my_code_generator_v3_examples_laravel_api`.
- Import Database from file.
  - file name `my_code_generator_v3_examples_laravel_api.sql`.
- Setup `.env`.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_code_generator_v3_examples_laravel_api
DB_USERNAME=root
DB_PASSWORD=
```
- And run this code in terminal

```
composer install --ignore-platform-reqs
```
Or
```
composer update --ignore-platform-reqs
```

- Generate Key
```php
php artisan key:generate
```

- Start Server
```php
php artisan serve
```

- Try
```
http://localhost:8000/
```

---

```
Copyright 2022 M. Fadli Zein
```