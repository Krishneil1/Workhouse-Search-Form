#Work House Advertising Agency Perth.
 ##Solution for the following test
##PHP Developer Test

###Background

Demonstrate your skills using a varied range of technologies Workhouse commonly uses.

We’ll be assessing task completeness, as well as code quality.

Send a zip of your working directory (excluding the vendor directory) when finished to tom@workhouseadvertising.com.au Include any instructions, or notes, or parts you wish to highlight. Feel free to demonstrate any additional knowledge or skills you have, where applicable to the task.

###Estimated Time

3 hours

###Skills Tested

Primary

•    PHP (Laravel)
•    jQuery/Javascript
•    HTML
•    GIT: Commit your work to a local Git repository within your working folder as you finish logical parts of the task. Include the .git folder with the zip file. Workhouse follows a commit early/commit often mantra. 

Bonus (optional)

•    Bootstrap: Use bootstrap to style the frontend section.

Tasks

API

Using the provided CSV data, create an API route using Laravel that allows the data to be searched.

The data should be converted to a database table. Provide a backup of the database within the zip, or use Laravel migrations and seeders within the project.

###The API should search on:

•    Name: Should also match on partial names
•    Bedrooms: Exact match
•    Bathrooms: Exact match
•    Storeys: Exact match
•    Garages: Exact match
•    Price: Range (between $X and $Y)

All search parameters should be optional, I should be able to search for 2 bedroom houses, or 4 bedroom and 2 bathroom houses, etc.

###The API should return JSON.

###Frontend (Search Form)

Create a basic search form that will query the API using AJAX and display the results it receives in HTML.

There should be some sort of searching indicator, a spinning icon or similar.
A message should be displayed if no results were found.

###Table Example
```
Name    	Price    Bedrooms    Bathrooms    Storeys    Garages
The Victoria    374662    	4    2    2    2
The Xavier    513268    4    2    1    2
The Como    454990    4    3    2    3
The Aspen    384356    4    2    2    2
The Lucretia    572002    4    3    2    2
The Toorak    521951    5    2    1    2
The Skyscape    263604    3    2    2    2
The Clifton    386103    3    2    1    1
The Geneva    390600    4    3    2    2

```
# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
