<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //untuk membuka password yang dikunci laravel
use Illuminate\Support\Facades\Validator; //memberi validasi
use App\User;

class PasswordController extends Controller
{
    //membuat validator
    protected function validator(array $request)
    {
        return Validator::make($request, [
            
            'password' => 'required|string|min:6',
            'confirmed' => 'required|string|min:6|same:password',
        ]);
    }
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
    		$update->password = bcrypt($request['new_pass']);
    		$update->update();

    		return redirect('home')->with('alert', 'Ubah Password Berhasil');
    	}
    	else
    	{
    		redirect()->back();
    	}
    }
}
