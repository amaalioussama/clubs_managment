<?php 



namespace App\Controllers;

use App\Models\ClubModel;
use CodeIgniter\HTTP\IncomingRequest;
use App\Models\EventModel;
class EventController extends BaseController
{

 public function index(){

    // return view();


 }
 public function addevent(){
    
    $event = new EventModel();

    $data =[
    'id_club' => $this->request->getVar('id_club'),
    'name'=>$this->request->getVar('name'),
    'description'=>$this->request->getVar('description'),
    'location'=>$this->request->getVar('location'),
    'picture'=>$this->request->getVar('picture'),
    'backround'=>$this->request->getVar('backround')

    ];
    if($event->insert($data)){
        return $this->response->setJSON(['status'=>'success','message'=>'Event added successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to add event']);
    }

 }
 public function updateevent($id){

    $event = new EventModel();

    $data =[
    'id_club' => $this->request->getVar('id_club'),
    'name'=>$this->request->getVar('name'),
    'description'=>$this->request->getVar('description'),
    'location'=>$this->request->getVar('location'),
    'picture'=>$this->request->getVar('picture'),
    'backround'=>$this->request->getVar('backround')

    ];
    if($event->update($id,$data)){
        return $this->response->setJSON(['status'=>'success','message'=>'Event updated successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to update event']);
    }
 }
 public function deleteevent($id){
    $event = new EventModel();
    if($event->delete($id)){
        return $this->response->setJSON(['status'=>'success','message'=>'Event deleted successfully']);
    }else{
        return $this->response->setJSON(['status'=>'error','message'=>'Failed to delete event']);
    }
 }
 

}