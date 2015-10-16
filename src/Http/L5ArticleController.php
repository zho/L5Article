<?php

namespace zho\L5Article\Http;


use App\Http\Controllers\Controller;
use zho\L5Article\Http\Requests\CreateArticleRequest;
use zho\L5Article\models\Article;

class L5ArticleController extends Controller {

	public function ArticleList() {

		$articleList = Article::all();

		return view("l5article::articlelist", ["articlelist" => $articleList]);
	}

	public function ArticleDetail($id) {
		$articledetail = Article::findOrFail($id);

		return view("l5article::articledetail", ["articledetail" => $articledetail]);
	}

	public function AddArticle() {
		return view("l5article::articleadd");
	}

	public function SaveArticle(CreateArticleRequest $request) {
		Article::create($request->all());

		return redirect("article");
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