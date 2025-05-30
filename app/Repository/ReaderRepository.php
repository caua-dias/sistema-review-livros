<?php

namespace App\Repository;
use App\Models\Reader;

class ReaderRepository
{
 public function get()
 {
    return Reader::all();
 }
}