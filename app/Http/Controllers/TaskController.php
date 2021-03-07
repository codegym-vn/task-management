<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = array(
            array(
                'title' => 'Tạo project',
                'content' => 'Tạo project Laravel',
                'created_at' => now(),
                'due_date' => date("Y/m/d")
            ),
            array(
                'title' => 'Tạo migration',
                'content' => 'Tạo migration cho bảng categories',
                'created_at' => now(),
                'due_date' => date("Y/m/d")
            ),
            array(
                'title' => 'Tạo seeder',
                'content' => 'Tạo dữ liệu cho bảng categories',
                'created_at' => now(),
                'due_date' => date("Y/m/d")
            ),

            array(
                'title' => 'Câu lệnh if',
                'content' => 'Câu lệnh if trong Laravel',
                'created_at' => now(),
                'due_date' => date("Y/m/d")
            ),
        );

        return view('index', compact('tasks'));
    }
}
