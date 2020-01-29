<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'book';
	// public function Bookcase(){
		// $books=Book:: get();
		// return view('book.index', ['books'=>$books]);
	// }
	// public function AllBook(){
		// $books=Book::table('book')->get();
		// return view('book.index', ['books'=>$books]);
				// foreach($book as $num_book){
			// print $num_book->name;
		// }
	// }
	public function Bookcase(){
		$books=Book::get();
		return $books;
		// return view('book.bookcase',['books'=>$books]);
	}
}
?>