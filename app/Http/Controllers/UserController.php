<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // mengambil data dari table users
        $users = DB::table('users')->orderByDesc('updated_at')->paginate(12);

        // mengirim data dari table users ke view index
        return view('admin.users.index', [
            'id' => 'Sebuah Id Akun',
            'users' => $users,
            'name' => 'Sebuah nama',
        ]);
    }
}
