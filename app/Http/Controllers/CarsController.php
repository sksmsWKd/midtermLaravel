<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cars = Car::latest()->paginate(5);


        return view('index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([
            'company' => 'required|min:2',
            'name' => 'required|min:2',
            'year' => 'required|min:2|integer',
            'price' => 'required|min:2|integer',
            'type' => 'required|min:2',
            'appearance' => 'required|min:2',
            'image' => 'required|max:10000',
        ]);
        $car = new Car();


        $car->company = $request->company;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->type = $request->type;
        $car->appearance = $request->appearance;



        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs(
                'public/images/',
                $fileName
            );
            $car->image = $fileName;
        }

        $car->save();



        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        return view('show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $car = Car::find($id);

        $car->company = $request->company;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->type = $request->type;
        $car->appearance = $request->appearance;




        if (!($request->hasFile('image'))) {
            return back();
        }
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs(
                'public/images/',
                $fileName
            );
            $car->image = $fileName;
        }

        $car->save();



        return redirect()->route('show', ['id' => $car->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        Car::where('id', $id)->delete();

        Storage::delete('public/images/' . $car->image);

        return redirect()->route('index');
    }

    public function company(Request $request)
    {
        $selected = $request->company;


        $cars  =  Car::where('company', $selected)->latest()->paginate(5);


        return view('specialview1', ['cars' => $cars, 'selected' => $selected]);
    }




    public function type(Request $request)
    {
        $selected = $request->type;


        $cars  =  Car::where('type', $selected)->latest()->paginate(5);


        return view('specialview1', ['cars' => $cars, 'selected' => $selected]);
    }


    public function appearance(Request $request)
    {
        $selected = $request->appearance;


        $cars  =  Car::where('appearance', $selected)->latest()->paginate(5);


        return view('specialview1', ['cars' => $cars, 'selected' => $selected]);
    }
}
