<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserModel;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = ['nama_kelas'];

    public function users()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

    // Sesuai modul: method non-static
    public function getKelas()
    {
        return $this->all();
    }
}
