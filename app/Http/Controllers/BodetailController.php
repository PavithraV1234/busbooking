<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodetail;

class BodetailController extends Controller
{
    public function bocreate(){
        return(view('bocreatee'));


    }
    public function insert(Request $request){
        $invalue=$request->validate([
            'Name' => 'required',
            'DOB' => 'required',
            'Travelsname'=> 'required',
            'Accountno'=> 'required',
            'Ifsccode'=>'required',
            'Busname'=>'required',
            'Busno'=>'required',
            'Seats'=>'required'

        ]);
        Bodetail::create($invalue);
        return redirect()->route('dashboard');
    }
    public function bedit($id){
        $bodetail = Bodetail::findOrFail($id);
        return(view('boupdate',['bodetail' => $bodetail]));
    }
    public function destroy($id)
    {
        // Find the record by ID and delete it
        $bodetail = Bodetail::findOrFail($id);
        $bodetail->delete();

        // Optionally, add a success message or redirect
        return redirect()->route('dashboard');
    }
    public function editinsert($id, Request $request){
    
        $incomingFields = $request->validate([
            'Name' => 'required',
            'DOB' => 'required',
            'Travelsname'=> 'required',
            'Accountno'=> 'required',
            'Ifsccode'=>'required',
            'Busname'=>'required',
            'Busno'=>'required',
            'Seats'=>'required'
        ]);
        $bodetail = Bodetail::findOrFail($id);
        $bodetail->update($incomingFields);
        return redirect()->route('dashboard');

}
}
