namespace App\Http\Controllers;

use App\Models\GiaiDau;

class TestController extends Controller
{
    public function testQuery()
    {
        // Truy vấn tất cả dữ liệu từ bảng giai_dau
        $giaiDaus = GiaiDau::all();

        // Trả về kết quả dưới dạng JSON
        return response()->json($giaiDaus);
    }
}
