<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetQua extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'ket_qua';

    // Định nghĩa các cột có thể mass-assignable
    protected $fillable = [
        'doi_ban_id',
        'diem',
    ];

    // Quan hệ với bảng 'DoiBan' (một kết quả thuộc về một đội)
    public function doiBan()
    {
        return $this->belongsTo(DoiBan::class);
    }
}
