<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Running this project Laravel

1. clone repository to local environment
2. make sure to run npm install
3. make sure you have a local database with the name of: cmtest
4. run php artisan migrate
5. run php artisan server and visit on http://127.0.0.1:8000/ or whichever url it suggested

## Thought Process

I started off by thinking about how could I approach this problem using Laravel. On  a sheet of paper, I drew out the diagram, flow and DB items I would need, and also how the overall application should work. I then made a new Laravel project, where I set up the Models, Controllers, and Migrations. 

So when I was at this point, I wanted to make separate tables for Categories and Sellers, so that we can define a many-to-many relationship between both models and have a pivot table saving the records. I was able to get the relationship established, but I ran into an issue later working on the form. I wasn't able to get the record saved for a Seller that chose a Category. I spent a bit of time working through some issues here, so I did a rollback on the migrations to remove that relationship and just add a category column into Seller table. While implementing Vue for the front-end SPA that would handle the form. I also ran into some issues dealing with building out a Vue form, I would have needed some extra time to work on implementing vuex to handle state and also work through building out a dynamic form. Instead I found a resource online that handled a multi-step form using built in blade files, which looked cleaner and could possibly implement much faster.

As I transitioned to the blade file form approach, everything started working together. I was able to make sure the data for seller was stored in a local session variable. The data persisted correctly across both pages of the form and stored the record. I do have a validation checking if a user already made an account, it just uses the built in validation unique key to check table for any previous record with the first name. Once I got the entire form submitting properly, I worked on the final design updates but I did run into some issues with the radio buttons so i just left them all as dropdowns. I would need some extra time to get the color matching up, and also being able to retrieve the correct value from that input group and stored properly. 

Overall this project took about 4 hours. 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
