<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks()
    {
        $books = Book::all();

        return response()->json([
            'message' => 'success',
            'data' => $books,
        ], 200);
    }

    public function getBookId($id)
    {
        $book = Book::find($id);

        return response()->json([
            'message' => 'success',
            'data' => $book,
        ], 200);
    }

    public function getBookTitle($title)
    {
        $books = Book::where('title', 'like', "%$title%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $books,
        ], 200);
    }

    public function storeBook(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json([
            'message' => 'success',
            'data' => $book,
        ], 200);
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found',
            ], 404);
        }

        $book->update($request->all());

        return response()->json([
            'message' => 'Book update successfully',
            'data' => $book,
        ], 200);
    }

    public function deleteBook(string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found',
            ], 404);
        }

        $book->delete();
        return response()->json([
            'message' => 'Book deleted successfully',
        ], 200);
    }
}
