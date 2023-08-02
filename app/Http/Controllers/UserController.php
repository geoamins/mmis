<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HrEmployment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)


    {


        // dd($request);
        $data = User::orderBy('id', 'desc');

        $search= $request->input('name');

        if($request->input('name')){
            $data = $data->where('name', 'LIKE', '%'.$search.'%')->orWhere('name', 'LIKE', '%'.$search.'%');
        }
        $data = $data->paginate(5);




        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        // $branches = DB::table('branches')->select('branch_id', 'branchname')->get();
    //   dd($branches);
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $user = new User();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'roles' => 'required'
        ]);
        $image = $request->image;

        if($image){
            // dd($image);
            $imagename = time(). '.'.$image->getClientOriginalExtension();
            $request->image->move('images',$imagename);

            $user->image = $imagename;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);
        // $input['image'] = $imagename;
        // dd($input);
        // $user = User::create($input);
        $user->assignRole($request->input('roles'));
        // $user->branch_id = $request->branch_id;
        // $user->usertype = $request->usertype;
        $user->save();

        // dd($request->employee_id);
        // if($request->employee_id){
        // $employee = HrEmployment::find($request->employee_id);

        // // dd($employee);

        // $employee->user_id = $user->id;
        // $employee->save();
        // }
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        // $branches = DB::table('branches')->select('branch_id', 'branchname')->get();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
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

        // dd($request);
        $user = User::find($id);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'confirmed',
            'roles' => 'required'
        ]);

        // $input = $request->all();

        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);


        $image = $request->image;
    //     $user->branch_id = $request->branch_id;
    //   $user->usertype = $request->usertype;

        if(!empty($image)){
    // dd($image);
      $imagename = time(). '.'.$image->getClientOriginalExtension();
      $request->image->move('images',$imagename);

      $user->image = $imagename;

    //   $user->branch_id = $request->branch_id;
    //   $user->usertype = $request->usertype;
}
if (!empty($request->password)) {
    $user->password = Hash::make($request->password);
} else {
    $input = Arr::except($request->all(), ['password']);
    $user->fill($input);
}
        $user->update();

        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        // HrEmployment::where('user_id',$id)
        // ->update([
        //     'user_id' => null
        // ]);
        // dd($employe);
        // if($employe) {
            // $employe->user_id = null;
            // $employe->update();
        // }
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }

    public function profile(){

        // return view('users.profile');
        return view('users.profile');
    }
}
