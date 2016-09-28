<?php

namespace App\Http\Controllers;

use App\Quote;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuoteController extends Controller
{
    public function create(Request $request){
		
		/*$this->validate($request, [
			'email' => 'required|min:10|max:20'
		]);*/

		$quote = New Quote($request->all());

		$quote->save();

		return back();
}

}
