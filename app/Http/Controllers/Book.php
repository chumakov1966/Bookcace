<?php
namespace App\Http\Controllers ;
use App\Http\Controllers\Controller;

class Book extends Controller
 {
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
	 public $name;
	 public $author;
	 public function __construct($name, $author){
		 $this->name;
		 $this->author;
	 }
	 $books=[
		new Book('Руслан и Людмила ','Пушкин А.С.');
		new Book('Война и мир', 'Толстой Л.Н.');
		new Book('Му-му', 'Тургенев И.С');
		new Book('Мастер и Маргарита', 'Булгаков М.А.')
	 ]
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
 }
?>