<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Map;

class Detailtext extends Model
{
    use HasFactory;

    protected $table = 'detail_text';

    protected $fillable = [
        'text',
        'maps_id'
    ];

    //1対多のリレーション追加
    public function maps() {
        return $this->belongsTo(Map::class);
    }
}
