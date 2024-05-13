<?php

namespace App\Controllers;

use App\Models\PetugasModel;

class Petugas extends BaseController
{
    protected $petugasModel;

    public function __construct()
    {
        $this->petugasModel = new PetugasModel();
    }

    public function index()
    {
        $data['petugas'] = $this->petugasModel->findAll();
        return view('petugas/index', $data);
    }

    public function create()
    {
        return view('petugas/create');
    }

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tugas' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'tugas' => $this->request->getVar('tugas'),

        ];

        // Simpan data ke database menggunakan model
        $this->petugasModel->save($data);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['petugas'] = $this->petugasModel->find($id);
        return view('petugas/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tugas' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getVar('nama'),
            'jabatan' => $this->request->getVar('jabatan'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'tugas' => $this->request->getVar('tugas'),

        ];

        // Update data ke database menggunakan model
        $this->petugasModel->update($id, $data);

        return redirect()->to('/petugas')->with('success', 'Data petugas berhasil diperbarui.');
    }
    public function delete($id)
{
    // Cek apakah data petugas dengan id yang diberikan ada
    $petugas = $this->petugasModel->find($id);
    if (!$petugas) {
        return redirect()->to('/petugas')->with('error', 'Data petugas tidak ditemukan.');
    }

    // Hapus data petugas dari database menggunakan model
    $this->petugasModel->delete($id);

    return redirect()->to('/petugas')->with('success', 'Data petugas berhasil dihapus.');
}

}
