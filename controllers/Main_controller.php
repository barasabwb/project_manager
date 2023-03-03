<?php
class MainController extends BaseController
{
    private $model;
    function __construct()
    {
        $this->model = $this->load_model('Main');
    }

    public function welcome(){
        $meta['page_title'] = 'Custom MVC';
        $data['message'] = 'Hello There New Person';
        return $this->load_view('Admin/Home/welcome',$meta, $data);
    }
    // public function index()
    // {
    //     if(!$this->checkLogin()){
    //         $this->redirect('main/landing_page');
    //     }
    //     $this->redirect('main/dashboard');
    // }
}
