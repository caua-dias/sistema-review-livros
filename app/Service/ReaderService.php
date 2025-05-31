<?php

namespace App\Service;
use App\Repository\ReaderRepository;

class ReaderService
{
    private ReaderRepository $readerRepository;
    public function __construct(ReaderRepository $readerRepository)
        {
            $this->readerRepository = $readerRepository;
        }

    public function get() {
        $readers = $this->readerRepository->get();
        return $readers;
    }

     public function details(int $id)
    {
        return $this->readerRepository->details($id);
    }

    public function store (array $data)
    {
        return $this->readerRepository->store($data);
    }

    public function update(int $id, array $data)
    {
        return $this->readerRepository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->readerRepository->delete($id);
    }
}