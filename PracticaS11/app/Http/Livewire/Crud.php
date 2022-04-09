<?php

namespace App\Http\Livewire;
use App\Models\Pet;
use Illuminate\Http\Request;

use Livewire\Component;

class Crud extends Component
{
    public $pets, $name, $age, $color, $pet_id;

    public function index()
    {
        $pets = Pet::all();
        return view('livewire.crud', compact('pets'));
    }
    
    public function create()
    {
        //
        return view('pet.create');
    }


    public function store(Request $request)
    {
        //todos los datos que se envien se van a recepcionar
        $petData = request()->except('_token');
        Pet::insert($petData);
        return response()->json($petData); //vamos a retornar los datos que han sido enviados
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        //recuperar los datos
        $pets=Pet::findOrFail($id);
        return view('pet.edit');
    }

    public function update(Request $request, $id)
    {
        //
        $petData=request()->except(['_token', '_method']);
        Pet::where('id', '=', $id)->update($petData);
        return redirect('pet');
    }

    public function destroy($id)
    {
        //
        Pet::destroy($id);
        return redirect('pet');
    }

}
