<?php

use App\Http\Controllers\admin\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminBannerController;
use App\Http\Controllers\admin\AdminBlogsController;
use App\Http\Controllers\admin\AdminTestimonialsController;
use App\Http\Controllers\admin\AdminOrdersController;
use App\Http\Controllers\admin\AdminServicesController;
use App\Http\Controllers\admin\AdminProductDetailsController;
use App\Http\Controllers\UIAuthController;
use App\Http\Controllers\UIController;
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

Route::get('/', function () {
    return redirect()->route('UI_home');
});

/*---------------------------------------Admin-Routes---------------------------------------------- */
/**Auth Routes */
Route::get('/admin-login', [AdminAuthController::class, 'login'])->name('admin_login');
Route::post('/admin/login-data', [AdminAuthController::class, 'login_data'])->name('login_data_page');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');

/**Admin Auth Middleware Starts */
Route::group(['middleware' => ['protectedPage']], function () {

    /**Dashboard Routes */
    // Route::get('/admin/dashboard', [AdminBannerController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/admin/dashboard', [AdminOrdersController::class, 'dashboard'])->name('admin_dashboard');
    /**Profile Routes */
    Route::get('/admin/profile', [AdminAuthController::class, 'admin_profile'])->name('admin_profile');
    Route::post('/admin/profile-update/{user?}', [AdminAuthController::class, 'admin_profile_update'])->name('admin_profile_update');
    Route::post('/admin/profile-pass-update/{user?}', [AdminAuthController::class, 'admin_password_update'])->name('admin_password_update');

    /**Banner Routes */
    Route::get('/admin/banner-list', [AdminBannerController::class, 'banner'])->name('admin_banners');
    Route::get('/admin/banner-add', [AdminBannerController::class, 'banner_add'])->name('admin_banners_add');
    Route::get('/admin/banner-edit/{id?}', [AdminBannerController::class, 'banner_edit'])->name('admin_banners_edit');
    Route::get('/admin/banner-delete/{banner?}', [AdminBannerController::class, 'banner_delete'])->name('admin_banners_delete');
    Route::post('/admin/banner-add-edit/{banner?}', [AdminBannerController::class, 'banner_add_edit_data'])->name('admin_banners_add_edit');

    /**Blogs Routes */
    Route::get('/admin/blog-list', [AdminBlogsController::class, 'blog_list'])->name('admin_blogs');
    Route::get('/admin/blog-add', [AdminBlogsController::class, 'blog_add'])->name('admin_blogs_add');
    Route::get('/admin/blog-edit/{id?}', [AdminBlogsController::class, 'blog_edit'])->name('admin_blogs_edit');
    Route::get('/admin/blog-delete/{blog?}', [AdminBlogsController::class, 'blog_delete'])->name('admin_blogs_delete');
    Route::post('/admin/blog-add-edit/{blog?}', [AdminBlogsController::class, 'blog_add_edit_data'])->name('admin_blogs_add_edit');

    /**Testimonials Routes */
    Route::get('/admin/testimonial-list', [AdminTestimonialsController::class, 'testimonial_list'])->name('admin_testimonials');
    Route::get('/admin/testimonial-add', [AdminTestimonialsController::class, 'testimonial_add'])->name('admin_testimonials_add');
    Route::get('/admin/testimonial-edit/{id?}', [AdminTestimonialsController::class, 'testimonial_edit'])->name('admin_testimonials_edit');
    Route::get('/admin/testimonial-delete/{testimonial?}', [AdminTestimonialsController::class, 'testimonial_delete'])->name('admin_testimonials_delete');
    Route::post('/admin/testimonial-add-edit/{testimonial?}', [AdminTestimonialsController::class, 'testimonial_add_edit_data'])->name('admin_testimonials_add_edit');

    /**Services Routes */
    Route::get('/admin/service-list', [AdminServicesController::class, 'service_list'])->name('admin_services');
    Route::get('/admin/service-add', [AdminServicesController::class, 'service_add'])->name('admin_services_add');
    Route::get('/admin/service-edit/{id?}', [AdminServicesController::class, 'service_edit'])->name('admin_services_edit');
    Route::get('/admin/service-delete/{service?}', [AdminServicesController::class, 'service_delete'])->name('admin_services_delete');
    Route::post('/admin/service-add-edit/{service?}', [AdminServicesController::class, 'service_add_edit_data'])->name('admin_services_add_edit');

    /**User Routes*/
    Route::get('/admin/user-list', [AdminAuthController::class, 'user_list'])->name('admin_users');
    Route::get('/admin/user-add', [AdminAuthController::class, 'user_add'])->name('admin_users_add');
    Route::get('/admin/user-edit/{id?}', [AdminAuthController::class, 'user_edit'])->name('admin_users_edit');
    Route::get('/admin/user-delete/{user?}', [AdminAuthController::class, 'user_delete'])->name('admin_users_delete');
    Route::post('/admin/user-add-edit/{user?}', [AdminAuthController::class, 'user_add_edit_data'])->name('admin_users_add_edit');

     /**Order Routes*/
     Route::get('/admin/order-list', [AdminOrdersController::class, 'orders_list'])->name('admin_orders_list');
     Route::get('/admin/order-edit/{order}', [AdminOrdersController::class, 'edit_order'])->name('admin_edit_order');
     Route::get('/admin/orders-view/{order}', [AdminOrdersController::class, 'view_order'])->name('admin_order_views');
     Route::get('/admin/order-delete/{order_item}', [AdminOrdersController::class, 'delete_order'])->name('admin_delete_order');
     Route::get('/admin/order-status/{orders}/{status}', [AdminOrdersController::class, 'order_status'])->name('admin_order_status');
     Route::post('/admin/order-add-new-product/{order}', [AdminOrdersController::class, 'addnewproduct'])->name('admin_addnewproduct');
    /**Product Detail Routes*/
    /**Categories Routes */
    Route::get('/admin/categories-list', [AdminProductDetailsController::class, 'categories_list'])->name('admin_categories');
    Route::get('/admin/categories-add', [AdminProductDetailsController::class, 'categories_add'])->name('admin_categories_add');
    Route::get('/admin/categories-edit/{id?}', [AdminProductDetailsController::class, 'categories_edit'])->name('admin_categories_edit');
    Route::get('/admin/categories-delete/{categories?}', [AdminProductDetailsController::class, 'categories_delete'])->name('admin_categories_delete');
    Route::post('/admin/categories-add-edit/{categories?}', [AdminProductDetailsController::class, 'categories_add_edit_data'])->name('admin_categories_add_edit');

    /**Sub-Categories Routes */
    Route::get('/admin/sub-categories-list', [AdminProductDetailsController::class, 'sub_categories_list'])->name('admin_sub_categories');
    Route::get('/admin/sub-categories-add', [AdminProductDetailsController::class, 'sub_categories_add'])->name('admin_sub_categories_add');
    Route::get('/admin/sub-categories-edit/{id?}', [AdminProductDetailsController::class, 'sub_categories_edit'])->name('admin_sub_categories_edit');
    Route::get('/admin/sub-categories-delete/{sub_categories?}', [AdminProductDetailsController::class, 'sub_categories_delete'])->name('admin_sub_categories_delete');
    Route::post('/admin/sub-categories-add-edit/{sub_categories?}', [AdminProductDetailsController::class, 'sub_categories_add_edit_data'])->name('admin_sub_categories_add_edit');
    /**Product Auto Part Routes */
    Route::get('/admin/products-list', [AdminProductDetailsController::class, 'products_list'])->name('admin_products');
    Route::get('/admin/products-add', [AdminProductDetailsController::class, 'products_add'])->name('admin_products_add');
    Route::get('/admin/products-edit/{id?}', [AdminProductDetailsController::class, 'products_edit'])->name('admin_products_edit');
    Route::get('/admin/products-delete/{products?}', [AdminProductDetailsController::class, 'products_delete'])->name('admin_products_delete');
    Route::post('/admin/products-add-edit/{products?}', [AdminProductDetailsController::class, 'products_add_edit_data'])->name('admin_products_add_edit');
    
    
    
    /**Product Cars Routes */
    Route::get('/admin/products-car-list', [AdminProductDetailsController::class, 'products_cars_list'])->name('admin_products_cars');
    Route::get('/admin/products-car-add', [AdminProductDetailsController::class, 'products_cars_add'])->name('admin_products_cars_add');
    Route::get('/admin/products-car-edit/{id?}', [AdminProductDetailsController::class, 'products_cars_edit'])->name('admin_products_cars_edit');
    Route::get('/admin/products-car-delete/{products?}', [AdminProductDetailsController::class, 'products_cars_delete'])->name('admin_products_cars_delete');
    Route::post('/admin/products-car-add-edit/{products?}', [AdminProductDetailsController::class, 'products_cars_add_edit_data'])->name('admin_products_cars_add_edit');
});
/**Admin Auth Middleware Ends */


// UIController routes
Route::get('/', [UIController::class, 'home'])->name('UI_home');
Route::get('about-us', [UIController::class, 'about_us'])->name('UI_about_us');
Route::get('our-service', [UIController::class, 'our_service'])->name('UI_our_service');
Route::get('our-service', [UIController::class, 'our_service'])->name('UI_our_service');
Route::get('contact-us', [UIController::class, 'contact_us'])->name('UI_contact_us');
Route::get('privacy-policy', [UIController::class, 'privacy_policy'])->name('UI_privacy_policy');
Route::get('legel-disclaimer', [UIController::class, 'legel_disclaimer'])->name('UI_legel_disclaimer');
Route::get('auto-parts-product', [UIController::class, 'auto_parts_product'])->name('UI_auto_parts_product');
Route::get('auto-parts', [UIController::class, 'auto_parts'])->name('UI_auto_parts');


// UIAuthController routes

Route::get('login', [UIAuthController::class, 'login'])->name('UI_login');
Route::get('sign-up', [UIAuthController::class, 'sign_up'])->name('UI_sign_up');
