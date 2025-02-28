<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $articles = [
        [
            'slug' => 'guida-cucina-italiana',
            'title' => 'Guida Completa alla Cucina Italiana',
            'description' => 'Scopri i segreti della cucina italiana tradizionale con ricette autentiche dalle diverse regioni italiane.',
            'image' => 'https://picsum.photos/id/12/1080/1920'
        ],
        [
            'slug' => 'viaggio-toscana',
            'title' => 'Viaggio attraverso la Toscana',
            'description' => 'Un itinerario di 7 giorni per esplorare le meraviglie artistiche e paesaggistiche della Toscana.',
            'image' => 'https://picsum.photos/id/112/1080/1920'
        ],
        [
            'slug' => 'storia-arte-rinascimentale',
            'title' => 'Storia dell\'Arte Rinascimentale',
            'description' => 'Un approfondimento sui grandi maestri del Rinascimento italiano e le loro opere più celebri.',
            'image' => 'https://picsum.photos/id/9/1080/1920'
        ],
        [
            'slug' => 'vini-italiani-degustazione',
            'title' => 'Guida alla Degustazione dei Vini Italiani',
            'description' => 'Come riconoscere e apprezzare le diverse varietà di vini italiani, dalle tecniche di degustazione agli abbinamenti.',
            'image' => 'https://picsum.photos/id/209/1080/1920'
        ],
        [
            'slug' => 'festival-estate-2025',
            'title' => 'I Migliori Festival Estivi del 2025',
            'description' => 'Calendario completo dei più importanti eventi musicali e culturali previsti per l\'estate 2025 in Italia.',
            'image' => 'https://picsum.photos/id/1/1080/1920'
        ]
    ];
    public function index()
    {
        return view('index', ['articles' => self::$articles]);
    }

    public function about()
    {
        return view('about');
    }

    public function show($article)
    {
        foreach (self::$articles as $self_article) {
            if ($article == $self_article['slug']) {
                return view('show', ['article' => $self_article]);
            }
        }
        abort(404);
        //return view('show', ['article' => $element]]);

    }
}
