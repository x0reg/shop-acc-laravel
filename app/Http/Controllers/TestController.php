<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login(Request $request)
    {
        // Ví dụ mảng dữ liệu
        $data = [
            'Phần thưởng 9999 KC' => 1,
            'Phần thưởng 4999 KC' => 2,
            'Phần thưởng 2999 KC' => 3,
            'Phần thưởng 999 KC' => 4,
            'Phần thưởng 599' => 5,
            'Phần thưởng 299' => 10,
            'Phần thưởng 99' => 40,
            'Phần thưởng random' => 35,
        ];
        $angles = [
            'Phần thưởng 9999 KC' => 45,
            'Phần thưởng 4999 KC' => 90,
            'Phần thưởng 2999 KC' => 135,
            'Phần thưởng 999 KC' => 180,
            'Phần thưởng 599' => 225,
            'Phần thưởng 299' => 270,
            'Phần thưởng 99' => 315,
            'Phần thưởng random' => 360,
        ];

        // Random phần tử theo tỷ lệ
        $result = getRandomElement($data);
        $angle = $angles[$result[0]];
        // echo "Random element: " . $result[0] . "\n";
        return response()->json([
            'angle' => $angle,
            'reward' => $result[0]
        ]);
    }
}
