<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'thanh_vien';

    // Định nghĩa các cột có thể mass-assignable
    protected $fillable = [
        'nguoi_dung_id',
        'doi_ban_id',
    ];

    // Quan hệ với bảng 'NguoiDung' (mỗi thành viên thuộc về một người dùng)
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class);
    }

    // Quan hệ với bảng 'DoiBan' (mỗi thành viên thuộc về một đội)
    public function doiBan()
    {
        return $this->belongsTo(DoiBan::class);
    }
}
