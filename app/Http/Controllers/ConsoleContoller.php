<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleContoller extends Controller
{
    /**
     * Show the list of Consoles with pagination.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consoles = Console::latest()->simplePaginate(5);
        $data = [
            'consoles' => $consoles,
        ];

        return view('consoles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consoles.create');
    }
    /**
     * Store a newly created console in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
        ]);

        Console::create($request->all());

        return redirect()->route('consoles.index')->with('success', 'Console cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function show(Console $console)
    {
        return view('consoles.show', compact('console'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function edit(Console $console)
    {
        return view('consoles.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'manufacturer' => 'required'
        ]);

        $console->update($request->all());

        return redirect()->route('consoles.index')
            ->with('success', 'Console atualizado com sucesso !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function destroy(Console $console)
    {
        $console->delete();

        return redirect()->route('consoles.index')
            ->with('success', 'Console deletado com sucesso !!!');
    }
}
