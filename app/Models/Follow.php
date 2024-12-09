<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable =[
        'applications_id',
        'news',
    ];

    public function application(){
        return $this->belongsTo(Application::class);
    }
}
