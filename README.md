# Basic CodeIgniter Configuration

## Folder Structure Overview

The `routes.php` file manages URL navigation. To configure routes, navigate to the `config` directory and locate `routes.php`. Then, define routes as follows:

```php
$route['abouts'] = 'welcome/demo';
$route['details'] = 'welcome/detail';
```

Here, `welcome` is the controller, while `demo` and `detail` are functions that direct requests to specific view files.

## Controller

The controller name starts with capital letters, for example, `PostController.php`. You need to define a few functions to access the page. To access the page, type:

```
localhost:8000/ControllerName/functionname
```

## Making the URL Look Pretty and Simplified

Go to the `routes.php` file in the `config` folder and add:

```php
$route['home'] = 'PageController/index';
```

Now, if we visit `localhost:8000/home`, it will redirect to the view page defined in the `index()` function of the `PageController`.

## Route That Takes Parameters

```php
$route['blog/(:any)'] = 'PageController/blog/$1';
```

## Model

A model is used for database interaction, API integration, and Google authentication.

We can write functions in a model and then call them from controllers. Private members cannot be accessed directly from a file. To use private members, call them within a function inside the file and then access that function.

We can pass parameters in the URL and retrieve them in the view model:

```php
<div class="container">
    <div class="random-text">
        <?php
            echo isset($blog_url) ? "It's your URL: " . htmlspecialchars($blog_url) : "No blog URL provided.";
        ?>
    </div>
</div>
```

The above code is in `blogView.php`, which is in the `view` folder.

```php
public function blog($blog_url = '')
{
    $data['blog_url'] = $blog_url;
    $this->load->view('blogView', $data);
}
```

The above function is in the `StudentController.php` file.

## Starting the Localhost Server

To start the localhost server, use the following command:

```sh
php -S localhost:8000
```

# View

View can't be called directly. It needs to be loaded by the controller.
