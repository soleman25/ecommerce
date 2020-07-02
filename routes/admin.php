<?php
Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard');
//category
Route::get('/category', 'CategoryController@index')->name('category');
Route::match(['get','post'],'/category/add-catagory','CategoryController@addCategory')->name('category.addCategory');
Route::match(['get','post'],'/category/edit/{category}','CategoryController@edit')->name('category.edit');
Route::match(['get','post'],'/category/delete/{category}','CategoryController@delete')->name('category.delete');

//produk
Route::get('/product', 'ProductController@index')->name('product');
Route::match(['get','post'],'/product/add-product','ProductController@addProduct')->name('product.addProduct');
Route::match(['get','post'],'/product/edit/{product}','ProductController@edit')->name('product.edit');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');
Route::match(['get','post'],'/product/delete/{product}','ProductController@delete')->name('product.delete');
Route::get('/product/edit/delete-image/{product}','ProductController@deleteImage')->name('product.deleteImage');

//attribut produk
Route::match(['get','post'],'/product/add-attributes/{product}','ProductController@addAttributes')->name('product.add-attributes');
Route::match(['get','post'],'/product/edit-attributes/{product}','ProductController@editAttributes');
Route::get('/product/delete-attributes/{product}','ProductController@deleteAttributes');

//supplier
Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::match(['get','post'],'/supplier/add-supplier','SupplierController@addSupplier')->name('supplier.addSupplier');
Route::get('/supplier/{supplier}', 'SupplierController@show')->name('supplier.show');
Route::match(['get','post'],'/supplier/edit/{supplier}','SupplierController@edit')->name('supplier.edit');
Route::match(['get','post'],'/supplier/delete/{supplier}','SupplierController@delete')->name('supplier.delete');
