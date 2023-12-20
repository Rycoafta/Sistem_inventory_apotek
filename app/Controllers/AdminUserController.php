<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AdminUserController extends BaseController
{
    public function index()
    {
        $userModel = new UsersModel();
        $users = $userModel->findAll();
        return view('admin/user/index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin/user/create');
    }

    public function store()
{
    $validationRules = [
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
    ];

    $validationMessages = [
        'username' => [
            'required' => 'username harus diisi.'
        ],
        'email' => [
            'required' => 'email harus diisi.'
        ],
        'password' => [
            'required' => 'password harus diisi.'
        ],
        'role' => [
            'required' => 'username harus diisi.'
        ],
    ];

    if (!$this->validate($validationRules, $validationMessages)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    // Ambil password dari input POST
    $password = $this->request->getPost('password');

    // Hash password menggunakan password_hash()
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $data = [
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'password' => $hashedPassword,
        'role' => $this->request->getPost('role'),
      
    ];

    $userModel = new UsersModel();
    $userModel->insert($data);

    return redirect()->to('/user');
}

    public function show($id)
    {
        $userModel = new UsersModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'user not found.');
        }

        return view('admin/user/show', compact('user'));
    }

    public function edit($id)
    {
        $userModel = new UsersModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'user not found.');
        }

        return view('admin/user/edit', compact('user'));
    }

    public function update($id)
    {
        $validationRules = [
            'username' => 'required',
            'email' => 'required',
            'role' => 'required'
        ];

        $validationMessages = [
            'username' => [
                'required' => 'username harus diisi.'
            ],
            'email' => [
                'required' => 'email harus diisi.'
            ],  
            'role' => [
                'required' => 'username harus diisi.'
            ]
        ];

        // Ambil password dari input POST
        $password = $this->request->getPost('password');

        if ($password==null){

            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'image' => $this->request->getPost('image'),
                'role' => $this->request->getPost('role'),
            ];
        }
        else {
          // Hash password menggunakan password_hash()
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $hashedPassword,
                'image' => $this->request->getPost('image'),
                'role' => $this->request->getPost('role'),
            ];  
        }
        
        $userModel = new UsersModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'user not found.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if ($validation->run($data) == false) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $userModel->update($id, $data);

        return redirect()->to('/user')->with('success', 'user updated successfully.');
    }


    public function destroy($id)
    {
        $userModel = new UsersModel();
        $userModel->delete($id);

        return redirect()->to('/user');
    }
}
