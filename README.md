## About project

This project is used to ...

### Dev install

```
git clone git@github.com:suvorovis/quinta.git quinta -b develop
cd quinta

composer install
npm install
npm run dev

cp .env.example .env
php artisan key:generate
php artisan migrate

nano .env
```

If you want to setup phpstorm helper, do the follow:

```
cp vendor/barryvdh/laravel-ide-helper/config/ide-helper.php config/ide-helper.php
```
Set 'write_eloquent_model_mixins', 'include_fluent' options to true
```
php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models
php artisan ide-helper:eloquent
```

If you want to setup debug tool, do the follow:

```
php artisan telescope:publish
php artisan migrate
```
