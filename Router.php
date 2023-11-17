<?php 


class Router {
    private $routes;

    public function __construct(array $routes) {
        $this->routes = $routes;
    }

    public function route() {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (array_key_exists($url, $this->routes)) {
            $routeInfo = explode('@', $this->routes[$url]);

            if (count($routeInfo) === 2) {
                $controllerName = 'App\\Controller\\' . $routeInfo[0];
                $action = $routeInfo[1];

                $controller = new $controllerName();
                
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    // Lógica para lidar com ação não encontrada
                    echo "Ação não encontrada!";
                }
            } else {
                // Lógica para lidar com rota mal formada
                echo "Rota mal formada!";
            }
        } else {
            // Lógica para lidar com rota não encontrada
            echo "Rota não encontrada!";
        }
    }
}