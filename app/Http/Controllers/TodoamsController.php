<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todoam as Todoam;

class TodoamsController extends Controller
{
    //Index method
    public function index() {
        $todoams = Todoam::all();
        return view('todoams')->with('todoams', $todoams);
    }

    public function store(Request $request) {

        $todoam = new Todoam;

        $todoam->todoam = $request->todoam;

        $todoam->save();

        return redirect()->back();

    }

    // Delete Todoam method
    public function delete($id) {
        $todoam = Todoam::find($id);

        $todoam->delete();
        return redirect()->back();
    }

      // Update Todoam method
      public function update($id) {
        $todoam = Todoam::find($id);
    //    Return updated view
        return view('update')->with('todoam', $todoam);
    }

    // Save Updated Todoam method
    public function save(Request $request, $id) {
       
        $todoam = Todoam::find($id);
    //    update todoam in the daabase with new value from form
        $todoam->todoam = $request->todoam;
        $todoam->save();
        
        return redirect()->route('todoams');
    }

        // completed Todoam method 
        public function completed($id) {

            $todoam = Todoam::find($id);

        //   set the completed field to true in the db
             $todoam->completed = 1;

             $todoam->save();
             
              return redirect()->back();
        }
    

}
