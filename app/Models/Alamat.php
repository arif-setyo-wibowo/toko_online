<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Alamat extends Model
{
    use HasFactory, HasUuids;

    public $table = 'alamat';
    public $primaryKey = 'id';
    protected $fillable = [
        'users_id',
        'nama_alamat',
        'pemilik_alamat',
        'alamat'
    ];
}