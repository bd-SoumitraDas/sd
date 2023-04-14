<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SupervisionController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function reg()
    {
        return view('registration');
    }


    public function teacherStore(Request $request)
    {

        $request->validate([
            'name'      => 'required',
            'mail'      => 'required|unique:users',
            'password'  => 'required|min:6|max:12',
            'cpassword' => 'required|same:password|min:6|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->mail = $request->mail;
        $user->password = Hash::make($request->password);
        $user->role = 'teacher';
        $result = $user->save();

        if ($result) {
            return redirect('index')->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }


    public function studentStore(Request $request)
    {

        $request->validate([
            'name'      => 'required',
            'mail'      => 'required|unique:users',
            'uid'       => 'required',
            'password'  => 'required|min:6|max:12',
            'cpassword' => 'required|same:password|min:6|max:12'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->mail = $request->mail;
        $user->uid = $request->uid;
        $user->password = Hash::make($request->password);
        $user->role = 'student';
        $result = $user->save();

        if ($result) {
            return redirect('index')->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }


    public function login()
    {
        return view('login');
    }


    public function loginstore(Request $request)
    {

        $request->validate([
            'mail'      => 'required',
            'password'  => 'required|min:6|max:12'
        ]);

        $user = User::where('mail', '=', $request->mail)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginid', $user->id);
                return redirect('index');
            } else {
                return back()->with('fail', 'Password not matched.');
            }
        } else {
            return back()->with('fail', 'This email is not regstered.');
        }
    }

    public function logout()
    {
        if (Session::has('loginid')) {
            Session::pull('loginid');
            return redirect('login');
        }
    }

    public function dash()
    {
        return view('website.admin.dashboard');
    }

    public function studentlist()
    {
        // $users=DB::table('users')
        //         ->get();
        $users = DB::table('users')->where('role', '=', 'student')->get();
        return view('website.admin.studentlist', compact('users'));
    }

    public function teacherlist()
    {
        $users = DB::table('users')->where('role', '=', 'teacher')->get();
        return view('website.admin.teacherlist', compact('users'));
    }

    public function delete($id)
    {
        $deleted = DB::table('users')
            ->where('id', '=', $id)
            ->delete();
        return redirect('website.admin.dashboard');
    }


    // for student
    public function studentdash()
    {

        return view('website/student/studentdash');
    }

    public function createproject()
    {

        return view('website/student/createproject');
    }
    public function storeproject(Request $request)
    {

        $request->validate([
            'pname'      => 'required',
            'desc'       => 'required',
            'name'       => 'required',
            
            'adate'      => 'required',
            'sdate'      => 'required',

        ]);
        $team = new Team();
        $team->pname = $request->pname;
        $team->desc = $request->desc;
        $team->name = $request->name;
      
        $team->adate = $request->adate;
        $team->sdate = $request->sdate;
        $result = $team->save();

        if ($result) {
            return redirect('projectlist')->with('success', 'You have registered your project successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
    public function projectlist()
    {
        $teams=DB::table('teams')
                ->get();
    //     $users = DB::table('users')->where('role', '=', 'student')->get();

        return view('website.student.list', compact('teams'));
    }


}
