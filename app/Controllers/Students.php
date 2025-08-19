<?php 

namespace App\Controllers;

use App\Models\StudentModel;

class Students extends BaseController
{
    public function index()
    { 
       // instance of StudentModel
       $studentModel = new StudentModel();
       
       //fetch all students 
       $data['students'] = $studentModel->findAll();

     return view('student_registration', $data);
    }

    public function create()
    {
       $studentModel = new StudentModel();

       $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),  
            'address' => $this->request->getPost('address'), 
            'phone' => $this->request->getPost('phone'),
            'father_name' => $this->request->getPost('father_name'),
            'mother_name' => $this->request->getPost('mother_name'),
       ];
       $studentModel->save($data);

       return redirect()->to('/students');
    }

    public function delete($id = null)
    {
        //instance of StudentModel
        $studentModel = new StudentModel();

        if($id !== null){
            $studentModel->delete($id);  
        }
        return redirect()->to('/students');
    }
}