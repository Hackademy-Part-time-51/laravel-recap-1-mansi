1. Apri il terminale e crea il progetto utilizzando il comando:
`laravel new nome-progetto`
2. Apri il progetto con il tuo IDE preferito (VsCode, PHPStorm, Atom ..ecc);
3. Sempre da terminale, installa e lancia npm con:
`npm i bootstrap`
4. Apri un secondo terminale e lancia: `php artisan serve`    
5. Importa `@import 'bootstrap'` in resourcess/css/css.app e `import 'bootstrap'` in resources/js/app.js 
6. Inizia a strutturare il progetto e crea un 
    1. Main layouts nella cartella resources/views/components e 
    2. Un componente Navbar
    3. E inserisci la direttiva `@vite(['resourcess/css/css.app', 'resources/js/app.js'])` nel file blade;
7. In un terzo terminale lancia npm con:
`npm run dev` 
8. "Incastra” il codice HTML del template gia pronto nella struttura Main layout e dividi, ove possibile, in componenti (navbar, footer, hero, form, card ecc…);
9. Fai qualche test per verificare che tutto funzioni;
10. Dentro il file delle rotte routes/web.php definisci le rotte che ti serviranno per gestire la webapp ricordandoti di assegnare sempre loro un nome con le `Named Route`;
11. Decidi e crea con il comando apposito i controller necessari e definisci la parte logica di ogni metodo (verosimilmente 1 rotta <=> 1 metodo);
12. Definisci nelle view le rotte con il metodo `{{route('nome-rotta’)}}` ;
13. Per le rotte parametriche utilizza il metodo `{{route('nome-rotta’ ,['chiave' => 'valore'])}}` ;
14. Fai qualche test per verificare che tutto funzioni;
15. Definisci in html il form con i campi necessari e non dimenticare di inserire:
    1. action
    2. method
    3. @csrf
    4. submit
    5. input name
16. Inserisci le regole di validazione;
17. Fai qualche test per verificare che tutto funzioni;
18. Crea una classe Mail per gestire il contenuto del body di ogni form;
19. Crea una view con la struttura html della email da inviare;
20. Configura mailtrap e attendi i lead di ogni utente che chiede informazioni.
21. Fai qualche test per verificare che tutto funzioni;

````
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
```