<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Car;
use App\Models\RentalReturn;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome', ['title' => 'Home']);
    }
    public function login(Request $request)
    {
        $rules = [
            'name'     => 'required',
            'password' => 'required',
        ];
        $message = [
            'required' => 'Kolom :attribute ini wajib diisi',
        ];
        $this->validate($request, $rules, $message);
   
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $cars = Car::all();

            return view('mobil.index', [
                'title' => 'Dashboard',
                'cars'  => $cars
            ]);
        }
  
        return redirect("/");
    }
    public function register()
    {
        return view('register', ['title' => 'Register']);
    }
    public function registerAction(Request $request)
    {
        // validate
        $rules = [
            'nama'     => 'required',
            'password' => 'required',
            'alamat'   => 'required',
            'telp'  => 'required|unique:users,phone',
            'sim'      => 'required|unique:users,license_number',
        ];
        $message = [
            'required'       => 'Kolom :attribute ini wajib diisi',
            'telp.unique' => 'Nomor telepon sudah digunakan.',
            'sim.unique'     => 'Nomor SIM sudah digunakan.',
        ];
        $this->validate($request, $rules, $message);
        
        $data = new User;
        $data->name           = $request->nama;
        $data->password       = bcrypt($request->password);
        $data->phone          = $request->telp;
        $data->license_number = $request->sim;
        $data->address        = $request->alamat;
        $data->save();
        
        return redirect('/')->with('success', "Anda berhasil mendaftar, silahkan lakukan Login");
    }
    

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
    
}
