<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'binh_luan';

    // Định nghĩa các cột có thể mass-assignable
    protected $fillable = [
        'nguoi_dung_id',
        'giai_dau_id',
        'noi_dung',
    ];

    // Quan hệ với bảng 'NguoiDung' (một bình luận thuộc về một người dùng)
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class);
    }

    // Quan hệ với bảng 'GiaiDau' (một bình luận thuộc về một giải đấu)
    public function giaiDau()
    {
        return $this->belongsTo(GiaiDau::class);
    }
}
