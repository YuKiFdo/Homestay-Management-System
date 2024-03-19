<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

// class ApplicationController extends Controller
// {
//     public function update(Request $request)
//     {

//         $validatedData = $request->validate([
//             'application_name' => 'required|string|max:255',
//             'application_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);


//         $appName = $request->input('application_name');
//         Config::set('application.name', $appName);

//         if ($request->hasFile('store_logo')) {
//             $logoPath = $request->file('store_logo')->storeAs('public/assets/img/admin/application', 'logo.png');
//             $logoPath = str_replace('public/', '', $logoPath);
//             Config::set('application.logo', $logoPath);
//         }

//         $configFile = base_path('config/application.php');
//         $newConfig = '<?php return ' . var_export(config('application'), true) . ';';
//         file_put_contents($configFile, $newConfig);

//         return redirect()->back()->with('success', 'application settings updated successfully!');
//     }

//     public function viewConfig()
//     {
//         $title = "Create new Dog";
//         $description = "Some description for the page";
//         return view('admin.application.config', compact('title', 'description'));
//     }
// }



class ApplicationController extends Controller
{
    public function update(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'application_name' => 'required|string|max:5',
            'application_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // If validation passes, retrieve the validated data
        $validatedData = $validator->validated();

        // Retrieve the application name from the validated data
        $appName = $validatedData['application_name'];

        // Update the application name in the config
        Config::set('application.name', $appName);

        // Handle application logo update if a new logo is uploaded
        if ($request->hasFile('application_logo')) {
            $logoPath = $request->file('application_logo')->storeAs('public/assets/img/admin/application', 'logo.png');
            $logoPath = str_replace('public/', '', $logoPath);
            Config::set('application.logo', $logoPath);
        }

        // Save the updated config to the application.php file
        $configFile = base_path('config/application.php');
        $newConfig = '<?php return ' . var_export(config('application'), true) . ';';
        file_put_contents($configFile, $newConfig);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Application settings updated successfully!');
    }

    public function viewConfig()
    {
        $title = "Create new Dog";
        $description = "Some description for the page";
        return view('admin.application.config', compact('title', 'description'));
    }

    // Your other methods remain unchanged
}
