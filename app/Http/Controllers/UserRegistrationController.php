<?php

namespace App\Http\Controllers;
use App\User;
use App\UserType;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Session;

class UserRegistrationController extends Controller
{

    public function showRegistrationForm(){
        $usertypes = UserType::all();

        return view('admin.users.registration-from',[
            'usertypes'=>$usertypes
        ]);
    }

    public function userSave(Request $request)
    {

       $request->validate([
         'role' => ['required'],
          // 'department_id' => ['required'],
         'name' => ['required', 'string', 'max:255'],
         'mobile' => ['required', 'max:13'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);


      $user = new User;
      $user->name = $request->input('name');

      if($request->has('department_id')) {
      $user->department_id = $request->input('department_id');
    }else $user->department_id = -1;
      $user->role = $request->input('role');
      $user->mobile = $request->input('mobile');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));

      $user->save();
      Session::flash('message', " $user->role added Successfully! ");
      Session::flash('alert-class', 'alert-success');
      return back();

        // $this->validator($request->all())->validate();
        //
        // event(new Registered($users = $this->create($request->all())));
        //
        // $users = User::all();
        // $users->save();
        // return view ('admin.users.user-list',['users'=>$users]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role' => ['required'],
             // 'department_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'min:13', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'role' => $data['role'],
            'department_id' => $data['department_id'],
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function userList(){
        if(Auth::user()->role=='Admin'){
        $users = User::all();
        return view ('admin.users.user-list',['users'=>$users]);
    }else{
        return redirect('/home');
     }
  }

  public function userProfile($userId){
    $user = User::find($userId);
    return view('admin.users.profile',['user'=>$user]);
   }

   public function changeUserInfo($id){
    $user = User::find($id);
    return view('admin.users.change-user-info',['user'=>$user]);

   }

   public function userInfoUpdate(Request $request){
    $this->validate($request,[
        'name'=>'required|string|max:255',
        'mobile'=>'required|string|max:13|min:13',
        'email'=>'required|string|max:255|email',
    ]);

    $user = User::find($request->user_id);
    $user->name = $request->name;
    $user->mobile = $request->mobile;
    $user->email = $request->email;

    $user->save();
    return redirect("/user-profile/$request->user_id")->with('message','Profile Update Successfully');

   }

   public function changeUserAvatar($id){
    $user = User::find($id);
    return view('admin.users.change-user-avatar',['user'=>$user]);

   }

   public function updateUserPhoto(Request $request){
    $user = User::find($request->user_id);
    $file = $request->file('avatar');
    $imageName = $file->getClientOriginalName();
    $directory = 'admin/assets/avatar/';
    $imageUrl = $directory.$imageName;
    //$file->move($directory,$imageUrl);
    Image::make($file)->resize(300 , 300)->save($imageUrl);

    $user->avatar = $imageUrl;

    $user->save();
    return redirect("/user-profile/$request->user_id")->with('message','Photo Upload Successfully');

   }

   public function changeUserPassword($id){
       $user = User::find($id);
       return view('admin.users.change-user-password',['user'=>$user]);
   }

   public function userPasswordUpdate(Request $request){
       $this->validate($request,[
           'new_password' =>'required|string|min:8'
       ]);
       $oldPassword = $request->password;
       $user = User::find($request->user_id);
      if(Hash::check($oldPassword,$user->password)){
          $user->password = Hash::make($request->new_password);
          $user->save();
          return redirect("/user-profile/$request->user_id")->with('message','Password Updated Sucessful');
      }else{
          return back()->with('error_message','Old password does not match. Plrase try again.....');
      }
   }


}
