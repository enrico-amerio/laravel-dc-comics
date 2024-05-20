<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use App\Functions\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\ComicsRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicsRequest $request)
    {
       $form_data = $request->all();
       $new_comic = new Comic();
       $new_comic-> title = $form_data['title'];
       $new_comic-> thumb = $form_data['thumb'];
       $new_comic-> slug = Helper::generateSlug($new_comic->title,new Comic());
       $new_comic-> description = $form_data['description'];
       $new_comic-> price = $form_data['price'];
       $new_comic-> series = $form_data['series'];
       $new_comic-> sale_date = $form_data['sale_date'];
       $new_comic-> type = $form_data['type'];
       $new_comic-> artists = json_encode(explode(',', $form_data['artists']));
       $new_comic-> writers = json_encode(explode(',',$form_data['writers']));
       $new_comic->save();

       return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicsRequest $request, Comic $comic)
    {
        $form_data = $request->all();
        if($form_data['title']== $comic->title){
            $form_data['slug'] = $comic->slug;
        }else{
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic());
        }
        $form_data['artists'] = json_encode(explode(',', $form_data['artists']));
        $form_data['writers'] = json_encode(explode(',',$form_data['writers']));

        $comic->update($form_data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
       return redirect()->route('comics.index')->with('deleted', 'Il fumetto ' . $comic->titolo . 'è stato eliminato!');
    }
}
