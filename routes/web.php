<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminConsultationController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminReplyController;
use App\Http\Controllers\AdminSeminarController;
use App\Http\Controllers\AdminSeminarRegistrationController;
use App\Http\Controllers\AdminTestimonialController;
use App\Http\Controllers\AdminThreadController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\SeminarRegistrationController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\ProfileLinkController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| User Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



    /*
|--------------------------------------------------------------------------
| Public Member Profile
|--------------------------------------------------------------------------
*/

Route::get('/anggota/{user}', [PublicProfileController::class, 'show'])
    ->name('profile.public');
/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    /*
    |--------------------------------------------------------------------------
    | Profile Avatar
    |--------------------------------------------------------------------------
    */

    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])
        ->name('profile.avatar.update');

    Route::delete('/profile/avatar', [ProfileController::class, 'deleteAvatar'])
        ->name('profile.avatar.delete');

    /*
    |--------------------------------------------------------------------------
    | Delete Account
    |--------------------------------------------------------------------------
    */

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

        Route::post('/profile/links', [ProfileLinkController::class, 'store'])
    ->name('profile.links.store');

Route::patch('/profile/links/{link}', [ProfileLinkController::class, 'update'])
    ->name('profile.links.update');

Route::delete('/profile/links/{link}', [ProfileLinkController::class, 'destroy'])
    ->name('profile.links.destroy');

});


/*
|--------------------------------------------------------------------------
| Forum - Public
|--------------------------------------------------------------------------
*/

Route::get('/forum', [ForumController::class, 'index'])
    ->name('forum.index');


/*
|--------------------------------------------------------------------------
| Forum - User
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Create Thread
    |--------------------------------------------------------------------------
    */

    Route::get('/forum/create', [ThreadController::class, 'create'])
        ->name('forum.create');


    /*
    |--------------------------------------------------------------------------
    | Store Thread
    |--------------------------------------------------------------------------
    */

    Route::post('/forum', [ThreadController::class, 'store'])
        ->name('forum.store');


    /*
    |--------------------------------------------------------------------------
    | Edit Thread
    |--------------------------------------------------------------------------
    */

    Route::get('/forum/{thread}/edit', [ThreadController::class, 'edit'])
        ->name('forum.edit');


    /*
    |--------------------------------------------------------------------------
    | Update Thread
    |--------------------------------------------------------------------------
    */

    Route::put('/forum/{thread}', [ThreadController::class, 'update'])
        ->name('forum.update');


    /*
    |--------------------------------------------------------------------------
    | Delete Thread
    |--------------------------------------------------------------------------
    */

    Route::delete('/forum/{thread}', [ThreadController::class, 'destroy'])
        ->name('forum.destroy');


    /*
    |--------------------------------------------------------------------------
    | Store Reply / Comment
    |--------------------------------------------------------------------------
    |
    | Bisa digunakan untuk:
    | - komentar baru pada thread
    | - balasan komentar
    | - balasan terhadap balasan
    |
    */

    Route::post('/forum/{thread}/reply', [ReplyController::class, 'store'])
        ->name('forum.reply.store');


    /*
    |--------------------------------------------------------------------------
    | Delete Reply / Comment
    |--------------------------------------------------------------------------
    */

    Route::delete('/forum/reply/{reply}', [ReplyController::class, 'destroy'])
        ->name('forum.replies.destroy');


    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */

    Route::post('/notifications/{notification}/read', function ($notification) {

        $user = auth()->user();

        $notificationModel = $user->notifications()
            ->where('id', $notification)
            ->firstOrFail();

        $notificationModel->markAsRead();

        $threadSlug = $notificationModel->data['thread_slug'] ?? null;
        $replyId = $notificationModel->data['reply_id'] ?? null;

        if (!$threadSlug) {
            return redirect()->route('home');
        }

        $url = route('forum.show', $threadSlug);

        if ($replyId) {
            $url .= '#reply-' . $replyId;
        }

        return redirect($url);

    })->name('notifications.read');

});


/*
|--------------------------------------------------------------------------
| Forum - Detail Thread
|--------------------------------------------------------------------------
|
| HARUS diletakkan setelah:
| /forum/create
| /forum/{thread}/edit
| /forum/{thread}
|
| sehingga URL seperti /forum/create tidak dianggap sebagai slug.
|
*/

Route::get('/forum/{slug}', [ThreadController::class, 'show'])
    ->name('forum.show');


/*
|--------------------------------------------------------------------------
| Seminar - Public
|--------------------------------------------------------------------------
*/

Route::get('/seminar', [SeminarController::class, 'index'])
    ->name('seminar.index');

Route::get('/seminar/{slug}', [SeminarController::class, 'show'])
    ->name('seminar.show');


/*
|--------------------------------------------------------------------------
| Seminar Registration
|--------------------------------------------------------------------------
*/

Route::get('/seminar/{slug}/daftar', [SeminarRegistrationController::class, 'create'])
    ->name('seminar.register');

Route::post('/seminar/{slug}/daftar', [SeminarRegistrationController::class, 'store'])
    ->name('seminar.register.store');

Route::get('/seminar/{slug}/berhasil', [SeminarRegistrationController::class, 'success'])
    ->name('seminar.register.success');


/*
|--------------------------------------------------------------------------
| Konsultasi Bisnis - Public
|--------------------------------------------------------------------------
*/

Route::get('/konsultasi', [ConsultationController::class, 'create'])
    ->name('consultation.create');

Route::post('/konsultasi', [ConsultationController::class, 'store'])
    ->name('consultation.store');

Route::get('/konsultasi/berhasil', [ConsultationController::class, 'success'])
    ->name('consultation.success');


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
| Semua route admin:
| - harus login
| - harus memiliki role admin
|
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {


        /*
        |--------------------------------------------------------------------------
        | Admin Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | Seminar
        |--------------------------------------------------------------------------
        */

        Route::get('/seminar/seminars', [AdminSeminarController::class, 'index'])
            ->name('seminar.seminars');

        Route::get('/seminar/seminars/create', [AdminSeminarController::class, 'create'])
            ->name('seminar.seminars.create');

        Route::post('/seminar/seminars', [AdminSeminarController::class, 'store'])
            ->name('seminar.seminars.store');

        Route::get('/seminar/seminars/{seminar}', [AdminSeminarController::class, 'show'])
            ->name('seminar.seminars.show');

        Route::get('/seminar/seminars/{seminar}/edit', [AdminSeminarController::class, 'edit'])
            ->name('seminar.seminars.edit');

        Route::put('/seminar/seminars/{seminar}', [AdminSeminarController::class, 'update'])
            ->name('seminar.seminars.update');

        Route::delete('/seminar/seminars/{seminar}', [AdminSeminarController::class, 'destroy'])
            ->name('seminar.seminars.destroy');


        /*
        |--------------------------------------------------------------------------
        | Seminar Registrations
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/seminar/registrations',
            [AdminSeminarRegistrationController::class, 'index']
        )->name('seminar.registrations');

        Route::get(
            '/seminar/registrations/{registration}',
            [AdminSeminarRegistrationController::class, 'show']
        )->name('seminar.registrations.show');

        Route::patch(
            '/seminar/registrations/{registration}/status',
            [AdminSeminarRegistrationController::class, 'updateStatus']
        )->name('seminar.registrations.status');


        /*
        |--------------------------------------------------------------------------
        | Konsultasi
        |--------------------------------------------------------------------------
        */

        Route::get('/konsultasi', [AdminConsultationController::class, 'index'])
            ->name('consultation.index');

        Route::patch(
            '/konsultasi/{consultation}/status',
            [AdminConsultationController::class, 'updateStatus']
        )->name('consultation.status');

        Route::delete(
            '/konsultasi/{consultation}',
            [AdminConsultationController::class, 'destroy']
        )->name('consultation.destroy');


        /*
        |--------------------------------------------------------------------------
        | Forum Categories
        |--------------------------------------------------------------------------
        */

        Route::get('/forum/categories', [AdminCategoryController::class, 'index'])
            ->name('forum.categories');

        Route::get('/forum/categories/create', [AdminCategoryController::class, 'create'])
            ->name('forum.categories.create');

        Route::post('/forum/categories', [AdminCategoryController::class, 'store'])
            ->name('forum.categories.store');

        Route::get(
            '/forum/categories/{category}/edit',
            [AdminCategoryController::class, 'edit']
        )->name('forum.categories.edit');

        Route::put(
            '/forum/categories/{category}',
            [AdminCategoryController::class, 'update']
        )->name('forum.categories.update');

        Route::delete(
            '/forum/categories/{category}',
            [AdminCategoryController::class, 'destroy']
        )->name('forum.categories.destroy');


        /*
        |--------------------------------------------------------------------------
        | Forum Threads
        |--------------------------------------------------------------------------
        */

        Route::get('/forum/threads', [AdminThreadController::class, 'index'])
            ->name('forum.threads');

        Route::get(
            '/forum/threads/{thread}',
            [AdminThreadController::class, 'show']
        )->name('forum.threads.show');

        Route::get(
            '/forum/threads/{thread}/edit',
            [AdminThreadController::class, 'edit']
        )->name('forum.threads.edit');

        Route::put(
            '/forum/threads/{thread}',
            [AdminThreadController::class, 'update']
        )->name('forum.threads.update');

        Route::patch(
            '/forum/threads/{thread}/pin',
            [AdminThreadController::class, 'togglePin']
        )->name('forum.threads.pin');

        Route::delete(
            '/forum/threads/{thread}',
            [AdminThreadController::class, 'destroy']
        )->name('forum.threads.destroy');


        /*
        |--------------------------------------------------------------------------
        | Forum Replies
        |--------------------------------------------------------------------------
        */

        Route::get('/forum/replies', [AdminReplyController::class, 'index'])
            ->name('forum.replies');

        Route::delete(
            '/forum/replies/{reply}',
            [AdminReplyController::class, 'destroy']
        )->name('forum.replies.destroy');


        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */

        Route::get('/users', [AdminUserController::class, 'index'])
            ->name('users');

        Route::get('/users/{user}', [AdminUserController::class, 'show'])
            ->name('users.show');

        Route::delete(
            '/users/{user}',
            [AdminUserController::class, 'destroy']
        )->name('users.destroy');


        /*
        |--------------------------------------------------------------------------
        | Banners
        |--------------------------------------------------------------------------
        */

        Route::get('/banners', [AdminBannerController::class, 'index'])
            ->name('banners.index');

        Route::get('/banners/create', [AdminBannerController::class, 'create'])
            ->name('banners.create');

        Route::post('/banners', [AdminBannerController::class, 'store'])
            ->name('banners.store');

        Route::get(
            '/banners/{banner}/edit',
            [AdminBannerController::class, 'edit']
        )->name('banners.edit');

        Route::put(
            '/banners/{banner}',
            [AdminBannerController::class, 'update']
        )->name('banners.update');

        Route::delete(
            '/banners/{banner}',
            [AdminBannerController::class, 'destroy']
        )->name('banners.destroy');

        Route::patch(
            '/banners/{banner}/status',
            [AdminBannerController::class, 'toggleStatus']
        )->name('banners.status');


        /*
        |--------------------------------------------------------------------------
        | Testimonials
        |--------------------------------------------------------------------------
        */

        Route::get('/testimonials', [AdminTestimonialController::class, 'index'])
            ->name('testimonials.index');

        Route::get(
            '/testimonials/create',
            [AdminTestimonialController::class, 'create']
        )->name('testimonials.create');

        Route::post(
            '/testimonials',
            [AdminTestimonialController::class, 'store']
        )->name('testimonials.store');

        Route::get(
            '/testimonials/{testimonial}/edit',
            [AdminTestimonialController::class, 'edit']
        )->name('testimonials.edit');

        Route::put(
            '/testimonials/{testimonial}',
            [AdminTestimonialController::class, 'update']
        )->name('testimonials.update');

        Route::delete(
            '/testimonials/{testimonial}',
            [AdminTestimonialController::class, 'destroy']
        )->name('testimonials.destroy');

        Route::patch(
            '/testimonials/{testimonial}/status',
            [AdminTestimonialController::class, 'toggleStatus']
        )->name('testimonials.status');

    });


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| Laravel Breeze
|
*/

require __DIR__ . '/auth.php';