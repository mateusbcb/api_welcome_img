<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Welcome;

class WelcomeController extends Controller
{
    public function index()
    {
        $welcomes = Welcome::orderBy('updated_at', 'desc')->paginate(2);

        $j_welcomes = json_encode($welcomes);
        
        return $j_welcomes;

        return view('welcome', [
            'welcomes' => $welcomes,
        ]);
    }

    public function create()
    {
        return view('create_welcome');
    }

    public function store(Request $request)
    {
        $welcome = new Welcome();

        $welcome->title = $request->title;
        $welcome->phrase = $request->phrase;
        $welcome->url = $request->url;
        $welcome->period = $request->period;
        $welcome->category = $request->category;
        $welcome->keyword = json_encode(explode(',', $request->keyword));

        // Salvando imagem
        if ($request->hasFile('image') && $request->file('image')->isValid() ) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName()) . "." . $extension;

            $requestImage->move(public_path('assets/img/welcomes'), $imageName);

            $welcome->image = $imageName;

        }

        $welcome->save();

        return redirect('/')->with('success', 'Welcome criado com sucesso!');
    }

    public function show($id)
    {
        $welcome = Welcome::findOrFail($id);

        $j_welcome = json_encode($welcome);
        
        return $j_welcome;

        return view('show_welcome', [
            'welcome' => $welcome,
        ]);
    }

    public function edit()
    {

    }

    public function update($id)
    {
        
    }

    public function destroy($id)
    {
        
    }

    public function dashboard()
    {
        return view('dashboard');  
    } 
}
