<?php

use App\Http\Livewire\Admin\AboutComponent;
use App\Http\Livewire\Admin\AddAboutComponent;
use App\Http\Livewire\Admin\AddAdminDashboardComponent;
use App\Http\Livewire\Admin\AddMainComponent;
use App\Http\Livewire\Admin\AddProjectComponent;
use App\Http\Livewire\Admin\AddSkillComponent;
use App\Http\Livewire\Admin\AddServiceComponent;
use App\Http\Livewire\Admin\AddTeamComponent;
use App\Http\Livewire\Admin\AdminAddContactComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditContactComponent;
use App\Http\Livewire\Admin\AdminViewContactComponent;
use App\Http\Livewire\Admin\EditAboutComponent;
use App\Http\Livewire\Admin\EditAdminDashboardComponent;
use App\Http\Livewire\Admin\EditMainComponent;
use App\Http\Livewire\Admin\EditProjectComponent;
use App\Http\Livewire\Admin\EditSkillComponent;
use App\Http\Livewire\Admin\EditServiceComponent;
use App\Http\Livewire\Admin\EditTeamComponent;
use App\Http\Livewire\Admin\MainComponent;
use App\Http\Livewire\Admin\ProjectComponent;
use App\Http\Livewire\Admin\SkillComponent;
use App\Http\Livewire\Admin\ServiceComponent;
use App\Http\Livewire\Admin\TeamComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DownloadComponent;
use App\Http\Livewire\HomeComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('index');
Route::put('/contact',ContactComponent::class)->name('contact');
Route::get('/downloadpdf',DownloadComponent::class)->name('downloadpdf');


Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/add',AddAdminDashboardComponent::class)->name('admin.addadmindashboard');
    Route::get('/admin/dashboard/edit/{id}',EditAdminDashboardComponent::class)->name('admin.editadmindashboard');



    Route::get('/admin/main',MainComponent::class)->name('admin.main');
    Route::get('/admin/main/add',AddMainComponent::class)->name('admin.addmain');
    Route::get('/admin/main/edit/{id}',EditMainComponent::class)->name('admin.editmain');

    Route::get('/admin/aboutme',AboutComponent::class)->name('admin.about');
    Route::get('/admin/aboutme/add',AddAboutComponent::class)->name('admin.addabout');
    Route::get('/admin/aboutme/edit/{id}',EditAboutComponent::class)->name('admin.editabout');

    Route::get('/admin/skill',SkillComponent::class)->name('admin.skill');
    Route::get('/admin/skill/add',AddSkillComponent::class)->name('admin.addskill');
    Route::get('/admin/skill/edit/{id}',EditSkillComponent::class)->name('admin.editskill');

    Route::get('/admin/service',ServiceComponent::class)->name('admin.service');
    Route::get('/admin/service/add',AddServiceComponent::class)->name('admin.addservice');
    Route::get('/admin/service/edit/{id}',EditServiceComponent::class)->name('admin.editservice');

    Route::get('/admin/project',ProjectComponent::class)->name('admin.project');
    Route::get('/admin/project/add',AddProjectComponent::class)->name('admin.addproject');
    Route::get('/admin/project/edit/{id}',EditProjectComponent::class)->name('admin.editproject');

    Route::get('/admin/team',TeamComponent::class)->name('admin.team');
    Route::get('/admin/team/add',AddTeamComponent::class)->name('admin.addteam');
    Route::get('/admin/team/edit/{id}',EditTeamComponent::class)->name('admin.editteam');

    Route::get('/admin/admin_contact',AdminContactComponent::class)->name('admin.admincontact');
    Route::get('/admin/admin_contact/add',AdminAddContactComponent::class)->name('admin.addadmincontact');
    Route::get('/admin/admin_contact/edit/{id}',AdminEditContactComponent::class)->name('admin.editadmincontact');

    Route::get('/admin/viewcontact',AdminViewContactComponent::class)->name('admin.viewcontact');

});
