<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Project;
use App\User;
use App\Task;
use App\Http\Resources\Project as ProjectResource;


class ProjectController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->user()->projects;
        $users = User::all();
        return view('project', compact('projects'), compact('users'));
    }
    public function show(Project $project)
    {   
        $this->authorize('update',$project);
        $tasks = Task::where('project_id', $project->project_id);
        // $complete = $tasks->where('completed','=','1');
        // return($complete);
        return view('project.show',compact('project','tasks'));
    }
    public function create()
    {   
        $users = User::all();   
        return view('create');
    }

    public function store()
    {   
       
        request()->validate([
            'name'=> ['required','min:5'],
            'description'=>['required','min:15']
        ]);
        //$attributes['user_id']=auth()->id(); this works in 5.8 laravel
        Project::create([
            'name'=>request('name'), 
            'description'=>request('description'),
            'user_id' => auth()->id(),
          
            
        ]);

        
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        $this->authorize('update',$project);
        
        return view('project.edit',compact('project'));
    }

    public function update($project_id)
    {
        $project = Project::findOrFail($project_id);



        request()->validate([
           'name' => ['required', 'min:4', 'max:20'],
           'description' => ['required', 'min:5', 'max:300'],
           'deadline' => ['required','date_format:Y-m-d'],

        ]);

        $project->name = request('name');
        $project->description = request('description');
        $project->deadline = request('deadline');

        if (request()->hasFile('image'))
        {
           request()->validate(
               [
                   'image' => 'file|image|max:10000',
               ]
               );
               $project->image = request('image');
        }

        $this->storeImage($project);

        $project-> save();

        return redirect('/projects/'.$project_id);
    }

    public function destroy($project_id)
    {
        Project::findOrFail($project_id)->delete();

        return redirect('/projects');
    }

    private function storeImage($project)
    {
         if (request()->has('image')) {
           $project->update(
               [
                  'image'=>request()->image->store('uploads', 'public'),
               ]
               );
         }

         $image = Image::make(('storage/' . $project->image))->fit(200,200);
         $watermark = Image::make('storage/watermarks/watermark.png')->fit(20,20);
         $image->insert($watermark, 'bottom-right', 10, 10); //insert watermark in (also from public_directory)
         $image->save('storage/' . $project->image);
         return $project->image;
    }

    //API methods
    public function apiIndex()
    {
        //get projects
        $projects = Project::paginate(15);
        return ProjectResource::collection($projects);
    }
    public function apiShow($project_id)
    {
        //get projects
        $project = Project::findOrFail($project_id);
        return new ProjectResource($project);
    }
    public function apiStore(Request $request)
    {
        $project = $request->isMethod('put') ? Project::findOrFail($request->project_id) : new Project;

        $project->project_id =$request->input('project_id');
        $project->name =$request->input('name');
        $project->description = $request->input('description');
        $project->user_id = auth()->id();

        if($project->save())
        {
            return new ProjectResource($project);
        }
    }
    public function apiDestroy($project_id)
    {
        $project = Project::findOrFail($project_id);
        if($project->delete()){
            return new ProjectResource($project);
        }
    }
}
