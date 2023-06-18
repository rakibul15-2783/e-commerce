<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\PracticeController;
use App\Http\Controllers\Backend\RakibController;
use App\Http\Controllers\Backend\BrandTwoController;
use App\Http\Controllers\Backend\ApiController;
use App\Http\Controllers\Backend\CategoryPController;
use App\Http\Controllers\Backend\CategoryAController;
use App\Http\Controllers\Backend\OfficeController;
use App\Http\Controllers\Backend\OfficeAjaxController;

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
    return view('welcome');
});

//social login
Route::get('/gotogoogle',[SocialLoginController::class,"gotogoogle"])->name('gotogoogle');
//social data store
Route::get('/apigstore',[SocialLoginController::class,"apigstore"]);

//office
Route::get('/addoffice',[OfficeController::class, 'index'])->name('addoffice');
Route::post('/insertoffice',[OfficeController::class, 'store'])->name('insertoffice');
Route::get('/showoffice',[OfficeController::class, 'show'])->name('showoffice');
Route::get('/activeoffice/{id}',[OfficeController::class, 'active'])->name('activeoffice');
Route::get('/inactiveoffice/{id}',[OfficeController::class, 'inactive'])->name('inactiveoffice');
Route::get('/deleteoffice/{id}',[OfficeController::class, 'destroy'])->name('deleteoffice');
Route::get('/editoffice/{id}',[OfficeController::class, 'edit'])->name('editoffice');
Route::post('/updateoffice/{id}',[OfficeController::class, 'update'])->name('updateoffice');

//officeajax
Route::get('/addofficeajax',[OfficeAjaxController::class, 'index'])->name("addofficeajax");
Route::post('insertofficeajax',[OfficeAjaxController::class, 'store']);

//product
Route::get('/addproduct',[ProductController::class,'index'])->name("addproduct");
Route::post('/insertproduct',[ProductController::class,'insert'])->name('insertproduct');
Route::get('/showproduct',[ProductController::class,'show'])->name("showproduct");
Route::get('/deleteproduct/{id}',[ProductController::class,'delete'])->name("deleteproduct");
Route::get('/activeproduct/{id}',[ProductController::class,'active'])->name('activeproduct');
Route::get('/inactiveproduct/{id}',[ProductController::class,'inactive'])->name('inactiveproduct');
Route::get('/editproduct/{id}',[ProductController::class,'edit'])->name('editproduct');
Route::post('/updateproduct/{id}',[ProductController::class,'update'])->name('updateproduct');

//brand
Route::get('/addbrand',[BrandController::class,'index'])->name('addbrand');
Route::post('/insertbrand',[BrandController::class,'insert'])->name('insertbrand');
Route::get('/showbrand',[BrandController::class,'show'])->name('showbrand');
Route::get('/deletebrand/{id}',[BrandController::class,'delete'])->name('deletebrand');
Route::get('/editbrand/{id}',[BrandController::class,'edit'])->name('editbrand');
Route::post('/updatebrand/{id}',[BrandController::class,'update'])->name('updatebrand');
//Active to Inactive
Route::get('/active/{id}',[BrandController::class,'active'])->name('active');
//Inactive to Active
Route::get('/inactive/{id}',[BrandController::class,'inactive'])->name('inactive');

//category
Route::get('/addcategory',[CategoryController::class,'index'])->name('addcategory');
Route::get('/showcategory',[CategoryController::class,'show'])->name('showcategory');
Route::get('/deletecategory/{id}',[CategoryController::class,'destroy']);
Route::get('/activecategory/{id}',[CategoryController::class,'active']);
Route::get('/inactivecategory/{id}',[CategoryController::class,'inactive']);
Route::get('/editcategory/{id}',[CategoryController::class,'edit']);
Route::post('/insertcategory',[CategoryController::class,'store'])->name('insertcategory');
Route::post('/updatecategory/{id}',[CategoryController::class,'update']);

//categoryA
Route::get('/addcategorya',[CategoryAController::class,'index'])->name('addcategorya');
Route::post('/insertcategorya',[CategoryAController::class,'insert']);
Route::get('/showcategorya',[CategoryAController::class,'show']);
Route::get('/categoryaactive/{id}',[CategoryAController::class,'active']);
Route::get('/categoryainactive/{id}',[CategoryAController::class,'inactive']);
Route::get('/categoryadelete/{id}',[CategoryAController::class,'delete']);
Route::get('/categoryaedit/{id}',[CategoryAController::class,'edit']);
Route::post('/updatecategorya/{id}',[CategoryAController::class,'update']);

//categoryP
Route::get('/addcategoryp',[CategoryPController::class,'index'])->name("addcategoryp");
Route::post('/insertcategoryp',[CategoryPController::class,'insert'])->name('insertcategoryp');
Route::get('/showcategoryp',[CategoryPController::class,'show'])->name('showcategoryp');
Route::get('/activecategoryp/{id}',[CategoryPController::class,'active'])->name("activecategoryp");
Route::get('/inactivecategoryp/{id}',[CategoryPController::class,'inactive'])->name("inactivecategoryp");
Route::get('/deletecategoryp/{id}',[CategoryPController::class,'delete'])->name("deletecategoryp");
Route::get('/editcategoryp/{id}',[CategoryPController::class,'edit'])->name("editcategoryp");
Route::post('/updatecategoryp/{id}',[CategoryPController::class,'update'])->name("updatecategoryp");

//subcategory
Route::get('/addsubcategory',[SubCategoryController::class,'index'])->name("addsubcategory");
Route::get('/showsubcategory',[SubCategoryController::class,'show']);
Route::post('/insertsubcategory',[SubCategoryController::class,'insert']);

//practice
Route::get('/addpractice',[PracticeController::class,'index'])->name("addpractice");
Route::post('/insertpractice',[PracticeController::class,'insert']);
Route::get('/showpractice',[PracticeController::class,'show']);
Route::get('/activepractice/{id}',[PracticeController::class,'active']);
Route::get('/inactivepractice/{id}',[PracticeController::class,'inactive']);
Route::get('/deletepractice/{id}',[PracticeController::class,'delete']);
Route::get('/editpractice/{id}',[PracticeController::class,'edit']);
Route::post('/updatepractice/{id}',[PracticeController::class,'update']);

//rakib
Route::get('/addrakib',[RakibController::class,'index'])->name('addrakib');
Route::post('/insertrakib',[RakibController::class,'insert']);
Route::get('/showrakib',[RakibController::class,'show']);
Route::get('/activerakib/{id}',[RakibController::class,'active']);
Route::get('/inactiverakib/{id}',[RakibController::class,'inactive']);
Route::get('/deleterakib/{id}',[RakibController::class,'delete']);
Route::get('/editrakib/{id}',[RakibController::class,'edit']);
Route::get('/inactiverakib/{id}',[RakibController::class,'inactive']);
Route::post('/updaterakib/{id}',[RakibController::class,'update']);

//branTwo
Route::get('/addbrandtwo',[BrandTwoController::class,'index'])->name('addbrandtwo');
Route::post('/storebrandtwo',[BrandTwoController::class,'store'])->name('storebrandtwo');
Route::get('/showbrandtwo',[BrandTwoController::class,'show'])->name('showbrandtwo');
Route::get('/viewbrandtwo/{id}',[BrandTwoController::class,'view'])->name('viewbrandtwo');
Route::get('/editbrandtwo/{id}',[BrandTwoController::class,'edit'])->name('editbrandtwo');
Route::post('/updatebrandtwo/{id}',[BrandTwoController::class,'update'])->name('updatebrandtwo');
Route::get('/deletegallery/{id}',[BrandTwoController::class,'deletegallery'])->name('deletegallery');
Route::post('/updategallery/{id}',[BrandTwoController::class,'updategallery'])->name('updategallery');

//apitest
Route::get("/apitest",[ApiController::class,'index']);
Route::post("/insertapitest",[ApiController::class,'insert']);

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
