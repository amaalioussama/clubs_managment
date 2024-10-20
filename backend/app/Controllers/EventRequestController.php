<?php 



namespace App\Controllers;


use App\Models\EventRequestModel;
class EventRequestController extends BaseController
{

 public function index(){

    // return view();


 }
 public function addeventrequest(){
    
    $eventreq = new EventRequestModel();

    $data = [
        'id_club'      => $this->request->getVar('id_club'),
        'id_visitor'   => $this->request->getVar('id_visitor'),
        'id_event'     => $this->request->getVar('id_event'),
        'status'       => $this->request->getVar('status'),
       
    ];
    $data['request_date'] = date('Y-m-d H:i:s');
    if($eventreq->insert($data)){
        return $this->response->setJSON(['status'=>'success','message'=>'Event request added successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to add event request ']);
    }

 }
 public function updateeventrequest($id){

    $eventreq = new EventRequestModel();

    $data =[
        'id_club'      => $this->request->getVar('id_club'),
        'id_visitor'   => $this->request->getVar('id_visitor'),
        'id_event'     => $this->request->getVar('id_event'),
        'status'       => $this->request->getVar('status'),
        'request_date' => date('Y-m-d H:i:s') 
    
        ];
    if($eventreq->update($id,$data)){
        return $this->response->setJSON(['status'=>'success','message'=>'Eventreq updated successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to update eventreq']);
    }
 }

 public function deleteeventrequest($id){
  $eventreq = new EventRequestModel();
  if($eventreq->delete($id)){
      return $this->response->setJSON(['status'=>'success','message'=>'Eventreq deleted successfully']);
  }else{
      return $this->response->setJSON(['status'=>'error','message'=>'Failed to delete evenreqt']);
  }
 }

}