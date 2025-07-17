<?php

use App\Http\Controllers\Front\ServiceRequestFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\IssuesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CustomPasswordResetController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ServiceRequestForm;
use App\Http\Controllers\HeaderMenuController;
use App\Http\Controllers\SubscriberController;

//register routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('registers', [RegisterController::class, 'register'])->name('registers');

//login and logout routes
Route::get('admin-login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('submit-login', [LoginController::class, 'login'])->name('loginsubmit');
Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

//Password Reset routes
Route::get('password/reset', [CustomPasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [CustomPasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('password/reset/{token}', [CustomPasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [CustomPasswordResetController::class, 'reset'])->name('password.update');

//Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'admindashboard'])->name('admindashboard');
    //category routes
    Route::get('categories', [CategoryController::class, 'catindex'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'catcreate'])->name('admin.categories.create');
    Route::post('/categories-store', [CategoryController::class, 'catstore'])->name(name: 'admin.categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'catedit'])->name('admin.categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'catupdate'])->name('admin.categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'catdestroy'])->name('admin.categories.destroy');
    // brand routes
    Route::get('brands', [BrandController::class, 'index'])->name('brands.index');
    Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create');
    Route::post('brands', [BrandController::class, 'store'])->name('brands.store');
    Route::get('brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
    Route::put('brands/{id}', [BrandController::class, 'update'])->name('brands.update');
    Route::delete('brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
    // issues routes
    Route::get('issues', [IssuesController::class, 'index'])->name('issues.index');
    Route::get('issues/create', [IssuesController::class, 'create'])->name('issues.create');
    Route::post('issues/store', [IssuesController::class, 'store'])->name('issues.store');
    Route::get('issues/edit/{id}', [IssuesController::class, 'edit'])->name('issues.edit');
    Route::put('issues/update/{id}', [IssuesController::class, 'update'])->name('issues.update');
    Route::delete('issues/delete/{id}', [IssuesController::class, 'destroy'])->name('issues.destroy');

    //blog routes
    Route::get('/adminBlog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
    Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
    Route::get('/blog-category/edit/{id}', [BlogCategoryController::class, 'edit'])->name('blog-category.edit');
    Route::post('/blog-category/update/{id}', [BlogCategoryController::class, 'update'])->name('blog-category.update');
    Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-category.destroy');

    //setting routes
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
    Route::get('/case-study', [SettingController::class, 'case_study'])->name('case-study');
    Route::get('/setting', [SettingController::class, 'metaPage'])->name('metaPage');
    Route::post('/settings/update', [SettingController::class, 'updateSetting'])->name('settings.update');
    Route::post('/settings/new-meta', [SettingController::class, 'new_meta_add'])->name('settings.new_meta');
    Route::get('settings/edit-meta/{id}', [SettingController::class, 'editSettingForm'])->name('settings.edit_meta');

    //-------------------------Header Menu--------------------//
    Route::get('/header-menu', [HeaderMenuController::class, 'index'])->name('headers');
    Route::get('/header-menu/create/{id?}', [HeaderMenuController::class, 'create'])->name('createHeaderMenu');
    Route::post('/header-menu/store', [HeaderMenuController::class, 'save'])->name('save-headerMenu');
    Route::put('/updateHeaderMenu/{id}', [HeaderMenuController::class, 'save'])->name('update-headerMenu');
    Route::delete('/header-menu/destroy/{id}', [HeaderMenuController::class, 'delete'])->name('delete-headerMenu');

    //-------------------------Contact List--------------------//
    Route::get('admin-contact', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::post('admin-contact-delete/{id}', [ContactController::class, 'delete'])->name('admin.contact.delete');
});




// Frontend routes
Route::get('/', [HomeController::class, 'frontindex'])->name('front.index');
Route::get('/about', [HomeController::class, 'frontabout'])->name('front.about');
Route::get('/contact', [HomeController::class, 'frontcontact'])->name('front.contact');
Route::get('/antivirus', [HomeController::class, 'frontantivirus'])->name('front.antivirusandsecurity');
Route::get('/appDevelopment', [HomeController::class, 'frontappdevelopment'])->name('front.appDevelopment');
Route::get('/appleMacos', [HomeController::class, 'frontapplemacos'])->name('front.appleMacos');
Route::get('/computerTunes', [HomeController::class, 'frontcomputertunes'])->name('front.computerTunes');
Route::get('/dataBackup', [HomeController::class, 'frontdatabackup'])->name('front.dataBackup');
Route::get('/digitalMarketing', [HomeController::class, 'frontdigitalmarketing'])->name('front.digitalMarketing');
Route::get('/emailHostinger', [HomeController::class, 'frontemailhostinger'])->name('front.emailHostinger');
Route::get('/emailMarketing', [HomeController::class, 'frontemailmarketing'])->name('front.emailMarketing');
Route::get('/emailService', [HomeController::class, 'frontemailservice'])->name('front.emailService');
Route::get('/internetConectivity', [HomeController::class, 'frontinternetconectivity'])->name('front.internetConectivity');
Route::get('/microsoftWindow', [HomeController::class, 'frontmicrosoftwindow'])->name('front.microsoftWindow');
Route::get('/professionalEmail', [HomeController::class, 'frontprofessionalemail'])->name('front.professionalEmail');
Route::get('/programError', [HomeController::class, 'frontprogramerror'])->name('front.programError');
Route::get('/softwareApplication', [HomeController::class, 'frontsoftwareapplication'])->name('front.softwareApplication');
Route::get('/transactionalEmail', [HomeController::class, 'fronttransactionalemail'])->name('front.transactionalEmail');
Route::get('/uiUxDesign', [HomeController::class, 'frontuiuxdesign'])->name('front.uiUxDesign');
Route::get('/virusAndMalware', [HomeController::class, 'frontvirusandmalware'])->name('front.virusAndMalware');
Route::get('/webAgency', [HomeController::class, 'frontwebagency'])->name('front.webAgency');
Route::get('/webDevelopment', [HomeController::class, 'frontwebdevelopment'])->name('front.webDevelopment');
Route::get('/wifiConectivity', [HomeController::class, 'frontwificonectivity'])->name('front.wifiConectivity');
Route::get('/homeNetworking', [HomeController::class, 'fronthomenetworking'])->name('front.homeNetworking');
Route::get('/smartPhone', [HomeController::class, 'frontsmartphone'])->name('front.smartPhone');
Route::get('/printerAndMultifunction', [HomeController::class, 'frontprinterandmultifunction'])->name('front.printerAndMultifunction');
Route::get('/trainingAndGuidence', [HomeController::class, 'fronttrainingandguidence'])->name('front.trainingAndGuidence');
Route::get('/privacyPolicy', [HomeController::class, 'frontprivacypolicy'])->name('front.privacyPolicy');
Route::get('/termAndCondition', [HomeController::class, 'fronttermandcondition'])->name('front.termAndCondition');
Route::get('/refundPolicy', [HomeController::class, 'frontrefundpolicy'])->name('front.refundPolicy');
Route::post('/issueForm', [ServiceRequestFormController::class, 'submitIssueForm'])->name('issueFormSubmit');
Route::post('/issueForm-ajax', [ServiceRequestFormController::class, 'submitIssueForm_ajax'])->name('issueFormSubmit.ajax');

Route::get('/user-login', [HomeController::class, 'user_login'])->name('user.login');
Route::get('/user-register', [HomeController::class, 'user_register'])->name('user.register');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HomeController::class, 'blog_details'])->name('blog.details');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/package-details', [HomeController::class, 'package_details'])->name('package.details');


// Submit contacts form
Route::post('/contactUs', [ContactController::class, 'submit'])->name('form.submit');

//  Send Email for subscriber
Route::post('subscriber', [SubscriberController::class, 'subscribe'])->name('subscriber');

// Show navbar menus
Route::get('laptop/{slug}', [HomeController::class, 'laptop'])->name('laptop.dynamic');
Route::get('printer/{slug}', [HomeController::class, 'printer'])->name('printer.dynamic');
Route::get('email/{slug}', [HomeController::class, 'email'])->name('email.dynamic');

//=============================== hardeep, service route=========================//

Route::get('/service/{slug}', [HomeController::class, 'services_details'])->name('services.details');



