<?php
class promocionesController extends Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
       $this->_view->renderizar('index');
    }
}