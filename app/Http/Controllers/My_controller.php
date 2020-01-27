<?php

namespace App\Http\Controllers ;
use App\Http\Controllers\Controller;

class My_controller extends Controller
{
	public function show()
	{
		return view('test', ['name'=>'Коля','surname'=>'Сидоров']);
	}
}
