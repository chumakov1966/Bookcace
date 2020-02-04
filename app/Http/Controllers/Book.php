<?php
namespace App\Http\Controllers;
use App\Models\Book as BookModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Book extends Controller{	
	public function Bookcase(BookModel $book){
		$nameBook=$book->Bookcase();
		foreach($nameBook as $allBook=>$viewBook){
			print view('bookcase.bookcase', ['name'=>$viewBook['name'].$viewBook['author']]);	
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
		dump($text);
		return view('bookcase.write',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author'], 'text'=>$num_book['text']]);
		// $new_text=$request->url();
		// dump($new_text);
	}
		function store(Request $request, $id){
			$new_book=new BookModel;
			// $new_book->text=$request->text;
			// $new_book->save();
			 $new_book=$request->input('text');
			 dump($new_book);
			 // return view('bookcase.save',['id'=>$new_book['id'], 'name'=>$new_book['name'], 'author'=>$new_book['author'], 'text'=>$new_book['text']]);
		}
 }
?>