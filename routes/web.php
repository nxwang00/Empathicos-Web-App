<?php

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

/**
|-----------------------------------------------
| Store Un Authenticated Routes.......
|-----------------------------------------------
 */

Route::group(['namespace' => 'Web\Store',], function () {

    /**
    |-----------------------------------------------
    | Promo Code Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Promo'], function () {
        Route::get('promo/', 'PromoController@index')->name('promo');
        Route::post('promo/submit', 'PromoController@submit')->name('promo.submit');
    });


    Route::group(['middleware' => ['promo']], function () {
        /**
        |-----------------------------------------------
        | Home Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Home'], function () {
            Route::get('/', 'HomeController@index')->name('home');
            Route::get('category/{id}', 'HomeController@category')->name('home.category');
            Route::get('badge/{id}/show', 'HomeController@badge')->name('home.badge.show');
        });


        /**
        |-----------------------------------------------
        | Article Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Article'], function () {
            Route::get('article', 'ArticleController@index')->name('article');
            Route::get('article/search', 'ArticleController@search')->name('home.article.search');
            Route::get('article/{slug}', 'ArticleController@show')->name('article.show');
        });

        /**
        |-----------------------------------------------
        | Course Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Course'], function () {
            Route::get('course', 'CourseController@index')->name('course');
            Route::get('course/search', 'CourseController@search')->name('home.course.search');
            Route::get('course/{id}', 'CourseController@show')->name('course.show');
        });

        /**
        |-----------------------------------------------
        | Contact Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Contact'], function () {
            Route::get('contact', 'ContactController@index')->name('contact');
            Route::post('contact/send', 'ContactController@send')->name('contact.send');
        });

        /**
        |-----------------------------------------------
        | About Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'About'], function () {
            Route::get('about/{id}', 'AboutController@show')->name('about.show');
        });

        /**
        |-----------------------------------------------
        | Product Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Product'], function () {
            Route::get('product', 'ProductController@index')->name('product');
            Route::get('product/{id}', 'ProductController@show')->name('product.show');
        });


        /**
        |-----------------------------------------------
        | Faq Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Faq'], function () {
            Route::get('faqs', 'FaqController@index')->name('faqs');
        });

        /**
        |-----------------------------------------------
        | Item Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Item'], function () {
            Route::get('items', 'ItemController@index')->name('items.index');
            Route::post('items/add', 'ItemController@add')->name('items.add');
            Route::post('items/update', 'ItemController@update')->name('items.update');
            Route::post('items/remove', 'ItemController@remove')->name('items.remove');
            Route::post('items/clear', 'ItemController@clear')->name('items.clear');
        });

         /**
        |-----------------------------------------------
        | Invitation Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Invitation'], function () {
            Route::get('invitation/accept/{id}', 'InvitationController@accept')->name('invitation.accept');
        });

        /**
        |-----------------------------------------------
        | Badge Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Badge'], function () {
            Route::get('characters', 'BadgeController@index')->name('badges');
            Route::get('characters/show/{id}', 'BadgeController@show')->name('badges.show');
            Route::get('character-templates/{id}/show', 'BadgeController@templates')->name('badge.templates.show');
            Route::post('characters/favorites/{id}', 'BadgeController@favorites')->name('badges.favorites');
        });

        /**
        |-----------------------------------------------
        | Favorite Routes.......
        |-----------------------------------------------
         */
        Route::group(['namespace' => 'Favorite'], function () {
            Route::get('favorites', 'FavoriteController@index')->name('favorites');
        });

        /**
        |-----------------------------------------------
        | Authentication Routes.......
        |-----------------------------------------------
         */

        Route::group(['namespace' => 'Auth'], function () {
            /**
            |-----------------------------------------------
            | Login Routes.......
            |-----------------------------------------------
             */
            Route::get('signin', 'LoginController@showLoginForm')->name('signin');
            Route::post('signin', 'LoginController@login');
            Route::post('logout', 'LoginController@logout')->name('logout');

            /**
            |-----------------------------------------------
            | Registration Routes.......
            |-----------------------------------------------
             */
            Route::get('signup', 'RegisterController@showRegistrationForm')->name('signup');
            Route::post('signup', 'RegisterController@register');

            /**
            |-----------------------------------------------
            | Password Reset Routes.......
            |-----------------------------------------------
             */
            Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
            Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
            Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

            /**
            |-----------------------------------------------
            | Email Verification Routes.......
            |-----------------------------------------------
             */
            // Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
            // Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
            // Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');

        });
    });
});

/**
|-----------------------------------------------
| Authenticated Routes.......
|-----------------------------------------------
 */
Route::group(['namespace' => 'Web\Store', 'middleware' => ['auth:web']], function () {
 /**
    |-----------------------------------------------
    | Profile Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Profile'], function () {
        Route::get('profile', 'ProfileController@index')->name('profile');
        Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
        Route::post('profile/update', 'ProfileController@update')->name('profile.update');
    });

    /**
    |-----------------------------------------------
    | Invitation Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Invitation'], function () {
        Route::get('invitation', 'InvitationController@index')->name('invitation');
        Route::post('invitation/send', 'InvitationController@send')->name('invitation.send');
    });

    /**
    |-----------------------------------------------
    | Feedback Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Feedback'], function () {
        Route::get('feedback', 'FeedbackController@index')->name('feedback');
        Route::post('feedback/send', 'FeedbackController@send')->name('feedback.send');
    });

    /**
    |-----------------------------------------------
    | Review Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Review'], function () {
        Route::post('review/send', 'ReviewController@send')->name('review.send');
    });



    /**
    |-----------------------------------------------
    | Payment Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Payment'], function () {
        Route::get('payments', 'PaymentController@index')->name('payments.index');
        Route::post('payments/process', 'PaymentController@process')->name('payments.process');
        Route::get('payments/status', 'PaymentController@status')->name('payments.status');

        //paypal payment...
        Route::post('payments/paypal', 'PaypalController@pay')->name('payments.paypal');
        Route::get('payments/paypal/cancel', 'PaypalController@cancel')->name('payments.paypal.cancel');
        Route::get('payments/paypal/return', 'PaypalController@return')->name('payments.paypal.return');
    });

});




/**
|-----------------------------------------------
| Dashboard Un Authenticated Routes.......
|-----------------------------------------------
 */

Route::group(['namespace' => 'Web\Dashboard', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    /**
    |-----------------------------------------------
    | Authentication Routes.......
    |-----------------------------------------------
     */

    Route::group(['namespace' => 'Auth'], function () {

        /**
        |-----------------------------------------------
        | Login Routes.......
        |-----------------------------------------------
         */
        Route::get('/', 'LoginController@showLoginForm');
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('logout');

    });
});

/**
|-----------------------------------------------
| Authenticated Routes.......
|-----------------------------------------------
 */
Route::group(['namespace' => 'Web\Dashboard', 'middleware' => ['auth:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    /**
    |-----------------------------------------------
    | Dashboard Routes.......
    |-----------------------------------------------
     */
    // Route::get('admin', 'DashboardController@index');
    Route::get('dashboard', 'DashboardController@index')->name('app.dashboard');

    /**
    |-----------------------------------------------
    | Profile Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'User\Profile'], function () {
        Route::get('user/profile', 'ProfileController@show')->name('user.profile.show');
        Route::get('user/profile/edit', 'ProfileController@edit')->name('user.profile.edit');
        Route::post('user/profile/update', 'ProfileController@update')->name('user.profile.update');
    });

    /**
    |-----------------------------------------------
    | User Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'User'], function () {
        Route::post('users/status/{user}', 'UserController@status')->name('users.status');
        Route::resource('users', 'UserController');

        Route::get('users/notification/create', 'UserController@notificationView')->name('users.notificationcreate');
        Route::post('users/notification/store', 'UserController@sendPushNotification')->name('users.notificationstore');
    });

    /**
    |-----------------------------------------------
    | Article Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Article'], function () {
        Route::post('articles/status/{article}', 'ArticleController@status')->name('articles.status');
        Route::resource('articles', 'ArticleController');
    });

    /**
    |-----------------------------------------------
    | Faq Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Faq'], function () {
        Route::post('faqs/status/{faq}', 'FaqController@status')->name('faqs.status');
        Route::resource('faqs', 'FaqController');
    });

    /**
    |-----------------------------------------------
    | Category Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Category'], function () {
        Route::post('categories/status/{category}', 'CategoryController@status')->name('categories.status');
        Route::resource('categories', 'CategoryController');
    });

    /**
    |-----------------------------------------------
    | Product Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Product'], function () {
        Route::delete('products/galleries/delete/{id}', 'ProductController@deleteImage')->name('products.galleries.delete');
        Route::post('products/status/{product}', 'ProductController@status')->name('products.status');
        Route::resource('products', 'ProductController');
    });

    /**
    |-----------------------------------------------
    | Review Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Review'], function () {
        Route::post('reviews/status/{review}', 'ReviewController@status')->name('reviews.status');
        Route::resource('reviews', 'ReviewController')->only('index', 'destroy');
    });

    /**
    |-----------------------------------------------
    | About Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'About'], function () {
        Route::post('abouts/status/{about}', 'AboutController@status')->name('abouts.status');
        Route::resource('abouts', 'AboutController');
    });

    /**
    |-----------------------------------------------
    | Badge Category Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'BadgeCategory'], function () {
        Route::post('badge-categories/status/{badge_category}', 'BadgeCategoryController@status')->name('badge-categories.status');
        Route::get('badge-categories/templates/{badge_category}', 'BadgeCategoryController@templates')->name('badge-categories.templates');
        Route::resource('badge-categories', 'BadgeCategoryController');
    });

    /**
    |-----------------------------------------------
    | Badge Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Badge'], function () {
        Route::post('badges/status/{badge}', 'BadgeController@status')->name('badges.status');
        Route::get('badges/templates/{badge}', 'BadgeController@templates')->name('badges.templates');
        Route::resource('badges', 'BadgeController');
    });

    /**
    |-----------------------------------------------
    | Badge Template Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'BadgeTemplate'], function () {
        Route::post('badge-templates/get', 'BadgeTemplateController@get')->name('badge-templates.get');
        Route::post('badge-templates/status/{badge_template}', 'BadgeTemplateController@status')->name('badge-templates.status');
        Route::resource('badge-templates', 'BadgeTemplateController');
    });

    /**
    |-----------------------------------------------
    | Template Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Template'], function () {
        Route::post('templates/get', 'TemplateController@get')->name('templates.get');
        Route::resource('templates', 'TemplateController');
    });

    /**
    |-----------------------------------------------
    | Content Routes.......
    |-----------------------------------------------
     */
    // Route::group(['namespace' => 'Content'], function () {
    //     Route::post('contents/get', 'ContentController@get')->name('contents.get');
    //     Route::resource('contents', 'ContentController');
    //     Route::get('contents/categories/{main_cat_id}', 'ContentController@getCategoriesByMain')->name('contents.categories.main');
    // });

    /**
    |-----------------------------------------------
    | Feedback Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Feedback'], function () {
        Route::resource('feedbacks', 'FeedbackController')->only('index', 'destroy');
    });

    /**
    |-----------------------------------------------
    | Payment Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Payment'], function () {
        Route::post('payments/status/{payment}', 'PaymentController@status')->name('payments.status');
        Route::resource('payments', 'PaymentController')->only('index', 'destroy', 'show');
    });

    /**
    |-----------------------------------------------
    | Settings Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Setting'], function () {
        Route::get('settings', 'SettingController@index')->name('settings.index');
        Route::post('settings/update', 'SettingController@update')->name('settings.update');
    });



    /**
    |-----------------------------------------------
    | Main Category Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'MainCategory'], function () {
        // Route::post('badge-categories/status/{badge_category}', 'BadgeCategoryController@status')->name('badge-categories.status');
        // Route::get('badge-categories/templates/{badge_category}', 'BadgeCategoryController@templates')->name('badge-categories.templates');
        Route::resource('main-categories', 'MainCategoryController');
        Route::post('main-categories/update', 'MainCategoryController@updatedata')->name('main-categories.update');
    });


     /**
    |-----------------------------------------------
    | Main Sub Category Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Mainsubcategory'], function () {
        // Route::post('badge-categories/status/{badge_category}', 'BadgeCategoryController@status')->name('badge-categories.status');
        // Route::get('badge-categories/templates/{badge_category}', 'BadgeCategoryController@templates')->name('badge-categories.templates');
        Route::resource('main-subcategories', 'MainsubcategoryController');
        Route::post('main-categories/updatedata', 'MainsubcategoryController@updatedata')->name('main-subcategories.updatedata');
    });



         /**
    |-----------------------------------------------
    | Audio course......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Audiocourse'], function () {
        // Route::post('badge-categories/status/{badge_category}', 'BadgeCategoryController@status')->name('badge-categories.status');
        // Route::get('badge-categories/templates/{badge_category}', 'BadgeCategoryController@templates')->name('badge-categories.templates');
        Route::resource('audio-course', 'AudiocourseController');
        Route::post('audio-course/updatedata', 'AudiocourseController@updatedata')->name('audio-courses.updatedata');
    });

          /**
    |-----------------------------------------------
    | Audio course category......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Audiocategory'], function () {
        // Route::post('badge-categories/status/{badge_category}', 'BadgeCategoryController@status')->name('badge-categories.status');
        // Route::get('badge-categories/templates/{badge_category}', 'BadgeCategoryController@templates')->name('badge-categories.templates');
        Route::resource('audio-course-category', 'AudiocategoryController');
        Route::post('audio-course-category/updatedata', 'AudiocategoryController@updatedata')->name('audio-course-category.updatedata');
    });



});

// Route::get('setup-fresh', function () {
//     Artisan::call('clear-compiled');
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('view:clear');
//     Artisan::call('logs:clear');
//     Artisan::call('l5-swagger:generate');
//     // Artisan::call('migrate:fresh --seed');
//     return redirect('login')->with('success', 'Setup is completed, Please login.');
// });


Route::get('send-test-mail', function () {

    // return new \App\Mail\TestMail();

    \Mail::to('ajay.lowanshi@thedetmail.com', 'Developer')
            //->cc('bhaskar@digitalelitellp.com', 'Sr Developer')
            ->send(new \App\Mail\TestMail());

    // dd("Mail sent!");

    // \Mail::send([], [], function ($message) {
    //     $message->to('ajay.lowanshi@thedetmail.com', 'Developer')
    //         ->cc('bhaskar@digitalelitellp.com', 'Sr Developer')
    //         ->subject('Mail Testing ')
    //         ->setBody('Hi')
    //         ->setBody('<h1>Congratulations! Mail is working...</h1>', 'text/html');
    // });
    return redirect('login')->with('success', 'Mail is Sent, Please login.');
});
