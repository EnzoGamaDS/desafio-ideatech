<?php

namespace App\Services;

use App\Models\Console;
use App\Models\Game;
use Illuminate\Http\Request;

class GameService
{
    public function listGames()
    {
        $games = Game::latest()->simplePaginate(5);
        return ['games' => $games];
    }

    public function showGames(Game $game)
    {
        return $game->consoles;
    }

    public function createGame()
    {
        $consoles = Console::all();
        return ['consoles' => $consoles];
    }

    public function storeGame(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimetypes:image/*|max:2048',
            'manufacturer' => 'required',
            'launch' => 'required',
            'console' => 'required'
        ]);

        $input = $request->except('image');

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = strval($profileImage);
        }
        $game = Game::create($input);

        foreach ($request->console as $console_id) {
            $console = Console::find($console_id);
            $console->games()->attach([$game->id]);
        }
        return $game;
    }

    public function updateGame(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        return $game->update($input);
    }

    public function deleteGame($game)
    {
        return $game->delete();
    }
}
