<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Rekening extends Model
{
    use HasFactory, HasUuids;

    public $table = 'rekening';
    public $primaryKey = 'id';
    protected $fillable = [
        'users_id',
        'nama_bank',
        'no_rekening',
        'nama_pemilik'
    ];
}