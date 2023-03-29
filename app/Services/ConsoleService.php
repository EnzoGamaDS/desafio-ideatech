<?php

namespace App\Services;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleService
{
    public function listConsoles()
    {
        $consoles = Console::latest()->simplePaginate(5);
        return ['consoles' => $consoles];
    }

    public function storeConsole(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
        ]);

        return Console::create($request->all());
    }

    public function updateConsole(Request $request, Console $console)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'manufacturer' => 'required'
        ]);

        return $console->update($request->all());
    }

    public function deleteConsole($console)
    {
        return $console->delete();
    }
}
