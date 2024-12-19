<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaiDau extends Model
{
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'giai_dau';

    // Định nghĩa các cột có thể mass-assignable (được gán giá trị một cách an toàn)
    protected $fillable = [
        'ten_giai_dau',
        'mo_ta',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'trang_thai',
    ];

    // Định nghĩa các cột không thể mass-assignable (bảo vệ các cột khỏi bị gán giá trị tự động)
    protected $guarded = [
        'id', // Không cho phép gán giá trị cho cột 'id' vì là khóa chính tự động tăng
    ];

    // Nếu không muốn sử dụng timestamps (created_at và updated_at), có thể tắt bằng cách:
    // public $timestamps = false;
}
