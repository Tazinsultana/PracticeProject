<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::all();
        return view('templates.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        // dd($request->all());
        $request->validate([
            'note' => 'required'
        ]);
        // dd($request->all());
        DB::beginTransaction();

        try {
            Template::create([
                'note' => $request->note,
                'is_active' => $request->is_active == 1
            ]);
            DB::commit();
        } catch (Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return back()->withErrors([
                'message' => 'Something Went Wrong !!'
            ]);
        }
        return redirect()->route('templates.index')->withMessage('template Created SuccessFully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Template $template)
    {
        return view('templates.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Template $template)
    {
        $request->validate([
            'note' => 'required:templates,note,' . $template->id,
        ]);

        DB::beginTransaction();

        try {
            $template->update([
                'note' => $request->note,
                'is_active' => $request->is_active == 1
            ]);
            DB::commit();
        } catch (Exception $e) {
            // dd($e->getMessage());
            DB::rollBack();
            return back()->withErrors([
                'message' => 'Something Went Wrong !!'
            ]);
        }
        return redirect()->route('templates.index')->withMessage('template Created SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Template $template)
    {
        // dd($template->id);
        $template->delete();
        return redirect()->route('templates.index')->withMessage('Delete Successfully');
    }
}
