<?php

use App\Http\Controllers\AmapsController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Menu\MenuGroupController;
use App\Http\Controllers\Menu\MenuItemController;
use App\Http\Controllers\RoleAndPermission\AssignPermissionController;
use App\Http\Controllers\RoleAndPermission\AssignUserToRoleController;
use App\Http\Controllers\RoleAndPermission\ExportPermissionController;
use App\Http\Controllers\RoleAndPermission\ExportRoleController;
use App\Http\Controllers\RoleAndPermission\ImportPermissionController;
use App\Http\Controllers\RoleAndPermission\ImportRoleController;
use App\Http\Controllers\RoleAndPermission\PermissionController;
use App\Http\Controllers\RoleAndPermission\RoleController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StratsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;

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



// buka web langsung ke landingpage
Route::get('/', function () {
    return view('menu.main-menu.index');
});

// autentikasi, jangan disentuh
Route::group(['middleware' => ['auth','verified']], function () {

    Route::get('/dashboard', function () {
        return view('home', ['users' => User::get(),]);
    });

    // home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // strats
    Route::prefix('strats-management')->group(function () {
        Route::resource('strats', StratsController::class);
        Route::get('index', [StratsController::class, 'index'])->name('strats.index');
        Route::get('create', [StratsController::class, 'create'])->name('strats.create');
        Route::post('store', [StratsController::class, 'store'])->name('strats.store');
        Route::delete('index/{id}', [StratsController::class, 'destroy'])->name('strats.destroy');
        Route::get('edit/{id}', [StratsController::class, 'edit'])->name('strats.edit');
        Route::put('update/{id}', [StratsController::class, 'update'])->name('strats.update');
    });

    //New and improved(100% more efficient) maps management
    Route::prefix('maps-management')->group(function () {
        //ambil resource
        Route::resource('map', MapsController::class);
        Route::get('list/{mapname}', [MapsController::class, 'call'])->name('maps.list');
        Route::get('view/{id}', [MapsController::class, 'view'])->name('maps.view');
    });

    //user list
    Route::prefix('user-management')->group(function () {
        Route::resource('user', UserController::class);
        Route::post('import', [UserController::class, 'import'])->name('user.import');
        Route::get('export', [UserController::class, 'export'])->name('user.export');
        Route::get('demo', DemoController::class)->name('user.demo');
    });

    Route::prefix('menu-management')->group(function () {
        Route::resource('menu-group', MenuGroupController::class);
        Route::resource('menu-item', MenuItemController::class);
    });

    Route::group(['prefix' => 'role-and-permission'], function () {
        //role
        Route::resource('role', RoleController::class);
        Route::get('role/export', ExportRoleController::class)->name('role.export');
        Route::post('role/import', ImportRoleController::class)->name('role.import');

        //permission
        Route::resource('permission', PermissionController::class);
        Route::get('permission/export', ExportPermissionController::class)->name('permission.export');
        Route::post('permission/import', ImportPermissionController::class)->name('permission.import');

        //assign permission
        Route::get('assign', [AssignPermissionController::class, 'index'])->name('assign.index');
        Route::get('assign/create', [AssignPermissionController::class, 'create'])->name('assign.create');
        Route::get('assign/{role}/edit', [AssignPermissionController::class, 'edit'])->name('assign.edit');
        Route::put('assign/{role}', [AssignPermissionController::class, 'update'])->name('assign.update');
        Route::post('assign', [AssignPermissionController::class, 'store'])->name('assign.store');

        //assign user to role
        Route::get('assign-user', [AssignUserToRoleController::class, 'index'])->name('assign.user.index');
        Route::get('assign-user/create', [AssignUserToRoleController::class, 'create'])->name('assign.user.create');
        Route::post('assign-user', [AssignUserToRoleController::class, 'store'])->name('assign.user.store');
        Route::get('assing-user/{user}/edit', [AssignUserToRoleController::class, 'edit'])->name('assign.user.edit');
        Route::put('assign-user/{user}', [AssignUserToRoleController::class, 'update'])->name('assign.user.update');
    });
});
