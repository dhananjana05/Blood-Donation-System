<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;




use Illuminate\Support\Facades\DB;


class UpdateController extends Controller
{

    //protected $productss;
    protected $result;

 
    public function index()
    {
        return view('register.update');
    }
 




    


    public function search(Request $request)
    {
     $searchQuery = $request->input('query');
     $results = Registration::where('id','like','%' . $searchQuery . '%')->get();
     return view('register.search',['results'=>$results]);

    }

    
      public function delete($id)
      {
        $result = Registration::find($id);
        
        if($result)
        {
            $result->delete();
        }
        //return redirect()->route('register.update');
        return redirect()->back();

    }


    public function update($id){


        $result = Registration::find($id);
        

    }





    // UpdateController.php




    public function processUpdate(Request $request, $id = null){


        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'dob' => 'required|date',
            'age' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'Dlisence' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            
        ]);




        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'age' => $request->input('age'),
            'weight' => $request->input('weight'),
            'height' => $request->input('height'),
            'Dlisence' => $request->input('Dlisence'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
        ];

        if ($id) {
            Registration::find($id)->update($data);
        } else {
            Registration::create($data);
        }

        return redirect()->route('update.search', $id)->with('success', 'Profile updated successfully!');
    }

    


    public function edit($id)
{
    $result = Registration::find($id);

    return view('register.update-form', compact('result'));
}


}
