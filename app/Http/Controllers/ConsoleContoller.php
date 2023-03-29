<?php

namespace App\Http\Controllers;

use App\Models\Console;
use App\Services\ConsoleService;
use Illuminate\Http\Request;

class ConsoleContoller extends Controller
{
    private $consoleService;

    public function __construct()
    {
        $this->consoleService = new ConsoleService();
    }

    /**
     * Show the list of Consoles with pagination.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consoles.index', $this->consoleService->listConsoles());
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
        $this->consoleService->storeConsole($request);

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
     * @param   $console
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        $this->consoleService->updateConsole($request, $console);
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
        $this->consoleService->deleteConsole($console);
        return redirect()->route('consoles.index')
            ->with('success', 'Console deletado com sucesso !!!');
    }
}
