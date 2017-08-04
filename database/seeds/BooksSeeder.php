<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample penulis
        $author1 = Author::create(['name'=>'Mohammad Fauzil Adhim']);
        $author2 = Author::create(['name'=>'Salim A. fillah']);
        $author3 = Author::create(['name'=>'Aam amiruddin']);

        // sample buku 
        $Book1 = Book::create(['title'=>'kupinang engkau dengan hamdalah','amount'=>3,'author_id'=>$author1->id]);
        $Book2 = Book::create(['title'=>'Jalan cinta para pejuang','amount'=>2,'author_id'=>$author2->id]);
        $Book3 = Book::create(['title'=>'Membingkai surga dalam rumah tangga','amount'=>4,'author_id'=>$author3->id]);
        $Book4 = Book::create(['title'=>'Cinta $ seks rumah tangga muslim','amount'=>3,'author_id'=>$author3->id]);


    }
}
