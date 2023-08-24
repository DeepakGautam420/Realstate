<?php

use App\Http\Controllers\admin\AgentController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\spatia\PermissionController;
use App\Http\Controllers\admin\spatia\RoleController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\SellPropertyController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

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
// Start Register, Login And Logout Admin Pannel
Route::view('/','frontend/home');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register-store',[AuthController::class,'registerStore'])->name('registerStore');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login-store',[AuthController::class,'loginStore'])->name('loginStore');
// Stop Register, Login And Logout Admin Pannel

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => 'auth'],function(){
    Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
    Route::get('/agent-edit/{id}',[AgentController::class,'editProperty'])->name('agentEdit');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/user-profile',[AuthController::class,'userProfile'])->name('userProfile');
    Route::get('/change-password',[AuthController::class,'changePassword'])->name('changePassword');

    // Start Role
    Route::get('/roles',[RoleController::class,'roles'])->name('roles');
    Route::post('/roles-create',[RoleController::class,'roleCreate'])->name('roleCreate');
    Route::get('/roles-edit/{id}',[RoleController::class,'roleEdit'])->name('roleEdit');
    Route::post('/roles-update/{id}',[RoleController::class,'roleUpdate'])->name('roleUpdate');
    Route::get('/roles-delete/{id}',[RoleController::class,'roleDelete'])->name('roleDelete');
    // Stop Role

    //Start Permission
    Route::get('/permissions',[PermissionController::class,'permissions'])->name('permissions');
    Route::post('/permissions-create',[PermissionController::class,'permissionsCreate'])->name('permissionsCreate');
    Route::get('role-permission',[PermissionController::class,'rolePermissions'])->name('rolePermissions');
    Route::get('role-permission-fatch',[PermissionController::class,'rolePermissionsFatch'])->name('rolePermissionsFatch');
    Route::post('assings-permission',[PermissionController::class,'assingPermissions'])->name('assingPermissions');
    //Stop Permission

    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::post('/user-create',[UserController::class,'userCreate'])->name('userCreate');
    Route::get('/user-edit/{id}',[UserController::class,'userEdit'])->name('userEdit');
    Route::post('/user-update/{id}',[UserController::class,'userUpdate'])->name('userUpdate');
    Route::get('/user-delete/{id}',[UserController::class,'userDelete'])->name('userDelete');

    //admin controller
    Route::get('/users',[UserController::class,'index'])->name('users');

<<<<<<< Updated upstream
Route::get('add-property',[AgentController::class,'addProperty'])->name('addProperty');
Route::post('store-agent-detail',[AgentController::class,'storeAgentDetail'])->name('storeAgentDetail');
Route::get('show-agent-detail',[AgentController::class,'showAgentDetail'])->name('showAgentDetail');
Route::post('update-agent-detail/{id}',[AgentController::class,'updateAgentDetail'])->name('updateAgentDetail');
Route::get('delete-agent-detail/{id}',[AgentController::class,'deleteAgent'])->name('deleteAgent');
Route::get('list-of-agent',[AgentController::class,'agentList'])->name('agentList');
Route::get('list-of-owner',[AgentController::class,'ownerList'])->name('ownerList');
Route::get('edit-agent/{id}',[AgentController::class,'editAgent'])->name('editAgent');
Route::get('delete-agent/{id}',[AgentController::class,'agentDelete'])->name('agentDelete');
Route::post('update-agent/{id}',[AgentController::class,'updateAgent'])->name('updateAgent');
Route::get('edit-owner/{id}',[AgentController::class,'ownerEdit'])->name('ownerEdit');
Route::get('rented-list',[AgentController::class,'rentedList'])->name('rentedList');
Route::get('sale-property-list',[AgentController::class,'salePropertyList'])->name('salePropertyList');
Route::get('proertyemage/{img}',[AgentController::class,'proertyEmage'])->name('proertyimg');
Route::get('user-property-list',[SellPropertyController::class,'userProperty'])->name('userProperty');
Route::get('user-sell-property-list',[SellPropertyController::class,'userSellProperty'])->name('userSellProperty');
=======
    Route::get('add-property',[AgentController::class,'addProperty'])->name('addProperty');
    Route::post('store-agent-detail',[AgentController::class,'storeAgentDetail'])->name('storeAgentDetail');
    Route::get('show-agent-detail',[AgentController::class,'showAgentDetail'])->name('showAgentDetail');
    Route::post('update-agent-detail/{id}',[AgentController::class,'updateAgentDetail'])->name('updateAgentDetail');
    Route::get('delete-agent-detail/{id}',[AgentController::class,'deleteAgent'])->name('deleteAgent');
    Route::get('list-of-agent',[AgentController::class,'agentList'])->name('agentList');
    Route::get('list-of-owner',[AgentController::class,'ownerList'])->name('ownerList');
    Route::get('edit-agent/{id}',[AgentController::class,'editAgent'])->name('editAgent');
    Route::get('delete-agent/{id}',[AgentController::class,'agentDelete'])->name('agentDelete');
    Route::post('update-agent/{id}',[AgentController::class,'updateAgent'])->name('updateAgent');
    Route::get('edit-owner/{id}',[AgentController::class,'ownerEdit'])->name('ownerEdit');
    Route::get('rented-list',[AgentController::class,'rentedList'])->name('rentedList');
    Route::get('sale-property-list',[AgentController::class,'salePropertyList'])->name('salePropertyList');
    Route::get('proertyemage/{img}',[AgentController::class,'proertyEmage'])->name('proertyimg');
    Route::get('user-property-list',[SellPropertyController::class,'userProperty'])->name('userProperty');
>>>>>>> Stashed changes

    //Payment details routes
    Route::resource('payments',PaymentController::class);
});

Route::get('user-login',[LoginController::class,'user'])->name('userLogin');
Route::get('user-sign-up',[LoginController::class,'signUp'])->name('userSignUp');
Route::post('store-user-sign-up',[LoginController::class,'storeSignUp'])->name('signUpstore');
Route::post('user-login',[LoginController::class,'userLoginStore'])->name('userLogin');
Route::get('contact-us',[ContactUsController::class,'contactUs'])->name('contactUs');
Route::post('store-contact-us',[ContactUsController::class,'storeContactUs'])->name('storeContactUs');
Route::get('about-us',[ContactUsController::class,'aboutUs'])->name('aboutUs');
Route::get('sell-property',[SellPropertyController::class,'sellProperty'])->name('sellProperty');
Route::post('store-sell-property',[SellPropertyController::class,'storeSellProperty'])->name('storeSellProperty');
Route::get('rent-property-list',[SellPropertyController::class,'rentPropertyList'])->name('rentPropertyList');
Route::get('pg-hostel-property-list',[SellPropertyController::class,'pgPropertyList'])->name('pgPropertyList');
Route::get('sell-property-list',[SellPropertyController::class,'salePropertyList'])->name('salePropertyList');
Route::get('show-one-one-property/{id}',[SellPropertyController::class,'propertyOverView'])->name('propertyOverView');
Route::get('show-rent-lease-property/{id}',[SellPropertyController::class,'rentLeaseOverView'])->name('rentLeaseOverView');
Route::get('show-sale-property/{id}',[SellPropertyController::class,'saleOverView'])->name('saleOverView');
