<?php 
namespace Company\utility;
use Company\utility\Controller\MainController;
class App {
    public static function init() {
        $controller = new MainController();
        $controller->show();
    }
}