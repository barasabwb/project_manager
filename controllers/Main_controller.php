<?php
class MainController extends BaseController
{
    private $model;
    function __construct()
    {
        $this->model = $this->load_model('Main');
    }

    // public function welcome(){
    //     if(!$this->checkLogin()){
    //         $this->redirect('main/landing_page');
    //     }
    //     $this->redirect('main/dashboard');
  
    // }
    public function index()
    {
        $meta['page_title'] = 'Project Manager';
        $data['message'] = 'Hello There New Person';
        return $this->load_view('Public/pages/landing_page',$meta, $data);
    }
}
