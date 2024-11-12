<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnikworkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [UnikworkController::class, 'index'])->name('home');
Route::get('/about-us', [UnikworkController::class, 'about'])->name('about-us');
Route::get('/services', [UnikworkController::class, 'service'])->name('services');
Route::get('/app-development', [UnikworkController::class, 'appdev'])->name('app-development');
Route::get('/web-development', [UnikworkController::class, 'webdev'])->name('web-development');
Route::get('/ui-ux', [UnikworkController::class, 'uiux'])->name('ui-ux');
Route::get('/internet-of-things', [UnikworkController::class, 'iot'])->name('internet-of-things');
Route::get('/development-operations', [UnikworkController::class, 'devops'])->name('development-operations');
Route::get('/quality-assurance', [UnikworkController::class, 'qa'])->name('quality-assurance');
Route::get('/case-studies', [UnikworkController::class, 'casestudy'])->name('case-studies');
Route::get('/contact-us', [UnikworkController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [UnikworkController::class, 'addcontact'])->name('add-contact');
Route::get('/careers', [UnikworkController::class, 'careers'])->name('careers');
Route::get('/admin/categoryfilter', [UnikworkController::class, 'categoryfilter'])->name('categoryfilter');
Route::get('/career-details/{id}', [UnikworkController::class, 'careerDetails']);
Route::post('/add-careers', [UnikworkController::class, 'addcareer'])->name('add-careers');
Route::get('/sitemap', [UnikworkController::class, 'sitemap'])->name('sitemap');
Route::get('/privacy-policy', [UnikworkController::class, 'policy'])->name('privacy-policy');
Route::get('/terms-of-service', [UnikworkController::class, 'terms'])->name('terms-of-service');
Route::get('/case-studies/kooberi', [UnikworkController::class, 'kooberi'])->name('kooberi');
Route::get('/case-studies/carblip', [UnikworkController::class, 'carblip'])->name('carblip');
// Route::get('/case-studies/kixify', [UnikworkController::class, 'kixify'])->name('kixify');
Route::get('/case-studies/quick', [UnikworkController::class, 'quick'])->name('quick');
Route::get('/our-portfolio', [UnikworkController::class, 'ourport'])->name('our-portfolio');
// Route::any('blog', function(){abort(404);});
Route::get('/blog', [PostsController::class, 'index'])->name('blogetc.index');
Route::get('/search', [PostsController::class, 'search']);
Route::get('/app-ads.txt', [UnikworkController::class, 'appAds'])->name('app-ads');

Route::get('/displayblog', [PostsController::class, 'displayBlog'])->name('displayBlog');
Route::get('/blogdetails/{slug}', [PostsController::class, 'blogDetails'])->name('blogdetails');



// Admin Route
Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'register' => false,
        'reset' => false,
        'verify' => false
    ]);

    Route::get('/', [AdminController::class, 'login']);
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::middleware(['checkRole'])->group(function () {
        // requirements
        Route::get('/requirements', [AdminController::class, 'requirements'])->name('requirements');
        Route::post('/requirements', [AdminController::class, 'addRequirements'])->name('add-requirements');
        // careers
        Route::get('/view-career', [AdminController::class, 'viewCareer'])->name('view-career');
        Route::delete('/delete-career/{id}', [AdminController::class, 'deleteCareer'])->name('delete-career');
        Route::get('/edit-career/{id}', [AdminController::class, 'editCareer']);
        Route::post('/edit-career-data', [AdminController::class, 'editCareerData'])->name('edit-career-data');
        Route::get('/career-view', [AdminController::class, 'CareerView'])->name('career-view');
        Route::get('expfilter', [AdminController::class, 'expfilter'])->name('expfilter');
        Route::get('/career-delete', [AdminController::class, 'careerDelete'])->name('career_delete');
        Route::post('/admin/delete-careers', [AdminController::class, 'deleteCareers'])->name('delete-careers');

        // contact
        Route::get('/contact-view', [AdminController::class, 'ContactView'])->name('contact-view');
        Route::delete('/contact-delete/{id}', [AdminController::class, 'contactDelete'])->name('contact-delete');
        Route::get('/update-status', [AdminController::class, 'updateStatus'])->name('update-status');
        // users
        Route::get('/users', [AdminController::class, 'users'])->name('users');
        Route::post('/add-user', [AdminController::class, 'addUser'])->name('add-user');
        Route::get('/edit-user/{id}', [AdminController::class, 'editUser'])->name('edit-user');
        Route::delete('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('delete-user');

        //SEO
        Route::get('/seo_details', [AdminController::class, 'seo_details'])->name('seo_details');
        Route::post('/add-seo', [AdminController::class, 'addSEO'])->name('add-seo');
        Route::get('/edit-seo/{id}', [AdminController::class, 'editSEO'])->name('edit-seo');
        Route::delete('/delete-seo/{id}', [AdminController::class, 'deleteSEO'])->name('delete-seo');

        // Blog
        Route::get('/bloglist', [AdminController::class, 'blogs'])->name('bloglist');
        Route::get('/addblog', [AdminController::class, 'addblogs'])->name('add-blogs');
        Route::post('/addblog', [AdminController::class, 'addblog'])->name('add-blog');
        Route::get('/edit-blog/{id}', [AdminController::class, 'editblog'])->name('edit-blog');
        Route::post('/edit-blog-data', [AdminController::class, 'editblogData'])->name('edit-blog-data');
        Route::delete('/delete-blog/{id}', [AdminController::class, 'deleteblog'])->name('delete-blog');
        Route::post('/upload-image', [AdminController::class, 'upload']);
        Route::post('/addcomments', [AdminController::class, 'addcomments'])->name('addcomments');
    });
});