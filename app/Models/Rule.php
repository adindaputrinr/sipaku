<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodeRule',
        'kodePenyakit',
        'kodeGejala',
        'tindakan',
    ];

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'kodeGejala', 'kodeGejala');
    }

    public function penyakits()
    {
        return $this->belongsTo(Penyakit::class, 'kodePenyakit', 'kodePenyakit');
    }
}
