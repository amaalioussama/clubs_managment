<?php 



namespace App\Controllers;


use App\Models\VisitorModel;
class VisitorController extends BaseController
{

 public function index(){

    // return view();


 }
 public function addevisitor(){
    
    $visitor = new VisitorModel();

    $data = [
        'name'=> $this->request->getVar('name'),
        'email'   => $this->request->getVar('email')
    ];
  
    if($visitor->insert($data)){
        return $this->response->setJSON(['status'=>'success','message'=>'visitor added successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to add visitor ']);
    }

 }
 public function updatevisitor($id){

    $visitor = new VisitorModel();

    $data =[
        'name'      => $this->request->getVar('name'),
        'email'   => $this->request->getVar('email')
    
        ];
    if($visitor->update($id,$data)){
        return $this->response->setJSON(['status'=>'success','message'=>'visitor updated successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to update visitor']);
    }
 }

 public function deletevisitor($id){
  $visitor = new VisitorModel();
  if($visitor->delete($id)){
      return $this->response->setJSON(['status'=>'success','message'=>'visitor deleted successfully']);
  }else{
      return $this->response->setJSON(['status'=>'error','message'=>'Failed to delete visitor']);
  }
 }

}