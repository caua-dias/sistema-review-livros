<?php

namespace App\Repository;
use App\Models\Author;

class AuthorRepository
{
public function get()
   {
      return Author::all();
   }

   public function details(int $id)
    {
        return Author::find($id);
    }
public function store(array $data)
    {
        return Author::create($data);
    }

public function update(int $id, array $data)
    {
        $author = $this->details($id);
        $author->update($data);
        return $author;
    }
public function delete(int $id)
    {
        $author = $this->details($id);
        $author->delete();
        return $author;
    }

    public function getAuthorBooks(int $authorId)
    {
        $author = Author::findOrFail($authorId);
        return $author->books()->with(['genre', 'reviews.reader'])->get();
    }

    public function getAuthorsWithBooks()
    {
        return Author::with(['books.genre', 'books.reviews'])->get();
    }

}