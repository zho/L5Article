<?php

Route::get("/article/admin", 'zho\L5Article\Http\L5ArticleController@AdminArticle');
Route::get("/article/admin/add", 'zho\L5Article\Http\L5ArticleController@AddArticle');
Route::post("/article/admin/add", 'zho\L5Article\Http\L5ArticleController@SaveArticle');
Route::get("/article/admin/edit/{id}", 'zho\L5Article\Http\L5ArticleController@EditArticle');
Route::post("/article/admin/edit/{id}", 'zho\L5Article\Http\L5ArticleController@UpdateArticle');
Route::get("/article/admin/delete/{id}", 'zho\L5Article\Http\L5ArticleController@DeleteArticle');
Route::get("/article", 'zho\L5Article\Http\L5ArticleController@ArticleList');
Route::get("/article/{id}", 'zho\L5Article\Http\L5ArticleController@ArticleDetail');