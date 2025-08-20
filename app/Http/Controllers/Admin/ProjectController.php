<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_project' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('nama', 'nama_project', 'description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $filename);
            $data['image'] = 'uploads/projects/'.$filename;
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project berhasil dibuat.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_project' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('nama', 'nama_project', 'description');

        if ($request->hasFile('image')) {
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $filename);
            $data['image'] = 'uploads/projects/'.$filename;
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project berhasil dihapus.');
    }
}
