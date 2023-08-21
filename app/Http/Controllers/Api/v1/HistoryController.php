<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Resources\v1\HistoryCollection;
use App\Http\Resources\v1\HistoryResource;
use App\Http\Controllers\Controller;
  
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HistoryController extends Controller
{
    public function index(Request $request){
        return new HistoryCollection(History::paginate());
    }

    public function show(History $history){
        return new HistoryResource($history);
    }
}
