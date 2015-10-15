<?php

Route::get("/article", 'zho\L5Article\Http\L5ArticleController@ArticleList');
Route::get("/article/{id}", 'zho\L5Article\Http\L5ArticleController@ArticleDetail');
Route::get("/article/add", 'zho\L5Article\Http\L5ArticleController@AddArticle');
Route::post("/article/add", 'zho\L5Article\Http\L5ArticleController@SaveArticle');
Route::get("/article/edit/{id}", 'zho\L5Article\Http\L5ArticleController@EditArticle');
Route::post("/article/edit/{id}", 'zho\L5Article\Http\L5ArticleController@UpdateArticle');
Route::get("/article/delete/{id}", 'zho\L5Article\Http\L5ArticleController@DeleteArticle');