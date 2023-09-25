<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashhController;
use App\Http\Controllers\VolunteerDashController;
use App\Http\Controllers\CategoryDashController;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\AdminDashhController;
// use App\Http\Controllers\VolnteeritemDashhhController;
// use App\Http\Controllers\VolnteerdetailDashhController;
use App\Http\Controllers\AdminDashhController;
use App\Http\Controllers\VolnteeritemDashhhController;
use App\Http\Controllers\VolnteerdetailDashhController;
use App\Http\Controllers\ServicesDashController;
use App\Http\Controllers\VolnteerController;
use App\Http\Controllers\equipmentDashController;
// use App\Http\Controllers\TodoController;
use App\Http\Controllers\MedicineDashController;
use App\Http\Controllers\VolnteerdetailController;
use App\Http\Controllers\VolnteeritemController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ValController;
// use App\Http\Controllers\SentSmsController;

use App\Http\Controllers\SentSmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your appl

ication. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('paypal/payment',[PaypalController::class, 'payment'])->name("paypal");
Route::get('paypal/success',[PaypalController::class, 'success'])->name("paypal_success");
Route::get('paypal/cancel',[PaypalController::class, 'cancel'])->name("paypal_cancel");

Route::get('/', [CategoryController::class, 'index']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::post('/send-message1', [ValController::class, 'sendEmail'])->name('Val.send');

Route::get('/categories/{id}',[VolnteerController::class, 'show']);
Route::get('/volunteering/{id}',[VolnteerdetailController::class, 'index']);
Route::get('/volunteering item/{id}',[VolnteeritemController::class, 'index']);
Route::post('/volunteeringitem',[VolnteeritemController::class, 'store']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::middleware('admin')->group(function () {


    Route::get('/dash', function () {
        return view('Dash.Home');
    });
    

});
Route::get('/bill', function () {
    return view('pages.bill');
});

//social login by google
Route::get('/googlelogin', [ProfileController::class, 'googleLogin']);
Route::get('/auth/google/callback', [ProfileController::class, 'googleHandle']);



// Route::get('/pages.profile.edit', [ProfileController::class, 'index']);

Route::get('/causes', function () {
    return view('pages.causes');
});

// Route::resource('pages', VolnteerController::class);
Route::get('/pages.causes/{id}', [VolnteerController::class, 'index'])->name('pages.causes');

Route::get('/pages.causes', [VolnteerController::class, 'search'])->name('pages.causes');


// Route::get('/pages.causes/{id}', [VolnteerController::class, 'orderbyname'])->name('pages.causes');
// Route::get('/pages.causes', [VolnteerController::class, 'orderbyname2'])->name('pages.causes');

// Route::get('/pages.causes', [CategoryController::class, 'categoryfilter'])->name('pages.causes');



// Route::get('/pages.causes/{id}', [VolnteerController::class, 'filtercategory'])->name('pages.causes');


Route::get('/sent-sms',[SentSmsController::class,'Sent']);







// Route::get('/volunteers', function () {
//     return view('Dash.volunteers');
// })->name('volunteers');

// Route::get('/deletevolunteers/{id}',[VolunteerDashController::class,'destroy'])->name('delete_volunteer');

Route::get('/user',[UserDashhController::class,'index'])->name('allusers');
// Route::post('/useradd',[UserDashhController::class,'goToAddUser'])->name('adduser');
// Route::get('/useradd',[UserDashhController::class,'store'])->name('storeuser');
// Route::get('/deleteuser/{id}',[UserDashhController::class,'destroy'])->name('del');
// Route::get('/volunteers',[VolunteerDashController::class,'index'])->name('all_volunteers');
// Route::get('/category',[CategoryDashController::class,'index'])->name('all_categories');
// Route::get('/delete/{id}',[CategoryDashController::class,'destroy'])->name('delete_category');
// Route::get('/edit_category/{id}',[CategoryDashController::class,'edit'])->name('edit_category');

// Route::post('/edite_category',[CategoryDashController::class,'update'])->name('edite_category');

// Route::POST('/addcat',[CategoryDashController::class,'store'])->name('Add_category');







// Route::get('/delete/{id}',[VolunteerDashController::class,'destroy'])->name('delete_volunteer');
// Route::POST('/add',[VolunteerDashController::class,'store'])->name('Add_volunteer');

// .....................................................admin>>>>>>>>>>>>>>>>>>>>>>>>


Route::resource('admin', AdminDashhController::class);

Route::resource('services', ServicesDashController::class);

Route::resource('equipment', equipmentDashController::class);

Route::resource('medicine', MedicineDashController::class);

Route::get('/item',[VolnteeritemDashhhController::class,'index'])->name('all_items');

Route::get('/detail',[VolnteerdetailDashhController::class,'index'])->name('all_details');

Route::resource('category', CategoryDashController::class);

Route::get('/adminlogin', [AuthenticatedSessionController::class,"create"]);

Route::resource('user', UserDashhController::class);

Route::resource('adminprofile', PhotoController::class);










Route::get('/dash', [AdminLoginController::class, 'showLoginForm'])->name('todos.index');
// Route::post('/dash', [AdminLoginController::class, 'store'])->name('todos.store'); // Add this line
Route::delete('/dash/{todo1}', [AdminLoginController::class, 'destroy'])->name('todos.destroy');
// Route::post('/dash', [AdminLoginController::class, 'login'])->name("admin.login");
Route::get('/adminlogout', [AdminLoginController::class, 'logout'])->name("admin.logout");

Route::post('/dash/store', [AdminLoginController::class, 'store'])->name('todos.store');
Route::post('/dash/login', [AdminLoginController::class, 'login'])->name("admin.login");

