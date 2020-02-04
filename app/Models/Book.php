<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'book';
	public function Bookcase(){
		$books=Book::get();
		return $books;		
	}
	public function BookId($id){
		$book_id=Book::where('id', $id)->first();
		return $book_id;
	}
}
?>