<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample penulis
        $author1=Author::create(['name'=>'Mohammad Fauzil Admin']);
        $author2=Author::create(['name'=>'Salim A. Fillah']);
        $author3=Author::create(['name'=>'Aam AMiruddin']);

        // sample buku

        $book1=book::create(['title'=>'kupinang Engkau dengan Hamdalah','amount'=>3,'author_id'=$author3->id]);
        $book2=book::create(['title'=>'Jalan Cinta Para pejuang','amount'=>2,'author_id'=$author2->id]);
        $book3=book::create(['title'=>'Membingkai Surga Dalam Rumah Tangga','amount'=>4,'author_id'=$author4->id]);
        $book4=book::create(['title'=>'Cinta $ seks rumah tangga muslim','amount'=>3,'author_id'=$author3->id]);
    }
}
