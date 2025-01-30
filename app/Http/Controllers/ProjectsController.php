<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'date' => 'required|date',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('upload/projects', 'public');
        }

        // Save project
        Projects::create([
            'title' => $request->title, // Assuming description serves as the title
            'description' => $request->description,
            'date' => $request->date,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('view-events')->with('success', 'Project created successfully.');
    }

    // Handle CKEditor image upload
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('upload/projects', $filename, 'public');
            $url = asset('storage/' . $filePath);

            return response()->json(['uploaded' => true, 'url' => $url]);
        }
        return response()->json(['uploaded' => false, 'error' => ['message' => 'File upload failed.']]);
    }
}
