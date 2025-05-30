<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ReaderService;

class ReaderController extends Controller
{
    private ReaderService $readerService;
    public function __construct(ReaderService $readerService) {
        $this->readerService = $readerService;
    }

    public function get() {
        $readers = $this->readerService->get();
        return response()->json($readers);
    }
}
