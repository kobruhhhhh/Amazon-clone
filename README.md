# Amazon Clone
Full Stack Amazon Clone application, made using the combination of Laravel, Vue.js, and seamlessly connected through Inertia.js. It combines the robust backend capabilities of Laravel with the dynamic and responsive frontend of Vue.js. Inertia.js facilitates smooth communication between the two, ensuring a fluid user experience. 

# Tech
## Frontend
![](https://skillicons.dev/icons?i=vue,vite,tailwind)

## Backend
![](https://skillicons.dev/icons?i=laravel,php,mysql)


## App Setup

```
composer install 

cp .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

composer require laravel/breeze --dev

php artisan breeze:install vue --inertia
```

## Create the Database
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=amazon_clone
DB_USERNAME=root
DB_PASSWORD=
```
## Migrate the Database
```
php artisan migrate

php artisan db:seed
```

### Create Publishable and Secret API key on [Stripe](https://stripe.com).

Add Secret key to **CheckoutController.php** and Publishable key to **Checkout.vue**

Add the details to **.env**

### Connect Mailtrap

Add the details to **.env**

## Development Server

Start the development backend server on `http://localhost:8000`
```
php artisan serve
```

Start the Vite development server that provides Hot Module Replacement for Laravel application on `http://localhost:5173`
```
npm i
npm run dev
```

## Application Images
