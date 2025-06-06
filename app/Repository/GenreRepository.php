<?php

namespace App\Repository;
use App\Models\Genre;

class GenreRepository
{
public function get()
   {
      return Genre::all();
   }

   public function details(int $id)
    {
        return Genre::find($id);
    }
public function store(array $data)
    {
        return Genre::create($data);
    }

public function update(int $id, array $data)
    {
        $genre = $this->details($id);
        $genre->update($data);
        return $genre;
    }
public function delete(int $id)
    {
        $genre = $this->details($id);
        $genre->delete();
        return $genre;
    }

    public function getGenreBooks(int $genreId)
    {
        $genre = Genre::findOrFail($genreId);
        return $genre->books()->with(['author', 'reviews.reader'])->get();
    }

    public function getGenresWithBooks()
    {
        return Genre::with(['books.author', 'books.reviews'])->get();
    }

}