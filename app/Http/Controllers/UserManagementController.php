<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserManagementController extends Controller
{
    public function index()
    {
        $users = [
            [
                'nama' => 'Fitria Rahmadani',
                'npm' => '2477051012',
                'jurusan' => 'Ilmu Komputer',
                'prodi' => 'D3 Manajemen Informatika'
            ],
             [
                'nama' => 'Fitria Rahmadani',
                'npm' => '2477051012',
                'jurusan' => 'Ilmu Komputer',
                'prodi' => 'D3 Manajemen Informatika'
            ],
             [
                'nama' => 'Fitria Rahmadani',
                'npm' => '2477051012',
                'jurusan' => 'Ilmu Komputer',
                'prodi' => 'D3 Manajemen Informatika'
            ],
             [
                'nama' => 'Fitria Rahmadani',
                'npm' => '2477051012',
                'jurusan' => 'Ilmu Komputer',
                'prodi' => 'D3 Manajemen Informatika'
            ]
        ];
        return view('user-management', compact('users'));
    }
}