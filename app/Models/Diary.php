<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;

    protected $table = 'diary';

    protected $fillable = [
        'date',
        'img_path',
        'english',
        'good_point',
        'bad_point',
        'user_id'
    ];

    //1対多のリレーション追加
    public function user() {
        return $this->belongsTo(User::class);
    }
}
