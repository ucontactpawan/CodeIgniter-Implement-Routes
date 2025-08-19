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
        $studentModel = new StudentModel();

        if ($id !== null) {
            $studentModel->delete($id);
            session()->setFlashdata('success', 'Student deleted successfully.');
        }
        
        return redirect()->to('/students');
    }

    public function view($id = null)
    {
        $studentModel = new StudentModel();

        $data['student'] = $studentModel->find($id);

        if (empty($data['student'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the student item: ' . $id);
        }

        return view('student_view', $data);
    }
}