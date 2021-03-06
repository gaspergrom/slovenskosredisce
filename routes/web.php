<?php

Route::get('/', 'PagesController@home');

Route::prefix('sredisce')->group(function () {
    Route::prefix('predstavitev')->group(function () {
        Route::get('/', function () {
            return view('pages.center.presentation.index');
        });
        Route::get('katar', function () {
            return view('pages.center.presentation.qatar');
        });
        Route::get('poljska', function () {
            return view('pages.center.presentation.poland');
        });
        Route::get('brazilija', function () {
            return view('pages.center.presentation.brazil');
        });
        Route::get('hrvaska', function () {
            return view('pages.center.presentation.croatia');
        });
    });
    Route::get('vodstvo_in_ekipa', 'PagesController@team');
    Route::prefix('poslovno_sredisce')->group(function () {
        Route::get('/', function () {
            return view('pages.center.business.presentation');
        });
        Route::get('dogodki', 'PagesController@business_events');
        Route::get('sodelujoci', 'PagesController@sponsors');
        Route::get('poslovno_slovenija_hrvaska', function () {
            return view('pages.center.business.slo_cro');
        });
    });
    Route::get('navijasko_sredisce', function () {
        return view('pages.center.fans');
    });
    Route::get('slovensko_sredisce_dogodki', 'PagesController@slo_events');
});

Route::prefix('navijaci')->group(function () {
    Route::get('/', function () {
        return view('pages.fans.presentation');
    });
    Route::get('dogodki', 'PagesController@fans_events');
});

Route::prefix('slovenija')->group(function () {
    Route::get('/', function () {
        return view('pages.slovenia.presentation');
    });
    Route::get('poslovno_okolje', function () {
        return view('pages.slovenia.business');
    });
    Route::get('turizem', function () {
        return view('pages.slovenia.tourism');
    });
});

Route::prefix('rokomet_v_sloveniji')->group(function () {
    Route::get('/', function () {
        return view('pages.handball_slovenia.handball');
    });
    Route::get('reprezentance', function () {
        return view('pages.handball_slovenia.teams');
    });
    Route::get('klubska_tekmovanja', function () {
        return view('pages.handball_slovenia.club_competitions');
    });
    Route::get('mladi', function () {
        return view('pages.handball_slovenia.youth');
    });
});

Route::prefix('multimedija')->group(function () {
    Route::get('galerija', 'PagesController@gallery');
    Route::get('galerija/{gallery}', 'PagesController@singleGallery');
    Route::get('videoposnetki', 'PagesController@videos');
});

Route::get('kontakt', function () {
    return view('pages.contact');
});

Route::post('kontakt', 'PagesController@contact');

Route::get('novice', 'PagesController@news');
Route::get('novice/{post}', 'PagesController@post');
Route::get('events', 'PagesController@events');
Route::get('events/{event}', 'PagesController@event');

Route::get('locale/{locale}', function ($locale) {
    $cookie = cookie('locale', $locale, 60 * 24 * 365 * 5);

    return redirect()->back()->withCookie($cookie);
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::middleware('auth')->group(function () {
        Route::resource('dogodki', 'EventController');
        Route::resource('vodstvo', 'LeadershipController');
        Route::resource('sponzorji', 'SponsorController');
        Route::resource('novice', 'PostController');
        Route::resource('galerija', 'GalleryController');
        Route::resource('videoposnetki', 'VideoController');
        Route::resource('poslovni', 'BusinessEventsController');
        Route::delete('/images/{image}', 'GalleryController@deleteImage');
    });
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
