<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Services\GameService;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private $gameService;

    public function __construct()
    {
        $this->gameService = new GameService();
    }

    /**
     * Show the list of games with pagination.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index', $this->gameService->listGames());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create', $this->gameService->createGame());
    }
    /**
     * Store a newly created game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->gameService->storeGame($request);
        return redirect()->route('games.index')->with('success', 'Jogo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param   $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        $console_id =  $this->gameService->showGames($game);
        return view('games.show', compact('game', 'console_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $this->gameService->updateGame($request, $game);

        return redirect()->route('games.index')
            ->with('success', 'Jogo atualizado com sucesso !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $this->gameService->deleteGame($game);

        return redirect()->route('games.index')
            ->with('success', 'Jogo deletado com sucesso !!!');
    }
}
