<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController as ac;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\WithoutMenu;
use App\Http\Controllers\layouts\WithoutNavbar;
use App\Http\Controllers\layouts\Fluid;
use App\Http\Controllers\layouts\Container;
use App\Http\Controllers\layouts\Blank;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\MiscUnderMaintenance;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\cards\CardBasic;
use App\Http\Controllers\user_interface\Accordion;
use App\Http\Controllers\user_interface\Alerts;
use App\Http\Controllers\user_interface\Badges;
use App\Http\Controllers\user_interface\Buttons;
use App\Http\Controllers\user_interface\Carousel;
use App\Http\Controllers\user_interface\Collapse;
use App\Http\Controllers\user_interface\Dropdowns;
use App\Http\Controllers\user_interface\Footer;
use App\Http\Controllers\user_interface\ListGroups;
use App\Http\Controllers\user_interface\Modals;
use App\Http\Controllers\user_interface\Navbar;
use App\Http\Controllers\user_interface\Offcanvas;
use App\Http\Controllers\user_interface\PaginationBreadcrumbs;
use App\Http\Controllers\user_interface\Progress;
use App\Http\Controllers\user_interface\Spinners;
use App\Http\Controllers\user_interface\TabsPills;
use App\Http\Controllers\user_interface\Toasts;
use App\Http\Controllers\user_interface\TooltipsPopovers;
use App\Http\Controllers\user_interface\Typography;
use App\Http\Controllers\extended_ui\PerfectScrollbar;
use App\Http\Controllers\extended_ui\TextDivider;
use App\Http\Controllers\icons\MdiIcons;
use App\Http\Controllers\form_elements\BasicInput;
use App\Http\Controllers\form_elements\InputGroups;
use App\Http\Controllers\form_layouts\VerticalForm;
use App\Http\Controllers\form_layouts\HorizontalForm;
use App\Http\Controllers\tables\Basic as TablesBasic;
use App\Http\Controllers\SelectSearchController as ssc;
use Illuminate\Support\Facades\Artisan;

// Main Page Route
Route::get('/accord', function () {
  return view('fromdrop');
});

Route::get('/form3', function () {
  return view('agent.form3');
});

Route::get('/insurSearch', [ssc::class, 'selectSearch'])->name('insurSearch');

// Route::get('/run-migrations', function () {
//   //Artisan::call('migrate:fresh', ['--force' => true]);
//   //Artisan::call('db:seed');
//   echo 'All Done!';
// });

Route::group(['middleware' => 'checkRole:admin'], function () {
  Route::get('/admin/dash', [AdminController::class, 'dashadmin'])->name('dashs');
  //Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/admin/sub/', [AdminController::class, 'subs'])->name('sub');
  Route::get('/admin/edit_user/{id}', [AdminController::class, 'edituser'])->name('edit_user');
  Route::post('/admin/update_user/', [AdminController::class, 'updateuser'])->name('update_user');
  Route::post('/admin/add_sub/', [AdminController::class, 'add_sub'])->name('add_sub');
  Route::post('/admin/edit_sub/{id}', [AdminController::class, 'edit_sub'])->name('edit_sub');
  Route::get('/admin/agent_truck/', [AdminController::class, 'assign_driver_to_agent'])->name('a2t');
  Route::post('/admin/add_agent_driver/', [AdminController::class, 'relate_driver_to_agent'])->name('add_agent_driver');
  Route::get('/admin/deactive/{id}', [AdminController::class, 'deactive'])->name('deactive');
  Route::get('/admin/active/{id}', [AdminController::class, 'active'])->name('active');
});

Livewire::setScriptRoute(function ($handle) {
  // return Route::get('insur/public/livewire/livewire.js', $handle);
  return Route::get('/accord/public/livewire/livewire.js', $handle);
});
Livewire::setUpdateRoute(function ($handle) {
  // return Route::post('insur/public/livewire/update', $handle);
  return Route::post('/accord/public/livewire/update', $handle);
});

// NOW
Route::get('/reg-agency', function () {
  return view('default');
})->name('reg.trucker');
Route::get('/truckform/{id}', [AuthController::class, 'form'])->name('truck.from');

Route::group(['middleware' => 'checkRole:agent'], function () {
  // Routes accessible only by users with 'admin' role
  Route::get('/formlist', [ac::class, 'formlist'])->name('formlist');
  //Route::get('/formlist/{id}', [ac::class, 'pdf'])->name('agent.pdf');

  Route::get('/cert_1st_step/{id}', [ac::class, 'choosePolicyTypes'])->name('cert_1st_step');
  Route::post('/form2', [ac::class, 'create'])->name('form2');


  Route::get('/dash', [ac::class, 'dash'])->name('dash');
  Route::post('/save_cert', [ac::class, 'store'])->name('save_cert');

  Route::get('/main_cert/{id}', [ac::class, 'MainCertificate'])->name('main_cert');
  Route::get('/list_cert/{id}', [ac::class, 'show'])->name('list_cert');
  Route::get('/view_cert/{id}', [ac::class, 'showCertificate'])->name('view_cert');

  Route::get('/edit_cert/{id}', [ac::class, 'editCertificate'])->name('edit_cert');
  Route::post('/update', [ac::class, 'update'])->name('update_cert');

  Route::get('/get_pdf/{id}', [ac::class, 'showPDF'])->name('get_pdf');
  Route::get('/get_pdf2/{id}', [ac::class, 'showPDF2'])->name('get_pdf2');

  //Route::get('/list', [AdminController::class, 'list'])->name('list');
  //Route::get('/dashh', [Analytics::class, 'index'])->name('dashboard-analytics');
  //Route::get('/form', [ac::class, 'insurform'])->name('form');
  //Route::post('/save', [AdminController::class, 'insurformsave'])->name('form.insert');
  //Route::get('/user', [AdminController::class, 'users'])->name('add.user');
});

Route::post('/register', [AuthController::class, 'registerfrom'])->name('regist');
Route::post('/reg', [AuthController::class, 'register'])->name('form.reg');
Route::post('/reggg', [AuthController::class, 'getregister'])->name('get.regester');
// Route::get('/reg-agency', function () { return view('content.authentications.reg-agency'); })->name('reg.agency');
Route::get('/reg-shipper', function () { return view('content.authentications.reg-shipper'); })->name('reg.shipper');
// Route::get('/reg-trucker', function () { return view('content.authentications.reg-trucker'); })->name('reg.trucker');
Route::get('/reg-freights', function () { return view('content.authentications.reg-freights'); })->name('reg.freights');

Route::get('/reg-trucker', function () {
  return view('content.authentications.reg-agency');
})->name('reg.agency');


Route::group(['middleware' => 'checkRole:truck'], function () {
  Route::get('/portal', [TruckController::class, 'trucker'])->name('dashw');
  Route::post('/upload', [TruckController::class, 'upload'])->name('upload');



  // Route::get('/formlist/{id}', [ac::class, 'pdf'])->name('agent.pdf');
  //Route::get('/formlist', [TruckController::class, 'truckersss'])->name('truck.list');
  //Route::get('/form', [AdminController::class, 'insurform'])->name('form');
  // Routes accessible only by users with 'user' role
  // Route::get('/user/dashboard', 'UserController@dashboard')->name('user.dashboard');
  Route::get('/add-shipper', function () {
    return view('truck.add-shipper');
})->name('add.ship');
  Route::get('/add-agency', function () { return view('truck.add-agency'); })->name('add.agnt');
  Route::get('/list-shipper', [TruckController::class, 'shipper'])->name('list.ship');
  Route::post('/reg-add', [TruckController::class, 'addReg'])->name('reg.add');
  Route::get('/profile-truck', [TruckController::class, 'truckprofiles'])->name('profile.truck');
  Route::get('/add-truck', [TruckController::class, 'addTruck'])->name('add.truck');
  Route::get('/list-truck', [TruckController::class, 'trucks'])->name('lists.truck');
  Route::delete('/truck/{id}', [TruckController::class, 'deltruck'])->name('truck.destroy');
  Route::post('/store-truck', [TruckController::class, 'storeTruck'])->name('store.truck');
});
Route::get('reboot',function(){
  Artisan::call('view:clear');
  Artisan::call('route:clear');
  Artisan::call('config:clear');
  Artisan::call('cache:clear');
  Artisan::call('key:generate');
});

Route::group(['middleware' => 'checkRole:shipper'], function () {
  Route::get('/sportal', [ShipperController::class, 'dash2'])->name('sdash');
  Route::get('/add-trucks', function () { return view('shipper.add-trucker'); })->name('add.trucks');
  Route::get('/add-freights', function () { return view('shipper.add-freight'); })->name('add.freights');
  Route::post('/reg-adds', [ShipperController::class, 'addReg'])->name('regs.add');
  Route::get('/profile-shipper', [TruckController::class, 'shipperprofiles'])->name('profile.shipper');
});



Route::get('/notice', [AdminController::class, 'notice'])->name('notice');
Route::group(['middleware' => 'checkRole:shipper'], function () {
  //Route::get('/sdash', [ShipperController::class, 'dash'])->name('truck.dash');
  //Route::get('/form', [AdminController::class, 'insurform'])->name('form');
  // Routes accessible only by users with 'user' role
  // Route::get('/user/dashboard', 'UserController@dashboard')->name('user.dashboard');
  //Route::get('/formlist/{id}', [ac::class, 'pdf'])->name('agent.pdf');
});
Route::get('/exam', [TruckController::class, 'truckers'])->name('truckd');
Route::get('/exam1', [TruckController::class, 'truckerss'])->name('truckf');
Route::get('/exam2', [TruckController::class, 'truckersss'])->name('truckfs');
// Route::get('/dash', [Analytics::class, 'index'])->name('dashboard-analytics');
Route::get('/', [AuthController::class, 'land'])->name('landing');


Route::fallback(function () {
  // return view('content.pages.pages-misc-error');
});


Route::get('/mrun', function () {
  // Artisan::call("migrate:fresh");
  // Artisan::call("db:seed");
  return 'Done';
});

// layout
// Route::get('/layouts/without-menu', [WithoutMenu::class, 'index'])->name('layouts-without-menu');
// Route::get('/layouts/without-navbar', [WithoutNavbar::class, 'index'])->name('layouts-without-navbar');
// Route::get('/layouts/fluid', [Fluid::class, 'index'])->name('layouts-fluid');
// Route::get('/layouts/container', [Container::class, 'index'])->name('layouts-container');
// Route::get('/layouts/blank', [Blank::class, 'index'])->name('layouts-blank');

// pages
// Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name(
//   'pages-account-settings-account'
// );
// Route::get('/pages/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name(
//   'pages-account-settings-notifications'
// );
// Route::get('/pages/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name(
//   'pages-account-settings-connections'
// );
// Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
// Route::get('/pages/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name(
//   'pages-misc-under-maintenance'
// );

// authentication
Route::get('/logg', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/login/shipper', [LoginBasic::class, 'indexs'])->name('auth-login-s');
Route::get('/login/truck', [LoginBasic::class, 'indext'])->name('auth-login-t');
Route::get('/login/freight', [LoginBasic::class, 'indexs'])->name('auth-login-f');


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
// cards
// Route::get('/cards/basic', [CardBasic::class, 'index'])->name('cards-basic');

// // User Interface
// Route::get('/ui/accordion', [Accordion::class, 'index'])->name('ui-accordion');
// Route::get('/ui/alerts', [Alerts::class, 'index'])->name('ui-alerts');
// Route::get('/ui/badges', [Badges::class, 'index'])->name('ui-badges');
// Route::get('/ui/buttons', [Buttons::class, 'index'])->name('ui-buttons');
// Route::get('/ui/carousel', [Carousel::class, 'index'])->name('ui-carousel');
// Route::get('/ui/collapse', [Collapse::class, 'index'])->name('ui-collapse');
// Route::get('/ui/dropdowns', [Dropdowns::class, 'index'])->name('ui-dropdowns');
// Route::get('/ui/footer', [Footer::class, 'index'])->name('ui-footer');
// Route::get('/ui/list-groups', [ListGroups::class, 'index'])->name('ui-list-groups');
// Route::get('/ui/modals', [Modals::class, 'index'])->name('ui-modals');
// Route::get('/ui/navbar', [Navbar::class, 'index'])->name('ui-navbar');
// Route::get('/ui/offcanvas', [Offcanvas::class, 'index'])->name('ui-offcanvas');
// Route::get('/ui/pagination-breadcrumbs', [PaginationBreadcrumbs::class, 'index'])->name('ui-pagination-breadcrumbs');
// Route::get('/ui/progress', [Progress::class, 'index'])->name('ui-progress');
// Route::get('/ui/spinners', [Spinners::class, 'index'])->name('ui-spinners');
// Route::get('/ui/tabs-pills', [TabsPills::class, 'index'])->name('ui-tabs-pills');
// Route::get('/ui/toasts', [Toasts::class, 'index'])->name('ui-toasts');
// Route::get('/ui/tooltips-popovers', [TooltipsPopovers::class, 'index'])->name('ui-tooltips-popovers');
// Route::get('/ui/typography', [Typography::class, 'index'])->name('ui-typography');

// // extended ui
// Route::get('/extended/ui-perfect-scrollbar', [PerfectScrollbar::class, 'index'])->name('extended-ui-perfect-scrollbar');
// Route::get('/extended/ui-text-divider', [TextDivider::class, 'index'])->name('extended-ui-text-divider');

// // icons
// Route::get('/icons/icons-mdi', [MdiIcons::class, 'index'])->name('icons-mdi');

// // form elements
// Route::get('/forms/basic-inputs', [BasicInput::class, 'index'])->name('forms-basic-inputs');
// Route::get('/forms/input-groups', [InputGroups::class, 'index'])->name('forms-input-groups');

// // form layouts
// Route::get('/form/layouts-vertical', [VerticalForm::class, 'index'])->name('form-layouts-vertical');
// Route::get('/form/layouts-horizontal', [HorizontalForm::class, 'index'])->name('form-layouts-horizontal');

// // tables
// Route::get('/tables/basic', [TablesBasic::class, 'index'])->name('tables-basic');
