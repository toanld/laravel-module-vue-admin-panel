<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class UploadController extends Controller
{
    /**
     * Update the avatar for the user.
     */
    public function upload(Request $request): string
    {
        $path = $request->file('file')->store('public');
        $name = str_replace('public/', '', $path);
        $path = asset('storage/' . $name);
        return json_encode(['location' => '/storage/' . $name]);
    }
}