<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@index')->name('home');

Route::get('/admin','App\Http\Controllers\Admin\AdminController@index')->middleware(['auth'])->name('admin');

// ADMIN PORTFOLIO
Route::get('admin/portfolio','App\Http\Controllers\Admin\PortfolioController@index')->name('admin_portfolio')->middleware('auth');
Route::get('admin/portfolio/create','App\Http\Controllers\Admin\PortfolioController@create')->name('admin_portfolio_create')->middleware('auth');
Route::get('admin/portfolio-item/{id}','App\Http\Controllers\Admin\PortfolioController@edit')->name('admin_portfolio_item_edit')->middleware('auth');
Route::get('_admin/portfolio-item/{id}','App\Http\Controllers\Admin\PortfolioController@item')->middleware('auth');
Route::post('_admin/portfolio','App\Http\Controllers\Admin\PortfolioController@store')->middleware('auth');
Route::put('_admin/portfolio-item/{id}','App\Http\Controllers\Admin\PortfolioController@update')->middleware('auth');
Route::get('_admin/portfolio-item/{id}/delete','App\Http\Controllers\Admin\PortfolioController@delete')->middleware('auth');
Route::post('_admin/portfolio/file/{method}','App\Http\Controllers\Admin\PortfolioController@file')->middleware('auth');

require __DIR__.'/auth.php';