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
        $this->View->render($this->pageTpl, $this->pageData);
    }
}
