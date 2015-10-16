<?php

namespace zho\L5Article\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
			'title' => 'required',
			'teaser' => 'required',
			'body' => 'required'
		];
	}
}