<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;

    protected $fillable =[
        'application_id',
        'news',
    ];

    public function application(){
        return $this->belongsTo(Application::class);
    }
}
