<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users'; // nama tabel
    protected $fillable = ['nama', 'nim', 'kelas_id']; // ganti 'npm' jadi 'nim' biar konsisten dgn DB

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    /**
     * Ambil semua data user dengan join ke tabel kelas
     */
    public function getUser()
    {
        return $this->join('kelas', 'users.kelas_id', '=', 'kelas.id')
                    ->select('users.*', 'kelas.nama_kelas')
                    ->get();
    }
}
