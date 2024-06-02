<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $topSell = [
        [
            "imagePath" => "image/Frame-1.svg",
            "name" => "Reebok Energen Tech Plus Running ORIGINAL Sportwear",
            "price" => "Rp 720.000"
        ],
        [
            "imagePath" => "image/Frame-2.svg",
            "name" => "Sandal NIKE Men Sportswear Victori One Shower Slide",
            "price" => "Rp 300.000"
        ],
        [
            "imagePath" => "image/Frame-3.svg",
            "name" => "Topi adidas ORIGINALS Adicolor Classic Trefoil Winter Baseball Cap",
            "price" => "Rp 240.000"
        ],
    ];

    $newArrival = [
        [
            "imagePath_new" => "image/new-1.svg",
            "name-new" => "Nike Men's Run Swift 3 Road Running Shoes",
            "price-new" => "Rp 740.000"
        ],
        [
            "imagePath_new" => "image/new-2.svg",
            "name-new" => "Sepatu Reebok Resonator Low Original 100%",
            "price-new" => "Rp 800.000"
        ],
        [
            "imagePath_new" => "image/new-3.svg",
            "name-new" => "adidas Women Running Shoes Questar Sepatu Lari Wanita",
            "price-new" => "Rp 640.000"
        ],
    ];

    return view('welcome', [
        'topSell' => $topSell ,
        'newArrival' => $newArrival ,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
