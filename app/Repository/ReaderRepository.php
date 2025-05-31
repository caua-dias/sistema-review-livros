<?php

namespace App\Repository;
use App\Models\Reader;

class ReaderRepository
{
public function get()
   {
      return Reader::all();
   }

   public function details(int $id)
    {
        return Reader::find($id);
    }
public function store(array $data)
    {
        return Reader::create($data);
    }

public function update(int $id, array $data)
    {
        $reader = $this->details($id);
        $reader->update($data);
        return $reader;
    }
public function delete(int $id)
    {
        $reader = $this->details($id);
        $reader->delete();
        return $reader;
    }

}