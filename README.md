# Basic CodeIgniter Configuration

## Folder Structure Overview

The `routes.php` file manages URL navigation. To configure routes, navigate to the `config` directory and locate `routes.php`. Then, define routes as follows:

```php
$route['abouts'] = 'welcome/demo';
$route['details'] = 'welcome/detail';
```

Here, `welcome` is the controller, while `demo` and `detail` are functions that direct requests to specific view files.

## Controller
The controller name starts with capital letters. for example `PostController.php`. You need to define few functions to access the page. In order to access the page you need to type `localhost:8000/ContorllerName/functionname`

## Making the url look pretty and simplified 
Go to the route in config folder, `$route['home']='PageController/index'`
so, if we hit the url localhost:8000/home , it will redirect to the view page that defines in the index() function in PageControl controller

## Route that takes parameter
`$route['blog/(:any)'] = 'PageController/blog/$1';`




|| starting off the localhost by writing the code `php -S localhost:8000` ||
