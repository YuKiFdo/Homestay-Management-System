<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'application_name' => 'required|string|max:20',
            'application_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $validatedData = $validator->validated();

        $appName = $validatedData['application_name'];

        Config::set('application.name', $appName);

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
        $title = "Application Configuration";
        $description = "Change Application settings";
        return view('admin.application.config', compact('title', 'description'));
    }

}
