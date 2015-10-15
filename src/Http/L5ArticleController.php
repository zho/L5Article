<?php

namespace zho\L5Article\Http;


use App\Http\Controllers\Controller;
use zho\L5Article\models\Article;

class L5ArticleController extends Controller {

	public function ArticleList() {

		$articleList = Article::all();

		return view("articlelist", ["articlelist" => $articleList]);
	}

	public function ArticleDetail($id) {
		// todo
	}

	public function AddArticle() {
		// todo
	}

	public function SaveArticle() {
		// todo
	}

	public function EditArticle($id) {
		// todo
	}

	public function UpdateArticle($id) {
		// todo
	}

	public function DeleteArticle($id) {
		// todo
	}
}