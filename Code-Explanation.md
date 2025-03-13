# CodeIgniter Routing: Understanding Wildcards

## Defining a Dynamic Route
```php
$route['blog/(:any)'] = 'PageController/blog/$1';
```

## Explanation
### `blog/(:any)`
- This means that any URL starting with `blog/` followed by any value will be matched.
- `(:any)` is a wildcard that captures any characters after `blog/` (except `/`).

### `PageController/blog/$1`
- `PageController` is the controller handling the request.
- `blog` is the method inside `PageController` that will be executed.
- `$1` is a placeholder for the captured value from `(:any)`, meaning it will be passed as a parameter to the `blog` function.

## Example URLs and Behavior
- `localhost:8000/blogshow/my-first-post` → Calls `route['blogshow'] = 'PageController/blog'`, and `my-first-post` will be caught by the placeholder `$1`.
- `example.com/blog/hello-world` → Calls `PageController::blog('hello-world')`.

## Other Wildcards in CodeIgniter
- `(:any)` → Matches any characters except `/`
- `(:num)` → Matches only numbers
- `(:alpha)` → Matches only alphabetic characters
- `(:alphanum)` → Matches alphanumeric characters

This allows for flexible and clean URLs without needing explicit controller-function-parameter mappings.
