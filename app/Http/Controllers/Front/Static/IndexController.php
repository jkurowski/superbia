<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

// CMS
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $routeName = Route::currentRouteName();
        $slug = Str::afterLast($routeName, '.');
        $view = 'front.static.'.$slug;

        abort_unless(View::exists($view), 404);

        // Mapowanie wybranych slugów na konkretne ID stron w CMS
        $pageIdMap = [
            'kontakt' => 1,
            'strefa-klienta' => 2,
            'o-nas' => 3,
            'galeria' => 4,
            'o-inwestycji' => 5,
            'zobacz-domy' => 6,
        ];

        // Dla podanych slugów używamy zmapowanego ID, w innym przypadku domyślnie 1 (jak dotychczas)
        $pageId = $pageIdMap[$slug] ?? 1;
        $page = Page::find($pageId);

        return view($view, compact('page'));
    }
}
