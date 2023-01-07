<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

/**
|-----------------------------------------------
| Auth Routes...
|-----------------------------------------------
 */
Route::group(['namespace' => 'Api\Store\v1\Auth', 'middleware' => 'api', 'prefix' => 'store/v1/auth'], function () {
    /**
    |-----------------------------------------------
    | Sign In Routes.......
    |-----------------------------------------------
     */
    Route::post('signin', 'SigninController@signin');


    /**
    |-----------------------------------------------
    | Sign Up Routes.......
    |-----------------------------------------------
     */
    Route::post('signup', 'SignupController@signup');
    Route::post('register', 'SignupController@register');

    /**
    |-----------------------------------------------
    | Forgot & Reset Password Routes.......
    |-----------------------------------------------
     */
    Route::group(['prefix' => 'password'], function () {

        //Email Password...
        Route::post('email', 'PasswordResetController@email');


        //Reset Password...
        Route::get('find/{token}', 'PasswordResetController@find');
        Route::post('reset', 'PasswordResetController@reset');

    });

});

/**
|-----------------------------------------------
| Auth Sign Out Routes.......
|-----------------------------------------------
 */
Route::group(['namespace' => 'Api\Store\v1\Auth', 'middleware' => 'auth:api', 'prefix' => 'store/v1/auth'], function () {
    Route::get('signout', 'SigninController@signout');
});

















Route::group(['namespace' => 'Api\Store\v1', 'middleware' => 'auth:api', 'prefix' => 'store/v1'], function () {

    /**
    |-----------------------------------------------
    | BadgeCategory Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'BadgeCategory'], function () {
        Route::get('journeys', 'BadgeCategoryController@index');
        Route::get('journey/{id}', 'BadgeCategoryController@journey');
    });

    /**
    |-----------------------------------------------
    | Article Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Article'], function () {
        Route::apiResource('articles', 'ArticleController')->only('index','show');
    });

    /**
    |-----------------------------------------------
    | Badges Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Badge'], function () {
        Route::get('badge-templates/{id}', 'BadgeController@templates');
        Route::post('badges/favorites', 'BadgeController@favorites');
        Route::post('badges/save/{id}', 'BadgeController@save');
        Route::get('badges', 'BadgeController@index');
        Route::get('badge/{id}', 'BadgeController@show');
        // Route::apiResource('badges', 'BadgeController')->only('index','show');
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
    | Faq Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Faq'], function () {
        Route::apiResource('faqs', 'FaqController')->only('index');
    });

    /**
    |-----------------------------------------------
    | Product Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Product'], function () {
        Route::apiResource('products', 'ProductController')->only('index','show');
    });

    /**
    |-----------------------------------------------
    | About Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'About'], function () {
        Route::apiResource('abouts', 'AboutController')->only('index','show');
    });


    /**
    |-----------------------------------------------
    | Profile Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Profile'], function () {
        Route::get('profile','ProfileController@profile');
        Route::post('/profile','ProfileController@update');
    });


    /**
    |-----------------------------------------------
    | Feedback Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Feedback'], function () {
        Route::post('feedback/send', 'FeedbackController@send')->name('feedback.send');
    });


    /**
    |-----------------------------------------------
    | Invitation Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Invitation'], function () {
        Route::post('invitation/send', 'InvitationController@send')->name('invitation.send');
    });


    /**
    |-----------------------------------------------
    | Payment Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Payment'], function () {
        Route::post('payment/create', 'PaymentController@create')->name('payment.create');
    });



    /**
    |-----------------------------------------------
    | Main Categories Routes.......
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'MainCat'], function () {
        Route::get('dashboard-category', 'MaincatController@get')->name('maincat.get');
        Route::get('dashboard-subcategory/{cat_id}', 'MaincatController@getSubCategories')->name('mainsubcatcat.get');
        Route::get('dashboard-category/personal-message', 'MaincatController@getPersonalMessage');
    });

     /**
    |-----------------------------------------------
    | Audio course........
    |-----------------------------------------------
     */
    Route::group(['namespace' => 'Audiocourse'], function () {
        Route::get('audio-course/categories', 'AudiocourseController@getCategories')->name('audiocat.get');
        Route::get('audio-course/by-category/{cat_id}', 'AudiocourseController@getCategoryCourses')->name('audiobycat.get');
    });





    // /**
    // |-----------------------------------------------
    // | User Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'User'], function () {
    //     Route::apiResource('users', 'UserController')->only('show', 'update');
    // });

    // /**
    // |-----------------------------------------------
    // | About Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'About'], function () {
    //     Route::apiResource('abouts', 'AboutController')->only('show');
    // });

    // /**
    // |-----------------------------------------------
    // | Badges Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'Badge'], function () {
    //     Route::apiResource('badges', 'BadgeController')->only('index');
    // });

    // /**
    // |-----------------------------------------------
    // | Card Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'Card'], function () {
    //     Route::apiResource('cards', 'CardController')->only('index');
    // });

    // /**
    // |-----------------------------------------------
    // | Book Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'Book'], function () {
    //     Route::apiResource('books', 'BookController')->only('index');
    // });

    // /**
    // |-----------------------------------------------
    // | Favorite Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'Favorite'], function () {
    //     Route::apiResource('favorites', 'FavoriteController')->only('index', 'store', 'destroy');
    // });

    // /**
    // |-----------------------------------------------
    // | Feedback Routes.......
    // |-----------------------------------------------
    //  */
    // Route::group(['namespace' => 'Feedback'], function () {
    //     Route::apiResource('feedbacks', 'FeedbackController')->only('store');
    // });



});
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

// Route::group(['namespace' => 'Api\v1\Auth', 'middleware' => 'api', 'prefix' => 'v1/auth'], function () {
//     /**
//     |-----------------------------------------------
//     | Auth Routes.......
//     |-----------------------------------------------
//      */
//     Route::post('signup', 'AuthController@signup');
//     Route::post('signin', 'AuthController@signin');
//     Route::post('verify', 'AuthController@verify');

// });

// Route::group(['namespace' => 'Api\v1','middleware' => 'api','prefix' => 'v1'], function () {

//     /**
//     |-----------------------------------------------
//     | Guests Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Guest'], function () {
//         Route::apiResource('guests', 'GuestController');
//     });

//     /**
//     |-----------------------------------------------
//     | Worxcodes Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Worxcode'], function () {
//         Route::apiResource('worxcodes', 'WorxcodeController');
//     });

//     /**
//     |-----------------------------------------------
//     | PmChecklists Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'PmChecklist'], function () {
//         Route::get('/password/result/{pmchecklist}','PmChecklistController@result')->name('pmchecklists.result');
//         Route::post('/password/tasks','PmChecklistController@tasks')->name('pmchecklists.tasks');
//         Route::apiResource('pmchecklists', 'PmChecklistController');
//     });

//     /**
//     |-----------------------------------------------
//     | Subscription Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Subscription'], function () {
//         Route::apiResource('subscriptions', 'SubscriptionController');
//     });

//     /**
//     |-----------------------------------------------
//     | Tenant Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Tenant'], function () {
//         Route::apiResource('tenants', 'TenantController');
//     });

//      /**
//     |-----------------------------------------------
//     | Department Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Department'], function () {
//         Route::apiResource('departments', 'DepartmentController');
//     });

//      /**
//     |-----------------------------------------------
//     | Area Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Area'], function () {
//         Route::apiResource('areas', 'AreaController');
//     });

//      /**
//     |-----------------------------------------------
//     | Device Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Device'], function () {
//         Route::apiResource('devices', 'DeviceController');
//     });

//     /**
//     |-----------------------------------------------
//     | Property Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Property'], function () {
//         Route::apiResource('properties', 'PropertyController');
//     });

//     /**
//     |-----------------------------------------------
//     | Message Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Message'], function () {
//         Route::apiResource('messages', 'MessageController');
//     });

//     /**
//     |-----------------------------------------------
//     | Plan Routes.......
//     |-----------------------------------------------
//      */
//     Route::group(['namespace' => 'Plan'], function () {
//         Route::apiResource('plans', 'PlanController');
//     });

// });
