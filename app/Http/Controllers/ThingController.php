<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;
use App\Models\UseModel;
use App\Models\Place;
class ThingController extends Controller

{
   public function myshow(){
       $id=auth()->user()->id;
       $mythings=UseModel::where('user_id', $id)->get(); // в юс модель  ищем записи, в которых user id=id
       if(count($mythings)){
        return view('things/mythings')->with('mythings', $mythings);

       }
       else{
           return response('У вас нет Вещей');
       }
   }
   
   //Берём айди регистрированного пользователя, чтобы понять, какие у него вещи
   
       public function showrepair(){
        $id=auth()->user()->id;
        $mythings=UseModel::where('user_id', $id)->get();
        $repair=[];
        $i=0;
        foreach($mythings as $thing){
        $place=Place::findOrFail($thing->place_id);
        if($place->repair){
            $repair[$i]=$thing;
            $i=$i+1;
        }
        }
        return view('things/myrepair')->with('repair', $repair);
  //в май написали все его вещи создали массив, 
       }
       public function showork(){
        $id=auth()->user()->id;
        $mythings=UseModel::where('user_id', $id)->get();
        $work=[];
        $i=0;
        foreach($mythings as $thing){
        $place=Place::findOrFail($thing->place_id);
        if($place->work){
            $work[$i]=$thing;
            $i=$i+1;
        }
        }
        return view('things/mywork')->with('work', $work);
 
       }
    public function createindex(){
        return view('things.create');
    }

    public function updatething($id){
        $things= Thing::findOrFail($id);
        return view('things/update')->with('things', $things);
    }
    



    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'wrnt'=>'required'
        ]);

        $check=Thing::where('name', request('name'))->get();


        if(count($check)){
            $thing_id=$check[0]->id;
            $user_id=$check[0]->master; 
            $use = UseModel::where('thing_id', $thing_id)->where('user_id', $user_id)->get();
            $use_id=$use[0]->id;
            $useupdate=UseModel::findOrFail($use_id);
            $useupdate->amount=$useupdate->amount+1;
            $useupdate->save();
            // return response($useupdate);
            return redirect('/things');
        }
        else{
            $thing = new Thing();
            $thing->name = request('name');
            $thing->description = request('description');
            $thing->wrnt = request('wrnt');
            $thing->master = auth()->user()->id;
            $thing->save();

            $use= New UseModel();
            $use->user_id = auth()->user()->id;
            $use->place_id = 1; 
            $use->thing_id = $thing->id;
            $use->amount = 1;
            $use->save();

            // return response()->json([
            //     'thing' => $thing
            // ], 201);
            return redirect('/things');
        }

    }

    public function delete($id){
        $usedelete=UseModel::where('thing_id', $id)->get();
        foreach ($usedelete as $udelement){
            UseModel::findOrFail($udelement->id)->delete();
        }

        $user_id=auth()->user()->id;
        $thing=Thing::findOrFail($id);
        if($thing->master == $user_id){
        Thing::findOrFail($id)->delete();
        return redirect('/things');
        }
        else{
            return response('Вы не мастер, чтобы удалить эту вещь');
        }
    }

    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'wrnt'=>'required'
        ]);

        $user_id=auth()->user()->id;
        $thing = Thing::findOrFail($id);

        if($thing->master == $user_id){
            $thing->name = request('name');
            $thing->description = request('description');
            $thing->wrnt = request('wrnt');
            $thing->save();

            // return response()->json([
            //     'thing' => $thing
            // ], 201);
            return redirect('/things');
        }
        else{
            return response('Вы не мастер, чтобы изменять эту вещь');
        }
    }

    public function showExact($id){
        return response(Thing::findOrFail($id));
    }

    public function show(){
        $things=Thing::paginate(5);
        // return response()->json(['things'=>$things]);
        return view('things/show')->with('things',$things); 
    }
}
