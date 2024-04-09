<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ApplicationController extends Controller
{
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'application_name' => 'required|string|max:20',
            'application_address' => 'required|string|max:100',
            'application_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $validatedData = $validator->validated();

        $appName = $validatedData['application_name'];
        $appAddress = $validatedData['application_address'];

        Config::set('application.name', $appName);
        Config::set('application.address', $appAddress);


        if ($request->hasFile('application_logo')) {
            $logoPath = $request->file('application_logo')->storeAs('public/assets/img/admin/application', 'logo.png');
            $logoPath = str_replace('public/', '', $logoPath);
            Config::set('application.logo', $logoPath);
        }

        $configFile = base_path('config/application.php');
        $newConfig = '<?php return ' . var_export(config('application'), true) . ';';
        file_put_contents($configFile, $newConfig);

        $messageData = [
            'text' => 'Application settings updated successfully!',
            'type' => 'success', // 'success', 'warning', 'danger', 'info
            'icon' => 'check-circle'
            // Add more messages as needed
        ];

        return redirect()->back()->with('success', $messageData);
    }

    public function viewConfig()
    {
        if (auth()->user()->type != 'admin'){
            return redirect()->route('application.perms', app()->getLocale());
        }
        $title = "Application Configuration";
        $description = "Change Application settings";
        return view('admin.application.config', compact('title', 'description'));
    }

    public function noPerm()
    {
        $title = "No Permission";
        $description = "You do not have permission to access this page";
        return view('admin.permission', compact('title', 'description'));
    }

    public function profileSetting(){
        $title = "Profile Settings";
        $description = "Change your profile settings here";
        return view('auth.profile_setting',compact('title','description'));
    }

    public function updateProfile(Request $request){
       $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'profilepic' =>'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();

        }

        $validatedData = $validator->validated();

        $profilename = $validatedData['name'];

        $user = User::find(auth()->user()->id);

        if ($request->hasFile('profilepic')) {
            // profilepic name want to be unique name
            $profilepicname = $user->id.'_profilepic'.time().'.'.request()->profilepic->getClientOriginalExtension();
            // move profilepic to public/assets/img/admin/application folder
            $logoPath = $request->file('profilepic')->storeAs('public/assets/img/admin/profile', $profilepicname);
            $logoPath = str_replace('public/', '', $logoPath);

            // if user has already profile pic then delete it from db
            if($user->profilepic){
                unlink(storage_path('app/public/'.$user->profilepic));
            }
            $user->profilepic = $logoPath;
        }

        $user->name = $profilename;
        $user->save();

        $messageData = [
            'text' => 'Profile settings updated successfully!',
            'type' => 'success', // 'success', 'warning', 'danger', 'info
            'icon' => 'check-circle'
            // Add more messages as needed
        ];

        return redirect()->back()->with('success', $messageData);
    }

    public function passwordUpdate(Request $request){
        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required|string',
            'newpassword' => 'required|string|min:8',
            'confrimpassword' => 'required|string|same:newpassword',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();

        }

        $validatedData = $validator->validated();

        $oldpassword = $validatedData['oldpassword'];
        $newpassword = $validatedData['newpassword'];
        $user = User::find(auth()->user()->id);

        if (Hash::check($oldpassword, $user->password)) {
            // remove old password and add new password
            $user->password = Hash::make($newpassword);
            $user->save();

            $messageData = [
                'text' => 'Password updated successfully!',
                'type' => 'success', // 'success', 'warning', 'danger', 'info
                'icon' => 'check-circle'
                // Add more messages as needed
            ];
        }else{
            $messageData = [
                'text' => 'Exisitng password does not match!',
                'type' => 'danger', // 'success', 'warning', 'danger', 'info
                'icon' => 'times-circle'
                // Add more messages as needed
            ];
        }


        return redirect()->back()->with('success', $messageData);
    }
}
