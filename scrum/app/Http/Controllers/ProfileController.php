<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
use JavaScript;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.

     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $completed = $user->tasks->where('completed','1')->count(); 
        $current = $user->tasks->where('completed','0')->count();
        JavaScript::put([
            'completed' => $completed,
            'current' => $current,
        ]);
        return view('profiles.show',compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::findOrFail(auth()->id());
        {
            return view('profiles.edit',compact('user'));
        }
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
        $user = User::findOrFail(auth()->id());
        if (request()->hasFile('image'))
        {
           request()->validate(
               [
                   'image' => 'file|image|max:10000',
               ]
               );
               $user->image = request('image');
        }
        $this->storeImage($user);

        $user->save();

        return redirect('/profile/'.$user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function storeImage($user)
    {
         if (request()->has('image')) {
           $user->update(
               [
                  'image'=>request()->image->store('profileimg', 'public'),
               ]
               );
         }

         $image = Image::make(('storage/' . $user->image))->fit(200,200);
         $watermark = Image::make('storage/watermarks/watermark.png')->fit(20,20);
         $image->insert($watermark, 'bottom-right', 10, 10); //insert watermark in (also from public_directory)
         $image->save('storage/' . $user->image);
         return $user->image;
        }
}
