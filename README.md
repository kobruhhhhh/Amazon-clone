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


![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/68f6dac8-137e-4a56-ac51-53c161929ec1)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/b4478941-b48a-4717-adee-9aee607bfe3c)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/e1edcf62-d979-487d-aa29-9517f20c5157)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/da590033-487c-4ccc-86e5-8f3c006bcf77)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/dc53b331-1b6a-4cf0-9ad6-19f47647eb2a)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/fff76ab5-3996-4741-9b68-44e3a28875c1)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/e57d4edc-0d19-4fe6-9c76-7222080a2771)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/98c3cb9a-4465-482f-9bf3-703b89a1bcc1)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/f9b469ff-bd83-4a39-bb54-722e032e6d2b)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/b5fb0413-b6d4-4ff1-b864-26a7bfa0e9bf)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/3629368f-6062-47df-8383-ea2a3535a858)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/ae931169-49f7-468b-a5b1-a77d3986b10e)

![image](https://github.com/kobruhhhhh/Amazon-clone/assets/77445506/a1c3986a-ddf6-43c9-bbbd-84288a9c400e)
