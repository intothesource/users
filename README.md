# Users
User manager with roles (single and multiple)

## Install
```bash
composer require intothesource/users
```

This package also uses the [Entrance package](https://github.com/intothesource/entrance), for more information about that package go to that repositorie.

## After install

#### ServiceProvider
Add the following line to "config/app.php"

at "providers":

```bash
IntoTheSource\Users\UsersServiceProvider::class,
Illuminate\Html\HtmlServiceProvider::class,
```

And at "aliases":

```bash
'Form'      => Illuminate\Html\FormFacade::class,
'HTML'      => Illuminate\Html\HtmlFacade::class,
```

#### Creating the files
Run the following command:

```bash
php artisan vendor:publish
```

#### Migration

Run the command: 
```bash
php artisan migrate
```

#### Database Seed

If you want to at basic roles do the following thinks.

Add to your 'DatabseSeeder.php' file in the 'database/seeds' folder
```bash
$this->call(RoleTableSeeder::class);
$this->call(RoleUserTableSeeder::class);
```

After that run the next command:
```bash
php artisan db:seed
```
