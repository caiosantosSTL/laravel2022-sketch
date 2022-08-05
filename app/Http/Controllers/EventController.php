<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $varSearch = request('search');

        if ($varSearch) { // search input
            $varEvents = Event::select('*')->where("title", "like", "%" . $varSearch . "%")->get();
        } else {
            $varEvents = Event::all();
        }

        return view('welcome', ['events' => $varEvents, 'search' => $varSearch]);
    }

    public function pagCreate()
    {
        return view('events.create');
    }

    public function actionStore(Request $req)
    {
        $event = new Event;

        $event->title = $req->titlex;
        $event->city = $req->cityx;
        $event->private = $req->privatex;
        $event->desc = $req->descx;
        $event->items = $req->items;

        // image upload

        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $reqImage = $req->image;
            $extension = $reqImage->extension();
            $imageName = md5($reqImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $req->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();


        return redirect('/')->with('msg', 'Was created!!!!!');
    }

    public function pagShowOne($id)
    {

        $eventOne = Event::find($id);

        return view('events.showone', ['event' => $eventOne]);
    }

    public function actionDelete($id){
        Event::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Eliminated!!!');
    }

    public function pagEdit($id){

        $eventOne = Event::find($id);

        return view('events.pagedit', ['event' => $eventOne]);
    }

    public function actionUpdate(Request $req){
        // get the name input automatic, so the name must be equal to the column name
        Event::find($req->id)->update($req->all());

        return redirect('/')->with('msg', 'Was edited!!!');
    }
}
