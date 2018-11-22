<?php

namespace App\Http\Controllers;

use App\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $villas = Villa::paginate(5);
        $keyword = $request->get('name');
        if ($keyword){
            $villas = Villa::where("name", "LIKE", "%$keyword%")->paginate(5);
        }
        return view('villa.index', compact('villas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('villa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('photo');
        $filename = uniqid() . '.' . $img->getClientOriginalExtension();
        $photo = Storage::disk('public')->putFileAs('villa', $img, $filename);
        Villa::create([
            'name' => $request->name,
            'address' => $request->address,
            'price' => $request->price,
            'desc' => $request->desc,
            'created_by'=> Auth::user()->id,
            'photo' => $photo
        ]);
        return redirect(route('villa.create'))->with('status', 'Villa Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villa $villa
     * @return \Illuminate\Http\Response
     */
    public function show(Villa $villa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villa $villa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villa = Villa::findOrFail($id);
        return view('villa.edit', compact('villa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Villa $villa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $villa = Villa::findOrFail($id);
        $datas = $request->all();
        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $filename = uniqid() . '.' . $img->getClientOriginalExtension();
            $file = Storage::disk('public')->putFileAs('villa', $img, $filename);
            $datas['photo'] = $file;
            Storage::delete('public/' . $villa->photo);
        }
        $villa->update($datas);
        return redirect()->route('villa.edit', compact('id'))->with('status', 'Villa successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villa $villa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $villa = Villa::findOrFail($id);
        $villa->delete();
        return redirect()->route('villa.index')->with('status', 'Villa successfully moved into trash');
    }

    public function trash()
    {
        $villas = Villa::onlyTrashed()->paginate(5);
        return view('villa.trash', compact('villas'));
    }

    public function restore($id)
    {
        $villa = Villa::withTrashed()->findOrFail($id);
        if ($villa->trashed()) {
            $villa->restore();
        } else {
            return redirect()->route('villa.index')->with('status', 'Villa is not in trash');
        }
        return redirect()->route('villa.index')->with('status', 'Villa successfully restored');
    }
    public function deletePermanent($id)
    {
        $villa = Villa::withTrashed()->findOrFail($id);
        if (!$villa->trashed()) {
            return redirect()->route('villa.index')
                ->with('status', 'Can not delete permanent active category');
        } else {
            $villa->forceDelete();
            return redirect()->route('villa.index')
                ->with('status', 'Villa permanently deleted');
        }
    }
    public function ajaxSearch(Request $request)
    {
        $keyword = $request->get('q');
        $villas = Villa::where("name", "LIKE", "%$keyword%")->get();
        return $villas;
    }
}
