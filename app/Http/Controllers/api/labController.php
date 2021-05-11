<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use DB;


class labController extends Controller
{
    public function index()
    {
        return response()->json(['Hello, CMH']);
        // ip/api/labs/ => หน้า index ของ api/labs
    }

    public function show($id)
    {
        $result = DB::table('covid_copy2')
                ->select('cid', 'fname', 'address', 'tel')
                ->where('cid', $id)
                ->get();
        return Response::json([
                    '_data' => $result
                ], 200);
        // ถ้าไม่เอา _data ให้ลบเหลือแค่ $result
        // status code 200
        // ip/api/labs/เลข 13 หลัก
    }
}
