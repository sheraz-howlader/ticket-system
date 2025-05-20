<?php
class Route {
    private static $routes = [];

    public static function get($path, $action) {
        self::addRoute('GET', $path, $action);
    }

    public static function post($path, $action) {
        self::addRoute('POST', $path, $action);
    }

    public static function addRoute($method, $path, $action) {
        self::$routes[] = [
            'method' => $method,
            'path'   => trim($path, '/'),
            'action' => $action,
        ];
    }

    public static function handle() {
        $requestUri = $_GET['url'] ?? '';
        $requestUri = trim($requestUri, '/');
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestUri) {
                list($controllerName, $methodName) = explode('@', $route['action']);

                $controllerFile = "app/controllers/$controllerName.php";
                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                    $controller = new $controllerName();
                    return $controller->$methodName();
                } else {
                    die("Controller not found: $controllerFile");
                }
            }
        }

        // if route or url not exist it will through 404 error
        //http_response_code(404);
        //echo "404 Not Found";
        header("Location: ".BASE_URL."/");
    }
}