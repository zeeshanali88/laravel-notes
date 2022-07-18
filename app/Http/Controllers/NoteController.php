<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Note;
use Auth;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        $auth_user = Auth::user();
        $notes = Note::where("resource_id", $auth_user->id)->where("resource_type", "App\Models\User")->paginate(2);
        return Inertia::render('Dashboard', ["user" => $auth_user, "notes" => $notes]);
    }
}
