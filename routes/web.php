<?php

Route::get('/', 'PagesController@home');

Route::prefix('sredisce')->group(function() {
    Route::prefix('predstavitev')->group(function() {
        Route::get('/', function() {
            return view('pages.center.presentation.index');
        });
        Route::get('katar', function() {
            return view('pages.center.presentation.qatar');
        });
        Route::get('poljska', function() {
            return view('pages.center.presentation.poland');
        });
        Route::get('brazilija', function() {
            return view('pages.center.presentation.brazil');
        });
        Route::get('hrvaska', function() {
            return view('pages.center.presentation.croatia');
        });
    });
    Route::get('vodstvo_in_ekipa', 'PagesController@team');
    Route::prefix('poslovno_sredisce')->group(function() {
        Route::get('/', function() {
            return view('pages.center.business.presentation');
        });
        Route::get('dogodki', 'PagesController@business_events');
        Route::get('sodelujoci', 'PagesController@sponsors');
        Route::get('poslovno_slovenija_hrvaska', function() {
            return view('pages.center.business.slo_cro');
        });
    });
    Route::get('navijasko_sredisce', function() {
        return view('pages.center.fans');
    });
    Route::get('slovensko_sredisce_dogodki', function() {
        return view('pages.center.events');
    });
});

Route::prefix('navijaci')->group(function() {
    Route::get('/', function() {
        return view('pages.fans.presentation');
    });
    Route::get('dogodki', function() {
        return view('pages.fans.events');
    });
});

Route::prefix('slovenija')->group(function() {
    Route::get('/', function() {
        return view('pages.slovenia.presentation');
    });
    Route::get('poslovno_okolje', function() {
        return view('pages.slovenia.business');
    });
    Route::get('turizem', function() {
        return view('pages.slovenia.tourism');
    });
});

Route::prefix('rokomet_v_sloveniji')->group(function() {
    Route::get('/', function() {
        return view('pages.handball_slovenia.handball');
    });
    Route::get('reprezentance', function() {
        return view('pages.handball_slovenia.teams');
    });
    Route::get('klubska_tekmovanja', function() {
        return view('pages.handball_slovenia.club_competitions');
    });
    Route::get('mladi', function() {
        return view('pages.handball_slovenia.youth');
    });
});

Route::prefix('multimedija')->group(function() {
    Route::get('galerija', function() {
        return view('pages.multimedia.gallery');
    });
    Route::get('videoposnetki', function() {
        return view('pages.multimedia.videos');
    });
});

Route::get('kontakt', function() {
    return view('pages.contact');
});

Route::get('novice', function() {
    return view('pages.news');
});

Route::prefix('admin')->group(function() {
    Route::get('/', function() {

    });
    Route::middleware('auth')->group(function() {
        Route::resource('events', 'EventController');
        Route::resource('leadership', 'LeadershipController');
        Route::resource('sponsors', 'SponsorController');
        Route::resource('posts', 'PostController');
    });
});