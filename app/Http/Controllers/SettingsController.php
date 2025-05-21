<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit() {
        $settings = json_decode(file_get_contents(storage_path('app/settings.json')), true);

        return view('admin/ponuda-edit', [
            "settings" => $settings,
        ]);
    }

    public function update(Request $req) {
        $valid = $req->validate([
            'ponuda' => 'required|in:1,2',
        ]);

        $settings = json_decode(file_get_contents(storage_path('app/settings.json')), true);
        $settings['ponuda'] = $valid['ponuda'];

        file_put_contents(storage_path('app/settings.json'), json_encode($settings, JSON_PRETTY_PRINT));

        return redirect()->route('admin.index')->with('success', 'Ponuda uspešno izmenjena.');
    }
}
