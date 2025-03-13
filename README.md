# Basic CodeIgniter Configuration

## Folder Structure Overview

The `routes.php` file manages URL navigation. To configure routes, navigate to the `config` directory and locate `routes.php`. Then, define routes as follows:

```php
$route['abouts'] = 'welcome/demo';
$route['details'] = 'welcome/detail';
```

Here, `welcome` is the controller, while `demo` and `detail` are functions that direct requests to specific view files.

