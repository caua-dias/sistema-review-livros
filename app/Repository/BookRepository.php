<?php

namespace App\Repository;
use App\Models\Book;

class BookRepository {
    public function get() {
        return Book::all();
    }

    public function details(int $id) {
        return Book::find($id);
    }

    public function store(array $data) {
        return Book::create($data);
    }

    public function update(int $id, array $data) {
        $book = $this->details($id);
        $book->update($data);
        return $book;
    }

    public function delete(int $id) {
        $book = $this->details($id);
        $book->delete();
        return $book;
    }

    public function getBookReviews(int $bookId) {
        $book = Book::findOrFail($bookId);
        return $book->reviews()->with('reader')->get();
    }

    public function getBooksWithRelations() {
        return Book::with(['reviews.reader', 'author', 'genre'])->get();
    }

}