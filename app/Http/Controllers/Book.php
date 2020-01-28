<?php
namespace App\Http\Controllers ;
use App\Http\Controllers\Controller;

class Book extends Controller
 {
	public $book;
	function __construct(){
		 $this->book==array(
			 '1'=>array(
				 'name'=>'Руслан и Людмила ',
				 'author'=>'Пушкин А.С.',
			 ),
			 '2'=>array(
				'name'=>'Война и мир',
				'author'=>'Толстой Л.Н.',
			 ),
			 '3'=>array(
				'name'=>'Му-му',
				'author'=>'Тургенев И.С',
			 ),
			 '4'=>array(
				'name'=>'Мастер и Маргарита',
				'author'=>'Булгаков М.А.',
			 )
		 );
	 }
	 public function Take(){
		 foreach($this->book as $num_book=>$book_num){
			if
				 
			 }
		 }
		 
		 }
 }
?>