<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'tanggal',
        'portocategory_id',
    ];

    public function portocategory()
    {
        return $this->belongsTo(PortoCategory::class);
    }
}
