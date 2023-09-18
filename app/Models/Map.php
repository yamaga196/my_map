<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Detailtext;

class Map extends Model
{
    use HasFactory;

    protected $table = 'maps';

    protected $fillable = [
        'longitude',
        'latitude',
        'explanation',
        'explanation_text',
        'user_id'
    ];

    //1対多のリレーション追加
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function detailtext()
    {
        return $this->hasMany(Detailtext::class);
    }
}