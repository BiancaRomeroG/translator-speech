<?php

namespace App\Http\Controllers;

use App\Http\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageTranslatorController extends Controller
{
    public function index() {
        $user = Auth::user();
        $languages = Languages::getLanguages();
        return view('image-translator.index', compact('user', 'languages'));
    }
}
