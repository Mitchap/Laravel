<?php

namespace App\Http\Controllers;
use App\Models\library; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $library = library::all();
        return view ('pages.home', ['library' => $library]);
    }

    public function submit(Request $request) {
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre
        ];
        $newBook = library::create($data);
        return redirect(route('home'));
    }
    
    public function edit (library $library)
    {   
        return view ('pages.edit', ['library' => $library]);    
        
    }

    public function update (library $library, Request $request)
    {
    $data = [
        'title' => $request->title,
        'author' => $request->author,
        'genre' => $request->genre
    ];
    $library -> update($data);
    return redirect(route('home'));
    }

    public function delete (library $library)
    {
    $library -> delete();
    return redirect(route('home'));
    }

}


