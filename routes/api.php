<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('border','api\BorderController');
Route::apiResource('games','api\GamesController');
Route::apiResource('game_type_pieces)','api\GameTypePieces');
Route::apiResource('type_piece_controller','api\TypePieceController');
Route::apiResource('action_controller','api\ActionController');
Route::apiResource('action_type_piece','api\ActionTypePieceController');

