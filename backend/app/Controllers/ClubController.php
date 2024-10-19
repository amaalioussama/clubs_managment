<?php

namespace App\Controllers;

use App\Models\ClubModel;
use CodeIgniter\HTTP\IncomingRequest;
class ClubController extends BaseController
{
    public function index()
    {
        // return view('club/index');
    }

    public function allclubs()
    {
        $clubModel = new ClubModel();
        $clubs = $clubModel->findAll();
        return $this->response->setJSON($clubs);
    }
    public function addclubview()
    {

    }
    public function addClub() {
        $clubModel = new ClubModel();
       
        $data = [
            'id_president'=>$this->request->getVar('id_president'),
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'logo' => $this->request->getVar('logo'),
            'background' => $this->request->getVar('background'),
            'qr_code' => $this->request->getVar('qr_code'),
            'status' => $this->request->getVar('status')
        ];
        // print_r($data);

        if ($clubModel->insert($data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Club added successfully']);
        } else {
    
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to add club']);
        }
    }

 
    public function updateClub($id)
    {
        $clubModel = new ClubModel();

        $data = [
            'id_president'=>$this->request->getVar('id_president'),
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'logo' => $this->request->getVar('logo'),
            'background' => $this->request->getVar('background'),
            'qr_code' => $this->request->getVar('qr_code'),
            'status' => $this->request->getVar('status')
        ];

       
        if ($clubModel->update($id, $data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Club updated successfully']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to update club']);
        }
    }

    public function deleteClub($id)
    {
        $clubModel = new ClubModel();

        if ($clubModel->delete($id)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Club deleted successfully']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to delete club']);
        }
    }
}
