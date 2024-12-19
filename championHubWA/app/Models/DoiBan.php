<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoiBan extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'doi_ban';

    // Định nghĩa các cột có thể mass-assignable
    protected $fillable = [
        'ten_doi',
        'giai_dau_id',
    ];

    // Quan hệ với bảng 'GiaiDau' (một đội ban thuộc về một giải đấu)
    public function giaiDau()
    {
        return $this->belongsTo(GiaiDau::class);
    }
}
