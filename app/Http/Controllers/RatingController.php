<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Rating;


use Illuminate\Http\Request;
//  use App\Book;
    // use App\Rating;
    use App\Http\Resources\RatingResource;
class RatingController extends Controller
{

 public function index(){
    return view('');

    }
    public function store(Request $request, Book $book){
      $rating = Rating::firstOrCreate(
        [
          'user_id' => $request->user()->id,
          'book_id' => $book->id,
        ],
        ['rating' => $request->rating]
      );

      return new RatingResource($rating);
    }
    public function create(){
        $books = Book::create([
            'message' => 'created successfuly'

        ]);
    }



}
