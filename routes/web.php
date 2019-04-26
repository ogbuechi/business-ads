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


Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/b2b_sales', function () {
    return view('b2b_sales');
});
Route::get('/b2b_invests', function () {
    return view('b2b_invests');
});

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('complete_registration', 'UsersController@companyReg')->name('user.complete.reg')->middleware('verified');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('dashboard', 'AdminController@index')->name('admin.home')->middleware('verified');

Route::post('multifileupload', 'HomeController@store')->name('multifileupload');

//['middleware' => ['role:admin']],
Route::group([ 'prefix' => 'dashboard','middleware' => ['auth', 'level:1','verified']], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/upgrade_account', 'AdminController@upgrade_account')->name('admin.account.upgrade');
    Route::get('/media', 'AdminController@media')->name('admin.media');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::get('/my_profile', 'ProfilesController@myProfile')->name('profiles.profile.myprofile');
    Route::get('/coming-soon', 'AdminController@soon')->name('coming');
    Route::get('/patient/create', 'ProfilesController@patientCreate')->name('patients.patient.create');
    Route::get('/patient/all', 'UsersController@patients')->name('patients.patient.index');
    Route::get('/publishers', 'UsersController@publishers')->name('publishers.index');
    Route::get('/patient/show/{patient}','UsersController@show')->name('patients.patient.show')->where('id', '[0-9]+');
    Route::get('/edit_profile', 'ProfilesController@editMyProfile')->name('profiles.profile.edit_my_profile');
    Route::group(['prefix' => 'profiles',], function () {
    Route::get('/', 'ProfilesController@index')->name('profiles.profile.index');
    Route::get('/create','ProfilesController@create')->name('profiles.profile.create');
    Route::get('/show/{profile}','ProfilesController@show')->name('profiles.profile.show')->where('id', '[0-9]+');
    Route::get('/{profile}/edit','ProfilesController@edit')->name('profiles.profile.edit')->where('id', '[0-9]+');
    Route::post('/', 'ProfilesController@store')->name('profiles.profile.store');
    Route::put('profile/{profile}', 'ProfilesController@update')->name('profiles.profile.update')->where('id', '[0-9]+');
    Route::delete('/profile/{profile}','ProfilesController@destroy')->name('profiles.profile.destroy')->where('id', '[0-9]+');
});
    Route::group(
        [
            'prefix' => 'categories',
        ], function () {

        Route::get('/', 'CategoriesController@index')
            ->name('categories.category.index');

        Route::get('/create','CategoriesController@create')
            ->name('categories.category.create');

        Route::get('/show/{category}','CategoriesController@show')
            ->name('categories.category.show')
            ->where('id', '[0-9]+');

        Route::get('/{category}/edit','CategoriesController@edit')
            ->name('categories.category.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'CategoriesController@store')
            ->name('categories.category.store');

        Route::put('category/{category}', 'CategoriesController@update')
            ->name('categories.category.update')
            ->where('id', '[0-9]+');

        Route::delete('/category/{category}','CategoriesController@destroy')
            ->name('categories.category.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'invests',
        ], function () {

        Route::get('/', 'InvestsController@index')
            ->name('invests.invest.index');

        Route::get('/myads', 'InvestsController@myAds')
            ->name('invests.invest.myads');

        Route::get('/create','InvestsController@create')
            ->name('invests.invest.create');

        Route::get('/show/{invest}','InvestsController@show')
            ->name('invests.invest.show')
            ->where('id', '[0-9]+');

        Route::get('/my_ad/show/{invest}','InvestsController@showMyAd')
            ->name('invests.invest.show_my_ad')
            ->where('id', '[0-9]+');

        Route::get('/{invest}/edit','InvestsController@edit')
            ->name('invests.invest.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'InvestsController@store')
            ->name('invests.invest.store');

        Route::put('invest/{invest}', 'InvestsController@update')
            ->name('invests.invest.update')
            ->where('id', '[0-9]+');

        Route::delete('/invest/{invest}','InvestsController@destroy')
            ->name('invests.invest.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'companies',
        ], function () {

        Route::get('/', 'CompaniesController@index')
            ->name('companies.company.index');

        Route::get('/create','CompaniesController@create')
            ->name('companies.company.create');

        Route::get('/show/{company}','CompaniesController@show')
            ->name('companies.company.show')
            ->where('id', '[0-9]+');

        Route::get('/{company}/edit','CompaniesController@edit')
            ->name('companies.company.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'CompaniesController@store')
            ->name('companies.company.store');

        Route::put('company/{company}', 'CompaniesController@update')
            ->name('companies.company.update')
            ->where('id', '[0-9]+');

        Route::delete('/company/{company}','CompaniesController@destroy')
            ->name('companies.company.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'company_cats',
        ], function () {

        Route::get('/', 'CompanyCatsController@index')
            ->name('company_cats.company_cat.index');

        Route::get('/create','CompanyCatsController@create')
            ->name('company_cats.company_cat.create');

        Route::get('/show/{companyCat}','CompanyCatsController@show')
            ->name('company_cats.company_cat.show')
            ->where('id', '[0-9]+');

        Route::get('/{companyCat}/edit','CompanyCatsController@edit')
            ->name('company_cats.company_cat.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'CompanyCatsController@store')
            ->name('company_cats.company_cat.store');

        Route::put('company_cat/{companyCat}', 'CompanyCatsController@update')
            ->name('company_cats.company_cat.update')
            ->where('id', '[0-9]+');

        Route::delete('/company_cat/{companyCat}','CompanyCatsController@destroy')
            ->name('company_cats.company_cat.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'company_sub_cats',
        ], function () {

        Route::get('/', 'CompanySubCatsController@index')
            ->name('company_sub_cats.company_sub_cat.index');

        Route::get('/create','CompanySubCatsController@create')
            ->name('company_sub_cats.company_sub_cat.create');

        Route::get('/show/{companySubCat}','CompanySubCatsController@show')
            ->name('company_sub_cats.company_sub_cat.show')
            ->where('id', '[0-9]+');

        Route::get('/{companySubCat}/edit','CompanySubCatsController@edit')
            ->name('company_sub_cats.company_sub_cat.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'CompanySubCatsController@store')
            ->name('company_sub_cats.company_sub_cat.store');

        Route::put('company_sub_cat/{companySubCat}', 'CompanySubCatsController@update')
            ->name('company_sub_cats.company_sub_cat.update')
            ->where('id', '[0-9]+');

        Route::delete('/company_sub_cat/{companySubCat}','CompanySubCatsController@destroy')
            ->name('company_sub_cats.company_sub_cat.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'sales',
        ], function () {

        Route::get('/', 'SalesController@index')
            ->name('sales.sale.index');

        Route::get('/create','SalesController@create')
            ->name('sales.sale.create');

        Route::get('/show/{sale}','SalesController@show')
            ->name('sales.sale.show')
            ->where('id', '[0-9]+');

        Route::get('/{sale}/edit','SalesController@edit')
            ->name('sales.sale.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'SalesController@store')
            ->name('sales.sale.store');

        Route::put('sale/{sale}', 'SalesController@update')
            ->name('sales.sale.update')
            ->where('id', '[0-9]+');

        Route::delete('/sale/{sale}','SalesController@destroy')
            ->name('sales.sale.destroy')
            ->where('id', '[0-9]+');

    });
});

Route::group(
[
    'prefix' => 'sliders',
], function () {

    Route::get('/', 'SlidersController@index')
         ->name('sliders.slider.index');

    Route::get('/create','SlidersController@create')
         ->name('sliders.slider.create');

    Route::get('/show/{slider}','SlidersController@show')
         ->name('sliders.slider.show')
         ->where('id', '[0-9]+');

    Route::get('/{slider}/edit','SlidersController@edit')
         ->name('sliders.slider.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SlidersController@store')
         ->name('sliders.slider.store');
               
    Route::put('slider/{slider}', 'SlidersController@update')
         ->name('sliders.slider.update')
         ->where('id', '[0-9]+');

    Route::delete('/slider/{slider}','SlidersController@destroy')
         ->name('sliders.slider.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'settings',
], function () {

    Route::get('/', 'SettingsController@index')
         ->name('settings.setting.index');

    Route::get('/create','SettingsController@create')
         ->name('settings.setting.create');

    Route::get('/show/{setting}','SettingsController@show')
         ->name('settings.setting.show')
         ->where('id', '[0-9]+');

    Route::get('/{setting}/edit','SettingsController@edit')
         ->name('settings.setting.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SettingsController@store')
         ->name('settings.setting.store');
               
    Route::put('setting/{setting}', 'SettingsController@update')
         ->name('settings.setting.update')
         ->where('id', '[0-9]+');

    Route::delete('/setting/{setting}','SettingsController@destroy')
         ->name('settings.setting.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'roles',
], function () {

    Route::get('/', 'RolesController@index')
         ->name('roles.role.index');

    Route::get('/create','RolesController@create')
         ->name('roles.role.create');

    Route::get('/show/{role}','RolesController@show')
         ->name('roles.role.show')
         ->where('id', '[0-9]+');

    Route::get('/{role}/edit','RolesController@edit')
         ->name('roles.role.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'RolesController@store')
         ->name('roles.role.store');
               
    Route::put('role/{role}', 'RolesController@update')
         ->name('roles.role.update')
         ->where('id', '[0-9]+');

    Route::delete('/role/{role}','RolesController@destroy')
         ->name('roles.role.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'users',
], function () {

    Route::get('/', 'UsersController@index')
         ->name('users.user.index');

    Route::get('/create','UsersController@create')
         ->name('users.user.create');

    Route::get('/show/{user}','UsersController@show')
         ->name('users.user.show')
         ->where('id', '[0-9]+');

    Route::get('/{user}/edit','UsersController@edit')
         ->name('users.user.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UsersController@store')
         ->name('users.user.store');
               
    Route::put('user/{user}', 'UsersController@update')
         ->name('users.user.update')
         ->where('id', '[0-9]+');

    Route::delete('/user/{user}','UsersController@destroy')
         ->name('users.user.destroy')
         ->where('id', '[0-9]+');

});





Route::group(
[
    'prefix' => 'partnerships',
], function () {

    Route::get('/', 'PartnershipsController@index')
         ->name('partnerships.partnership.index');

    Route::get('/create','PartnershipsController@create')
         ->name('partnerships.partnership.create');

    Route::get('/show/{partnership}','PartnershipsController@show')
         ->name('partnerships.partnership.show')
         ->where('id', '[0-9]+');

    Route::get('/{partnership}/edit','PartnershipsController@edit')
         ->name('partnerships.partnership.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'PartnershipsController@store')
         ->name('partnerships.partnership.store');
               
    Route::put('partnership/{partnership}', 'PartnershipsController@update')
         ->name('partnerships.partnership.update')
         ->where('id', '[0-9]+');

    Route::delete('/partnership/{partnership}','PartnershipsController@destroy')
         ->name('partnerships.partnership.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'plans',
], function () {

    Route::get('/', 'PlansController@index')
         ->name('plans.plan.index');

    Route::get('/create','PlansController@create')
         ->name('plans.plan.create');

    Route::get('/show/{plan}','PlansController@show')
         ->name('plans.plan.show')
         ->where('id', '[0-9]+');

    Route::get('/{plan}/edit','PlansController@edit')
         ->name('plans.plan.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'PlansController@store')
         ->name('plans.plan.store');
               
    Route::put('plan/{plan}', 'PlansController@update')
         ->name('plans.plan.update')
         ->where('id', '[0-9]+');

    Route::delete('/plan/{plan}','PlansController@destroy')
         ->name('plans.plan.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'sale_bids',
], function () {

    Route::get('/', 'SaleBidsController@index')
         ->name('sale_bids.sale_bid.index');

    Route::get('/create','SaleBidsController@create')
         ->name('sale_bids.sale_bid.create');

    Route::get('/show/{saleBid}','SaleBidsController@show')
         ->name('sale_bids.sale_bid.show')
         ->where('id', '[0-9]+');

    Route::get('/{saleBid}/edit','SaleBidsController@edit')
         ->name('sale_bids.sale_bid.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SaleBidsController@store')
         ->name('sale_bids.sale_bid.store');
               
    Route::put('sale_bid/{saleBid}', 'SaleBidsController@update')
         ->name('sale_bids.sale_bid.update')
         ->where('id', '[0-9]+');

    Route::delete('/sale_bid/{saleBid}','SaleBidsController@destroy')
         ->name('sale_bids.sale_bid.destroy')
         ->where('id', '[0-9]+');

});
