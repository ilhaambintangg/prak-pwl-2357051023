<?php

namespace App\Http\Controllers;

use App\Models\Kelas;       // import model Kelas
use App\Models\UserModel;   // import model UserModel
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    /**
     * Menampilkan daftar user
     */
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    /**
     * Menampilkan form create user
     */
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    /**
     * Menyimpan data user baru
     */
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'),     // mapping input npm → nim di DB
            'kelas_id' => $request->input('kelas_id'),
        ]);

        // setelah simpan kembali ke halaman /user
        return redirect()->to('/user');
    }
}
