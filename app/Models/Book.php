<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'book';
	public $timestamps = false;
	public function Bookcase(){
		$books=$this->get();
		return $books;		
	}
	public function BookId($id){
		$book_id=$this->where('id', $id)->first();
		return $book_id;
	}
	public function BookInsert($id, $text){
		$book_insert=$this->where('id',$id)->update(['text'=>$text]);
		return $book_insert;
	}
}
?>