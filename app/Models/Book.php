<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'book';
	/*
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
	*/
	public function Bookcase(){
		$books=Book::get();
		return $books;
		
	}

	public function BookId($id){
		$book_id=Book::where('id', $id)->first();
		return $book_id;
	}
/*	public function BookWrite($id){
		$text=Book::where('text', $id)->first();
		// $book_write=Book::find('id');
		// $book_write->text=$text;
		// $book_write->save();
		// $book_write=Book::where('id', $id)
			// ->where('text', $text)
			// ->update('text'=>$id);

		return $book_write;
	}*/
	
}
?>