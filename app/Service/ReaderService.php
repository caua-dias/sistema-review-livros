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
}