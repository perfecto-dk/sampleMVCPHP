<?php

class CabinetController extends Controller {

    private $pageTpl = "/views/cabinet.tpl.php";

    public function __construct()
    {
        $this->model = new CabinetModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Кабинет";

        $ordersCount = $this->model->getOrdersCount();
        $this->pageData['ordersCount'] = $ordersCount;

        $productsCount = $this->model->getProductsCount();
        $this->pageData['productsCount'] = $productsCount;

        $usersCount = $this->model->getUsersCount();
        $this->pageData['usersCount'] = $usersCount;

        $this->view->render($this->pageTpl, $this->pageData);
    }
}
