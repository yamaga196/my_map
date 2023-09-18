<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';

    protected $fillable = [
        'name',
        'person_text',
        'user_id'
    ];

    //1対多のリレーション追加
    public function user() {
        return $this->belongsTo(User::class);
    }
}
