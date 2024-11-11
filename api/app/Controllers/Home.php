<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       // echo base_url('home/service'); die;
        return view('index');
    }
    public function signup():string
    {
       //echo "routes "; die;
           return view('signup');
    }
    public function login():string{
        return view('login');
    }
    public function service():string
    {
        return view('service');
    }
    public function contactus():string
    {
        return view('contactus');
    }
    // 
    public function submit():string
    {
        $ContactModel = model('ContactModel');  //validation
        $data =  $this->request->getPost();// post  data
       // $data = $ContactModel->validate();
        $result = $ContactModel->save($data);
        if($result){
            session()->getFlashdata('message', "data is saved"); 
            return view('contact', ['status'=>false, "message"=>_("data is saved")]);
        }else{
            session()->getFlashdata('message', "data is saved"); 
            return view('contact',['status'=>false, "message"=>_("data is not saved")]);
        }
    }
}
