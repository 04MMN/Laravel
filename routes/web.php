<?php
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EmpruntController;
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

Route :: get('/etudiant/create',[EtudiantController::class,'create'])->name('etudiant.create');

Route :: post('/etudiant/create',[EtudiantController::class,'store'])->name('etudiant.store');

Route :: get('/etudiant/edit/{etudiant}',[EtudiantController::class,'edit'])->name('etudiant.edit');

Route::put('/etudiant/update/{etudiant}',[EtudiantController::class,'update'])->name('etudiant.update');

Route::get('etudiant/show/{etudiant}',[EtudiantController::class,'show'])->name('etudiant.show');

Route::delete('etudiant/delete/{etudiant}',[EtudiantController::class,'destroy'])->name('etudiant.destroy');

Route::resource('emprunts',EmpruntController::class);

Route::put('emprunt/retour/{emprunt}',[EmpruntController::class,'retourlivre'])->name('retourlivre');
