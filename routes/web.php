<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Front\FrontEndController;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin All Route
Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/logout',[AdminController::class,'destroy'])->name('admin.logout');
    Route::get('/profile',[AdminController::class,'Profile'])->name('admin.profile');
    Route::get('/edit/profile',[AdminController::class,'EditProfile'])->name('edit.profile');
    Route::post('/store/profile',[AdminController::class,'StoreProfile'])->name('store.profile');
    Route::get('/change/password',[AdminController::class,'ChangePassword'])->name('change.password');
    Route::post('/updates/password',[AdminController::class,'UpdatePassword'])->name('update.password');

    //Pages
//    Route::get('/add/top_header',[\App\Http\Controllers\Pages\HeaderController::class,'Top_Header'])->name('add.top-header');
//    Route::post('/add/post/top_header',[\App\Http\Controllers\Pages\HeaderController::class,'Top_Header_Insert'])->name('add.post.top-header');
    Route::get('/tables/top_header',[\App\Http\Controllers\Pages\HeaderController::class,'Top_Header_Table'])->name('tables.top-header');
    Route::get('/edit/top_header/{id}',[\App\Http\Controllers\Pages\HeaderController::class,'Top_Header_Edit'])->name('edit.top-header');
    Route::post('/post/top_header/{id}',[\App\Http\Controllers\Pages\HeaderController::class,'Top_Header_Update'])->name('post.top-header-id');
    //Sliders
    Route::get('/tables/index',[\App\Http\Controllers\SlidersController::class,'index'])->name('sliders.index');
    Route::get('/sliders/edit/{id}',[\App\Http\Controllers\SlidersController::class,'edit'])->name('sliders.edit-id');
    Route::post('/sliders/update/post/{id}',[\App\Http\Controllers\SlidersController::class,'update'])->name('sliders.update.post-id');
    //Hakkımızda
    Route::get('/tables/about/index',[\App\Http\Controllers\Pages\AboutController::class,'index'])->name('about.index');
    Route::get('/about/edit/{id}',[\App\Http\Controllers\Pages\AboutController::class,'edit'])->name('about.edit-id');
    Route::post('/about/update/post/{id}',[\App\Http\Controllers\Pages\AboutController::class,'update'])->name('about.update.post-id');
    //Hizmetlerimiz
    Route::get('/tables/service/index',[\App\Http\Controllers\Pages\ServiceController::class,'index'])->name('service.index');
    Route::get('/service/edit/{id}',[\App\Http\Controllers\Pages\ServiceController::class,'edit'])->name('service.edit-id');
    Route::post('/service/update/post/{id}',[\App\Http\Controllers\Pages\ServiceController::class,'update'])->name('service.update.post-id');
    //Neden_Bşiz
    Route::get('/tables/neden-biz/index',[\App\Http\Controllers\Pages\Neden_BizController::class,'index'])->name('neden-biz.index');
    Route::get('/neden-biz/edit/{id}',[\App\Http\Controllers\Pages\Neden_BizController::class,'edit'])->name('neden-biz.edit-id');
    Route::post('/neden-biz/update/post/{id}',[\App\Http\Controllers\Pages\Neden_BizController::class,'update'])->name('neden-biz.update.post-id');
    //Muracaat
    Route::get('/tables/muracaat/index',[\App\Http\Controllers\Pages\MuracaatController::class,'index'])->name('muracaat.index');
    Route::post('/muracaat/insert',[\App\Http\Controllers\Pages\MuracaatController::class,'Muracaat_Insert'])->name('muracaat.insert');
    Route::get('/muracaat/delete/{id}',[\App\Http\Controllers\Pages\MuracaatController::class,'destroy'])->name('muracaat.destroy');
    //Footer
    Route::get('/tables/footer/index',[\App\Http\Controllers\Pages\FooterController::class,'index'])->name('footer.index');
    Route::get('/footer/edit/{id}',[\App\Http\Controllers\Pages\FooterController::class,'edit'])->name('footer.edit-id');
    Route::post('/footer/update/post/{id}',[\App\Http\Controllers\Pages\FooterController::class,'update'])->name('footer.update.post-id');

});



//Frontend
Route::controller(FrontEndController::class)->group(function (){
Route::get('/','index')->name('index');
Route::get('/clear/cache',function (){
   Artisan::call('cache:clear');
   return 'önbellek temizleme başarılı';
});
});
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified','isAdmin'])->name('dashboard');
Route::get('404',function (){
   return view('hata');
});
Route::get('kazan-sistemleri',[FrontEndController::class,'kazan'])->name('kazan-sistemleri');
Route::get('kombi-sistemleri',[FrontEndController::class,'kombi'])->name('kombi-sistemleri');
Route::get('klima-sistemleri',[FrontEndController::class,'klima'])->name('klima-sistemleri');
Route::get('havalandirma-sistemleri',[FrontEndController::class,'havanlandirma'])->name('havalandirma-sistemleri');
require __DIR__.'/auth.php';
