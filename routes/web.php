<?php
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livreController;
Route::get('/', function () {
    return view('welcome');
});
Route :: get('/dashboard', function(){

    return view('dashboard');
});

Route ::get('/livres',[livreController::class,'index'])->name('Listelivre');

Route :: get('/livre/create',[livreController::class,'create'])->name('livre.create');

Route :: post('/livre/create',[livreController::class,'store'])->name('livre.store');

Route :: get('/livre/edit/{livre}',[livreController::class,'edit'])->name('livres.edit');

Route::put('/livre/update/{livre}',[livreController::class,'update'])->name('livre.update');

Route::get('/etudiant',[EtudiantController::class,'index'])->name('ListeEtudiant');

Route::get('livre/show/{livre}',[livreController::class,'show'])->name('livre.show');

Route::delete('livre/delete/{id}',[livreController::class,'destroy'])->name('livre.destroy');
