<?php
namespace App\Http\Controllers;
use App\Models\Book as BookModel;
use App\Http\Controllers\Controller;


class Book extends Controller{
	/*
	// public $book;
	// function __construct(){
		 // $this->book=array(
			 // '1'=>array(
				 // 'name'=>'Руслан и Людмила ',
				 // 'author'=>'Пушкин А.С.',
			 // ),
			 // '2'=>array(
				// 'name'=>'Война и мир',
				// 'author'=>'Толстой Л.Н.',
			 // ),
			 // '3'=>array(
				// 'name'=>'Му-му',
				// 'author'=>'Тургенев И.С',
			 // ),
			 // '4'=>array(
				// 'name'=>'Мастер и Маргарита',
				// 'author'=>'Булгаков М.А.',
			 // )
		 // );
	 // }
	 // public function Case($id){
		// var_dump ($id);
		// var_dump ($this->book);
		 // foreach($this->book[$id] as $key=>$book_num){
			 // print $book_num. '<br>';
		 // }
	 // }
	 // public function Take($id){
		// var_dump ($id);
		// print '<br>';
		// print 'Bookcase'.'<pre>';var_dump ($this->book); print '</pre>';
		// print'Взять книгу с № '.$id.':'.'<br>';
		// foreach($this->book[$id] as $key=>$book_num){
			// if($key=$id){
				// print '<pre>'.$book_num.'</pre>';
			// }
		// }
	// }
	 // public $name;
	 // public $author;
	 
	 // public function __construct($name, $author){
		 // $this->name=$name;
		 // $this->author=$autor;
	 // }
	 
	 // $books = [
		// new Book('Руслан и Людмила ','Пушкин А.С.');
		// new Book('Война и мир', 'Толстой Л.Н.');
		// new Book('Му-му', 'Тургенев И.С');
		// new Book('Мастер и Маргарита', 'Булгаков М.А.');
		 // ];
	// public function Case(){
		// var_dump ($books);
		// foreach($books as $book){
			// print 'Книжный шкаф'.'<br>'.'Название: '.$book->name.'Автор: '.$book->author;
		// }
	// }
	// public function __construct(BookModel $book){
		// $this->books=$book;
	// }
*/	
	public function Bookcase(BookModel $book){
		/*
		// var_dump ($book);
		// foreach($book as $num_book){
			// print $num_book->name;
		// }
		*/
		$nameBook=$book->Bookcase();
		foreach($nameBook as $allBook=>$viewBook){
			// print 'Книжный шкаф';
			// print '<pre>'.$viewBook->id.$viewBook->name.' : '.$viewBook->author.'<pre>';
			
			print view('bookcase.bookcase', ['name'=>$viewBook['name'].$viewBook['author']]);	
		}
	// $this->nameBook;
	// return view('bookcase.bookcase',['name'=>$nameBook['name']] )
	 
	}
	/* 
	public function Take_book(BookModel $id, $b_id){
		// $id=$book_id->BookId($id);
		// return $id->id;
		
		// function Id_Book($book_id){
			// $id_b=$book_id->Bookcase();
			// foreach($id_b as $key ){
				// $this->key;
				// return $key->id;
			// }
		// }
		// $id=Id_Book();
		// function Id(){return $this->id;}
		// $id->Id();
		$num_book=$book_id->BookId($id);
		 foreach($num_book as $id_book){
			print $id_book;
		 }
		 // public function Take_book(BookModel $book){
			// print $book;
			// }
	// }
	// public function BookId($id){
		// $book_id=Book::table(`book`)->were(`id`, $id)->first();
		// return $book_id($id);
	// }
	} */
	function Take_book(BookModel $book_id, $id){
		$num_book=$book_id->BookId($id);
		// print view ('bookcase.book',['book'=>$num_book['id'].$num_book['name'].$num_book['author']]);
		print view ('bookcase.book',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author']]);
	}
	function Read_book(BookModel $book_id, $id){
		$num_book=$book_id->BookId($id);
		// $nameBook=$num_book['name'];
		// $authorBook=$num_book['author'];
		// $textBook=$num_book['text'];
		// dump($textBook);
		// print 'Читать :'.$num_book->name.$num_book->author.'<br>'.$num_book->text;
		return view('bookcase.read',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author'], 'text'=>$num_book['text']]);
	}
	// function Write_book(BookModel $book_id, $id){
		// $num_book=$book_id->BookId($id);
		// dump($num_book);
		// $text=$num_book['text'];
		// dump($text);
		// $id=$num_book['id'];
		// dump($id);
		// $text_new=BookModel::where('text', $text)->first();
		// dump($text_new);
		// dump ($text);
		// $book_write=BookModel::find('id');
		// $book_write->text=$text_new;
		// $book_write->save();
/*		$write_book=$id->BookWrite();
		dump($write_book);
		*/
		// return view('bookcase.write',['id'=>$num_book['id'], 'name'=>$num_book['name'], 'author'=>$num_book['author'], 'text'=>$num_book['text']]);
	// }

 }
?>