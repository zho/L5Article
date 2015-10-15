<?php

namespace zho\L5Article\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	protected $fillable = ["title", "teaser", "body"];
}