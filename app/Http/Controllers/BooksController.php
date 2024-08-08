<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {
        return Book::all();
    }

    public function sendBook(Request $req ) {
        Book::create([
            "title" => $req->title,
            "author" => $req->author,
            "price" => $req->price,
            "description" => $req->description
        ]);

        return response(["Deu certo!!"], 200);
    }

    public function update(Request $req) {

        $livro = Book::find($req->id);

        $livro->title = $req->title;
        $livro->author = $req->author;
        $livro->price = $req->price;
        $livro->description = $req->description;

        $livro->save();

        return response("Tudo certo!", 200);
    }

    public function delete(Request $req) {
        $livro = Book::find($req->id);
        $livro->delete();

        return response ("Livro deletado com sucesso!", 200);
    }
}
