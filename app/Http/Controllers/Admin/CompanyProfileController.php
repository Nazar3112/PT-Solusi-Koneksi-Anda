<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function edit()
    {
        $profile = CompanyProfile::first();
        return view('admin.company-profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'history' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = CompanyProfile::first();

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('profiles', 'public');
            $data['logo'] = $imagePath;
        }

        $profile->update($data);

        return redirect()->route('admin.company-profile.edit')->with('success', 'Company Profile updated successfully.');
    }
}
