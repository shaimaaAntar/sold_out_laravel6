<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data2=User::all();
       $data =User::all();
       return view('admin.ulist',compact('data','data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.add_user');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $file_extension=$request -> img -> getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/users';
        $request ->img -> move($path,$file_name);
        User::create([
            'name'=>$request->name,
            'img'=>$file_name,
//            'img'=>$request->img,
            'email'=>$request->email,
            'password'=>$request->password

        ]);
        echo 'success';
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo 'edit';
        //
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
        echo "update";
        $user=User::find($id);
        $user->name=$request->name;
        $user->password=$request->password;
        $user->email=$request->email;
        $user->img=$request->img;
        $user->phone=$request->phone;
        $user->save();






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//       echo 'delete';
      $user= User::find($id);
//      $user= User::find('$id');
       $user->delete();
       return redirect()->route('users.index')->with(['messege','delete success']);
    }
}
