## QuizApp
A laravel based QuizApp


## Installation


```
git clone repo
cp .env.example .env
#Setup database 

#Seed will create 1 super-admin, 1 admin and initial quotes loaded to database, spatie initial roles and permissions.

php artisan migrate:fresh --seed

php artisan key:generate

```

```
Login with below users and create some Sections->Questions 

Username: superadmin@admin.com / admin@admin.com
Password: adminadmin
```


```
Register a new user and login -> Take a Quiz

```
## License

The QuizApp is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
