<?php

namespace App\Service;
use App\Repository\GenreRepository;

class GenreService
{
    private GenreRepository $genreRepository;
    public function __construct(GenreRepository $genreRepository)
        {
            $this->genreRepository = $genreRepository;
        }

    public function get() {
        $genres = $this->genreRepository->get();
        return $genres;
    }

     public function details(int $id)
    {
        return $this->genreRepository->details($id);
    }

    public function store (array $data)
    {
        return $this->genreRepository->store($data);
    }

    public function update(int $id, array $data)
    {
        return $this->genreRepository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->genreRepository->delete($id);
    }
}