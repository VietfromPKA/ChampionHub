<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    // Sử dụng HasFactory để hỗ trợ việc tạo factory cho model này
    use HasFactory;

    // Định nghĩa bảng tương ứng với model
    protected $table = 'nguoi_dung';

    // Định nghĩa các cột có thể mass-assignable (được gán giá trị một cách an toàn)
    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'email',
        'vai_tro',
    ];

    // Định nghĩa các cột không thể mass-assignable (bảo vệ các cột khỏi bị gán giá trị tự động)
    protected $guarded = [
        'id', // Không cho phép gán giá trị cho cột 'id' vì là khóa chính tự động tăng
    ];

    // Tùy chọn: nếu bạn không muốn sử dụng timestamps mặc định của Laravel (created_at, updated_at), 
    // bạn có thể tắt chúng bằng cách thêm dòng sau:
    // public $timestamps = false;

    // Các accessor và mutator có thể được định nghĩa ở đây (nếu cần)
}
