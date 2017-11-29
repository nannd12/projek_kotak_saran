<?php

namespace App\Http\Controllers;
use app\User;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
    //fungsi mengganti password
    public function update(Request $request, $id)
    {
    	$update = User::find($id);
    	//mengambil password lama
    	$currentPass = $update->password;

    	//mengecek password baru dan password lama
    	if (Hash::check($request['current_pass'], $currentPass)) 
    	{
    		# code...
    		//proses mengubah password
    		$update->password = $request['new_pass'];
    		$update->update();

    		return redirect('home')->with('alert', 'Ubah Password Berhasil');
    	}
    	else
    	{
    		return redirect('home')->with('error', 'Ubah Password Berhasil');
    	}
    }
}
