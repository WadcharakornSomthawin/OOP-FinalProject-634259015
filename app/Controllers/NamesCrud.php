<?php namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controller;

class NamesCrud extends BaseController{
    // show name list
    public function index() {
        $NameModel = new NameModel();
        $data['users'] = $NameModel->orderBy('id','ASC')->findAll();
        return view('namelist',$data);
    }

    //add name form
    public function create(){
        return view('addname');
    }

    //add data
    public function store(){
        $NameModel = new NameModel();
        $data = [
            'fname'=>$this->request->getVar('fname'),
            'lname'=>$this->request->getVar('lname'),
            'email'=>$this->request->getVar('email'),
            'timeIn'=>$this->request->getVar('timeIn'),
            'timeOut'=>$this->request->getVar('timeOut')
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/namelist'));
    }

    //show single name
    public function singleUser($id=null){
        $NameModel = new NameModel();
        $data['user_obj'] = $NameModel->where('id',$id)->first();
        return view('/editname',$data);
    }

    //udate
    public function update(){
        $NameModel = new NameModel();
        $id = $this->request->getVar('id');
        $data = [
            'fname'=>$this->request->getVar('fname'),
            'lname'=>$this->request->getVar('lname'),
            'email'=>$this->request->getVar('email'),
            'timeIn'=>$this->request->getVar('timeIn'),
            'timeOut'=>$this->request->getVar('timeOut')
        ];
        $NameModel->update($id,$data);
        return $this->response->redirect(site_url('/namelist'));
    }
    //delete
    public function delete($id=null){
        $NameModel = new NameModel();
        $data['user'] = $NameModel->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/namelist'));
    }
}