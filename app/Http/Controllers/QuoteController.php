<?php

namespace App\Http\Controllers;

use App\Quote;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuoteController extends Controller
{
	use Helpers\Mailer;
    public function create(Request $request)
    {
		//$email_user = "operations@itransys.com";

	$this->sendEmail($request->pick_city,'body','joel.rosenthal@gmail.com','joel.rosenthal@gmail.com');
		/*$this->validate($request, [
			'email' => 'required|min:10|max:20'
		]);*/

		$quote = New Quote($request->all());

		$quote->save();

		return back();
	}

	public function index(Request $request)
	{
		$data = Quote::all();
		return($data);
	}

}
