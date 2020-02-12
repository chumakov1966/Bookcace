<?php
namespace App\Http\Controllers;
use App\Models\Book as BookModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Book extends Controller{	
	public function Bookcase(BookModel $book){
		$nameBook=$book->Bookcase();
		foreach($nameBook as $allBook=>$viewBook){
		print view('bookcase.bookcase', ['name'=>$viewBook['name'].$viewBook['author'],'id'=>$viewBook['id']]);	
		}
	}
	function Take_book(BookModel $book_id, $id){
		$num_book=$book_id->BookId($id);
		print view ('bookcase.book',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author']]);
	}
	function Read_book(BookModel $book_id, $id){
		$num_book=$book_id->BookId($id);
		return view('bookcase.read',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author'], 'text'=>$num_book['text']]);
	}
	function Write_book(BookModel $book_id, $id){
		$num_book=$book_id->BookId($id);
		$text=$num_book['text'];
		return view('bookcase.write',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author'], 'text'=>$num_book['text']]);
	}
	function Store(Request $request, $id, BookModel $new_text){
		 $new_book=$request->input('text');
		 $book_insert=$new_text->BookInsert($id,$new_book);
		 $num_book=$new_text->BookId($id);
		return view('bookcase.save',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author'], 'text'=>$num_book['text']]);		 
	}
 }
?>