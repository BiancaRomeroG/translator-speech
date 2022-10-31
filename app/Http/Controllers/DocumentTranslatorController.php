<?php

namespace App\Http\Controllers;

use App\Http\Languages;
use Illuminate\Http\Request;

class DocumentTranslatorController extends Controller
{
    public function index() {
        $languages = Languages::getLanguages();
        return view('document-translator.index', compact('languages'));
    }
}
