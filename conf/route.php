<?php

  // Класс маршрутизации
  // url http://caninet.kamil-abjalov.ru/
  // url http://caninet.kamil-abjalov.ru/users/

  class Routing {

    public static function buildRoute(){

      // Контроллер и action по умолчанию
      $controllerName = "indexController";
      $modelName = "IndexModel";
      $action = "index";

      $route = explode("/", $_SERVER['REQUEST_URI']);

      if ($route[1] != ''){
        $controllerName = ucfirst($route[1]. "Controller");
        $modelName = ucfirst($route[1]. "Model");
      }

      include CONTROLLER_PATH. $controllerName. ".php"; // IndexController.php
      include MODEL_PATH. $modelName. ".php"; // IndexModel.php

      if (isset($route[2]) && $route[2] != ''){
        $action = $route[2];
      }

      $controller = new $controllerName();
      $controller->$action(); // $controller->index();
    }

    public function errorPage() {

    }

  }