<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ReaderService;
use App\Http\Requests\ReaderStoreRequest;
use App\Http\Requests\ReaderUpdateRequest;
use App\Http\Resources\ReaderResource;
use App\Http\Resources\ReviewResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ReaderController extends Controller
{
    private ReaderService $readerService;
    public function __construct(ReaderService $readerService) {
        $this->readerService = $readerService;
    }

    public function get() {
        $readers = $this->readerService->get();
        return ReaderResource::collection($readers);
    }

    public function details(int $id){
        try{
            $readers = $this->readerService->details($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Reader not found'],404);
        }
        return new ReaderResource($readers);
    }

    public function store(ReaderStoreRequest $request){
        $data = $request->validated();
        $reader = $this->readerService->store($data);
        return new ReaderResource($reader);
    }

    public function update(int $id, ReaderUpdateRequest $request)
    {
        $data = $request->validated();
        try{
            $reader = $this->readerService->update($id,$data);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Reader not found'],404);
        }
        return new ReaderResource($reader);

    }

    public function delete(int $id)
    {
        try{
            $reader = $this->readerService->delete($id);
        }catch(ModelNotFoundException $e){
            return response()->json(['error'=>'Reader not found'],404);
        }
        return new ReaderResource($reader);
    }

    public function getReaderReviews(int $id)
    {
        try {
            $reviews = $this->readerService->getReaderReviews($id);
            return ReviewResource::collection($reviews);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Reader not found'], 404);
        }
    }
}
