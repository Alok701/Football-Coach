<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


//clear cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('optimize:clear');

    $allRoutes = Route::getRoutes()->get();
    return REDIRECT()->BACK();
});


use App\Http\Controllers\Frontend\Trail\AuthController;
use App\Http\Controllers\Frontend\Trail\IndexController;
use App\Http\Controllers\Frontend\Trail\TrailcoachController;
use App\Http\Controllers\Frontend\Trail\ContactController;

use App\Http\Controllers\Frontend\Demo\DemoController;
use App\Http\Controllers\Frontend\Demo\DemoBookController;
use App\Http\Controllers\Frontend\Demo\DemoCourseController;

use App\Http\Controllers\Frontend\Premium\Coach\CoachindexController;
use App\Http\Controllers\Frontend\Premium\Coach\CoachController;
use App\Http\Controllers\Frontend\Premium\Coach\CoachdetailController;
use App\Http\Controllers\Frontend\Premium\Coach\EventController;
use App\Http\Controllers\Frontend\Premium\Coach\EventdetailsController;
use App\Http\Controllers\Frontend\Premium\Coach\OrdertrainingController;

use App\Http\Controllers\Frontend\Premium\PremiumController;
use App\Http\Controllers\Frontend\Premium\ShopController;
use App\Http\Controllers\Frontend\Premium\BookdetailController;
use App\Http\Controllers\Frontend\Premium\CartController;
use App\Http\Controllers\Frontend\Premium\CheckoutController;

use App\Http\Controllers\Frontend\Premium\Course\CourseIndexController;
use App\Http\Controllers\Frontend\Premium\Course\CoursedetailsController;
use App\Http\Controllers\Frontend\Premium\Course\CourseShopController;
 


Route::GROUP(["middleware" => "User-Login"], function () {
    Route::get('/welcome', [TrailcoachController::class, 'index']);

    // Free trail User Start
    //Index page
    Route::get('/trial', [DemoController::class, 'index']);
    //Book Details
    Route::get('/trial-book-details', [DemoBookController::class, 'index']);
    //Course Details
    Route::get('/trial-course-details', [DemoCourseController::class, 'index']);
    Route::get('/trial-presenation-two', [DemoCourseController::class, 'presentationtwo']);
    // Free trail User End
    
    // Premium coach single page
   
    //Premium coach single page

    //Premium Coach version Route
    Route::get('/coach-index', [CoachindexController::class, 'index']);

    //Checkout
    Route::get('/coach-list', [CoachController::class, 'index']);

    //Checkout
    Route::get('/coach-details', [CoachdetailController::class, 'index']);

    //Checkout
    Route::get('/event', [EventController::class, 'index']);

    //Checkout
    Route::get('/event-details', [EventdetailsController::class, 'index']);

    //Checkout
    Route::get('/order-training', [OrdertrainingController::class, 'index']);
    Route::post('/order-insert', [OrdertrainingController::class, 'insert']);


    //Premium Book version Route

    //Book Index Page
    Route::get('/book', [PremiumController::class, 'index']);

    //Shop
    Route::get('/shop', [ShopController::class, 'index']);

    //Book Details
    Route::get('/book-details', [BookdetailController::class, 'index']);

    //Cart
    Route::get('/cart', [CartController::class, 'index']);

    //Checkout
    Route::get('/checkout', [CheckoutController::class, 'index']);



    //Premium Course version Route

    //Course Index
    Route::get('/course-index', [CourseIndexController::class, 'index']);

    //Course Shop
    Route::get('/course-shop', [CourseShopController::class, 'index']);

    //Course Details
    Route::get('/course-details', [CoursedetailsController::class, 'index']);


    // Logout
    Route::GET("/logout", function () {
        SESSION()->FORGET("USER_LOGIN");
        SESSION()->FORGET("USER_ID");
        SESSION()->FORGET("USER_EMAIL");
        SESSION()->FORGET("USER_USERNAME");
        SESSION()->FORGET("USER_PLAN");
        SESSION()->FORGET("USER_POSITION");

        return REDIRECT("/");
    });
});

//Index page
Route::get('/', [IndexController::class, 'index']);

//About Us page
Route::get('/about-us', function () {
    return view('Frontend.trial.about-us');
});

//contact us page
Route::get('/contact-us', function () {
   return view('Frontend.trial.contact-us');
});
Route::post('/contact-insert', [ContactController::class, 'insert']);
//Login page
Route::get('/login', function () {
    return view('Frontend.trial.login');
});



Route::post('/login', [AuthController::class, 'login']);

// Verify User
Route::GET("/user/verify/{token}", [AuthController::class, "VerifyUser"]);

//register page
Route::get('/register', function () {
    return view('Frontend.trial.register');
});
Route::post('/register', [AuthController::class, 'register']);

//Privacy page
Route::get('/privacy-policy', function () {
    return view('Frontend.Premium.book.privacy-policy');
});

//Terms & Condition page
Route::get('/terms-condition', function () {
    return view('Frontend.Premium.book.terms-conditions');
});



//Admin Dashboard Routes

use App\Http\Controllers\Backend\Admin\AdminLoginController;
use App\Http\Controllers\Backend\Admin\AdminAccountController;
use App\Http\Controllers\Backend\Admin\AdminArticleController;
use App\Http\Controllers\Backend\Admin\AdminBookController;
use App\Http\Controllers\Backend\Admin\AdminCoachController;
use App\Http\Controllers\Backend\Admin\AdminCouponController;
use App\Http\Controllers\Backend\Admin\AdminCourseController;
use App\Http\Controllers\Backend\Admin\AdminOrderController;
use App\Http\Controllers\Backend\Admin\AdminPlayerController;

//Admin Login
Route::get('/admin-login', function(){
    return view('Backend.Auth.signin');
});

Route::post('/admin-login', [AdminAccountController::class, 'login']);
Route::GROUP(["middleware" => "ADMIN_LOGIN"], function () {
    //Admin Index
Route::get('/admin/dashboard', [AdminAccountController::class, 'index']);

//Admin Account
Route::get('/acount', [AdminAccountController::class, 'index']);

//Admin Article
Route::get('/articles', [AdminArticleController::class, 'index']);
Route::get('/articles-add', [AdminArticleController::class, 'insert']);
Route::get('/admin-articles', [AdminArticleController::class, 'myarticles']);
Route::get('/articles-edit', [AdminArticleController::class, 'edit']);
Route::get('/articles-update', [AdminArticleController::class, 'update']);

//Admin Book
Route::get('/books', [AdminBookController::class, 'index']);
Route::get('/books-add', [AdminBookController::class, 'insert']);
Route::get('/admin-books', [AdminBookController::class, 'mybooks']);
Route::get('/books-edit', [AdminBookController::class, 'edit']);
Route::get('/books-update', [AdminBookController::class, 'update']);

//Admin Coach
Route::get('/admin/coach-list', [AdminCoachController::class, 'index']);
Route::get('/coach-edit', [AdminCoachController::class, 'edit']);
Route::get('/coach-update', [AdminCoachController::class, 'update']);

//Admin Coupon
Route::get('/coupon', [AdminCouponController::class, 'index']);
Route::get('/coupon-add', [AdminCouponController::class, 'insert']);
Route::get('/coupon-edit', [AdminCouponController::class, 'edit']);
Route::get('/coupon-update', [AdminCouponController::class, 'update']);

//Admin Course
Route::get('/course', [AdminCourseController::class, 'index']);
Route::get('/course-add', [AdminCourseController::class, 'insert']);
Route::get('/admin-course', [AdminCourseController::class, 'mycourse']);
Route::get('/course-edit', [AdminCourseController::class, 'edit']);
Route::get('/course-update', [AdminCourseController::class, 'update']);


//Admin Order
Route::get('/order', [AdminOrderController::class, 'index']);
Route::get('/order-edit', [AdminOrderController::class, 'index-edit']);
Route::get('/order-update', [AdminOrderController::class, 'index-update']);


//Admin Players
Route::get('/players', [AdminPlayerController::class, 'index']);
Route::get('/players-edit', [AdminPlayerController::class, 'edit']);
Route::get('/players-update', [AdminPlayerController::class, 'update']);
});



//Mentor Dashboard
use App\Http\Controllers\Backend\Mentor\MentorIndexController;
use App\Http\Controllers\Backend\Mentor\MentorAccountController;
use App\Http\Controllers\Backend\Mentor\InjuredplayerController;
use App\Http\Controllers\Backend\Mentor\PlayersController;

//Mentor Index
Route::get('/mentor-dashboard', [MentorIndexController::class, 'index']);

//Mentor Account
Route::get('/mentor-profile', [MentorAccountController::class, 'index']);

//Injured Player
Route::get('/injured-players', [InjuredplayerController::class, 'index']);
Route::get('/add-injured-players', [InjuredplayerController::class, 'insert']);
Route::get('/edit-injured-players', [InjuredplayerController::class, 'edit']);

//Players 
Route::get('/mentor-players', [PlayersController::class, 'index']);
Route::get('/edit-mentor-players', [PlayersController::class, 'edit']);


// Coach Dashboard
use App\Http\Controllers\Backend\Coach\CoachDashboard;
use App\Http\Controllers\Backend\Coach\CoachWorkController;
use App\Http\Controllers\Backend\Coach\CoachAnimationController;


Route::GROUP(["middleware" => "COACH_LOGIN"], function () {
    
    Route::get('/coach/coach-dashboard', [CoachDashboard::class, 'index']);
    
    Route::post('/coach/edit-coach-profile', [CoachDashboard::class, 'updatecoachprofile']);
    
    Route::post('/coach/edit-coach-club-licence', [CoachDashboard::class, 'updateclublicence']);
    
    //CoachGraphics start
    Route::get('/coach/coach-graphics-view', [CoachWorkController::class, 'viewgraphics']);
    Route::get('/coach/coach-graphics-add', [CoachWorkController::class, 'addgraphics']);
    Route::get('/coach/coach-graphics-edit', [CoachWorkController::class, 'editgraphics']);
    //CoachGraphics end
    
    //CoachAnimation Start
    Route::get('/coach/coach-animation-view', [CoachAnimationController::class, 'viewanimation']);
    
});