<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Car;
use App\Models\RentalReturn;

class RentalController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('mobil.index', [
            'title' => 'Home',
            'cars'  => $cars
        ]);
    }

    public function create()
    {
        return view('mobil.create', [
            'title' => 'Tambah Mobil'
        ]);
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->brand         = $request->merek;
        $car->model         = $request->model;
        $car->license_plate = $request->nomor_plat;
        $car->daily_rate    = $request->tarif_sewa;
        $car->save();

        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function detail($id)
    {
        $car = Car::where('id', $id)->first();
        return view('mobil.detail', [
            'title' => 'Detail mobil',
            'car'   => $car
        ]);
    }

    public function indexBooking()
    {
        $booking = Booking::where('bookings.user_id', Auth::id())
                   ->join('cars as c', 'c.id', '=', 'bookings.car_id')
                   ->select(
                        'c.brand as brand',
                        'c.model as model',
                        'c.license_plate as license_plate',
                        'bookings.id as id',
                        'bookings.start_date as start_date',
                        'bookings.end_date as end_date'
                   )
                    ->get();
        return view('booking.index', [
            'title'     => 'Riwayat Peminjaman',
            'booking'   => $booking
        ]);
    }

    public function createBooking()
    {
        $availableCars = Car::whereDoesntHave('bookings', function ($query) {
            $query->where('end_date', '>=', now())->orWhere('end_date', null);
        })->get();

        return view('booking.create', [
            'title'             => 'Pinjam Mobil',
            'availableCars'     => $availableCars
        ]);
    }

    public function storeBooking(Request $request)
    {
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'car_id' => 'required|exists:cars,id',
        ]);

        // Check car availability for selected dates
        $car = Car::findOrFail($validatedData['car_id']);
        $isAvailable = $car->isCarAvailable($validatedData['start_date'], $validatedData['end_date']);

        if (!$isAvailable) {
            return redirect()->route('booking.create')->with('error', 'Mobil tidak tersedia pada tanggal tersebut.');
        }

        // Create rental
        $booking = new Booking;
        $booking->user_id = Auth::id();
        $booking->car_id = $validatedData['car_id'];
        $booking->start_date = $validatedData['start_date'];
        $booking->end_date = $validatedData['end_date'];
        $booking->save();

        return redirect()->route('booking.index')->with('success', 'Pemesanan berhasil dilakukan.');
    }





}
