<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichThiDau extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'lich_thi_dau';

    // Định nghĩa các cột có thể mass-assignable
    protected $fillable = [
        'giai_dau_id',
        'doi_ban_1_id',
        'doi_ban_2_id',
        'thoi_gian_thi_dau',
        'ket_qua',
    ];

    // Quan hệ với bảng 'GiaiDau' (một lịch thi đấu thuộc về một giải đấu)
    public function giaiDau()
    {
        return $this->belongsTo(GiaiDau::class);
    }

    // Quan hệ với bảng 'DoiBan' (mỗi lịch thi đấu có một đội 1)
    public function doiBan1()
    {
        return $this->belongsTo(DoiBan::class, 'doi_ban_1_id');
    }

    // Quan hệ với bảng 'DoiBan' (mỗi lịch thi đấu có một đội 2)
    public function doiBan2()
    {
        return $this->belongsTo(DoiBan::class, 'doi_ban_2_id');
    }
}
