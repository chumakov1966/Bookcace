<?php
namespace App\Http\Controllers;
use App\Models\Book as BookModel;
use App\Http\Controllers\Controller;

class Book extends Controller{
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
	public function Bookcase(BookModel $book){
		// var_dump ($book);
		// foreach($book as $num_book){
			// print $num_book->name;
		// }
		$nameBook=$book->Bookcase();
		// dump($nameBook);
		
		foreach($nameBook as $allBook){
			print 'Книжный шкаф';
			print '<pre>'.$allBook->id.$allBook->name.' : '.$allBook->author.'<pre>';
		}
		
	}
	// public function Take_book(BookModel $book_id){
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
		// $num_book=$book_id->BookId($id);
		// foreach($num_book as $id_book){
			// print $id_book;
		// }
	// }
	public function BookId($id){
		$book_id=Book::table(`book`)->were(`id`, $id)->first();
		return $book_id($id);
	}

 }
?>