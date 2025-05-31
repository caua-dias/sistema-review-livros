<?php

namespace App\Service;
use App\Repository\BookRepository;

class BookService
{
    private BookRepository $bookRepository;
    public function __construct(BookRepository $bookRepository)
        {
            $this->bookRepository = $bookRepository;
        }

    public function get() {
        $books = $this->bookRepository->get();
        return $books;
    }

     public function details(int $id)
    {
        return $this->bookRepository->details($id);
    }

    public function store (array $data)
    {
        return $this->bookRepository->store($data);
    }

    public function update(int $id, array $data)
    {
        return $this->bookRepository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->bookRepository->delete($id);
    }
}