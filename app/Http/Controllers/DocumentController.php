<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DocumentController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }


    public function store(Request $request){

            $path = $request->file('document')->store('documents');
    
            Auth()->user()->documents()->create([
                'title' => $request->title,
                'document' => $path
            ]);
    
            return redirect('/enterpreneur_dashboard');

    }


    public function destroy(Document $document){

        Document::where('id', $document->id)->delete();

       return redirect('/enterpreneur_dashboard');
    }
}
