<?php

// Permet d'exécuter ce fichier via navigateur ou via le terminal
if (empty($argv)) {
    echo '<pre>';
}

// TODO : Charger le fichier déclarant la classe Article

// --- START OF YOUR CODE ---
require './classes/articles.php';
// --- END OF YOUR CODE ---

// Vérification de l'existance de la classe Article demandée
if (!class_exists('Article')) {
    die(PHP_EOL.'La classe n\'a pas été écrite ou n\'a pas été incluse'.PHP_EOL.PHP_EOL);
}

// création du premier objet Article
$prems = new Article();
$prems->title = 'Ivre, il refait tous les challenges en un week-end sans dormir.';
$prems->content = 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.';
$prems->author = 'Alexandre';
$prems->date = '2017-07-13';
$prems->category = 'Ma Vie De Dev';

// debug
print_r($prems);
// ici, à toi de vérifier visuellement que les données sont dans la bonne propriété

// création du second objet Article
$deuz = new Article();
$deuz->title = 'POO or not POO, that is the question.';
$deuz->content = 'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.';
$deuz->author = 'Julie';
$deuz->date = '2017-07-04';
$deuz->category = 'TeamBack';


// debug
print_r($deuz);
// ici, à toi de vérifier que les données sont dans la bonne propriété

// TODO : créer l'instance de la classe Article pour le 3e article
/*
Git, pour les n00bs.
Un p'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.
Posté par Lucie le 19 juin 2017 dans #Collaboration.
*/
// $troiz = 

// --- START OF YOUR CODE ---

$troiz = new Article();
$troiz->title = 'return or not return, it\'s hard to say';
$troiz->content = 'Le keyword \'return\' est toujours pas clair chez les développeurs débutant...';
$troiz->author = 'No Name';
$troiz->date = '2019-02-22';
$troiz->category = 'Newbies troubles';
// --- END OF YOUR CODE ---

// debug
if (!empty($troiz)) {
    print_r($troiz);
}
else {
    die(PHP_EOL.'Il faut instancier un objet Article pour le troisième article'.PHP_EOL.PHP_EOL);
}


// Bonus méthode getDateFr
if (method_exists($prems, 'getDateFr')) {
    echo 'Article "'.$prems->title.'" publié le '.$prems->getDateFr().PHP_EOL;
    echo 'Article "'.$deuz->title.'" publié le '.$deuz->getDateFr().PHP_EOL;
    echo 'Article "'.$troiz->title.'" publié le '.$troiz->getDateFr().PHP_EOL;

    // vérif
    if (empty($prems->getDateFr())) {
        die(PHP_EOL.'Il manquerait pas un petit "retour" dans la méthode ?');
    }
}
else {
    die(PHP_EOL.'Il faut déclarer une méthode "getDateFr" dans la classe Article'.PHP_EOL.PHP_EOL);
}

echo '<p>============= PRIVATE ============</p>';

require './classes/topics.php';

// $topic1->title = 'Ivre, il refait tous les challenges en un week-end sans dormir.';
// $topic1->content = 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.';
// $topic1->author = 'Alexandre';
// $topic1->date = '2017-07-13';
// $topic1->category = 'Ma Vie De Dev';
$topic1 = new Topic('title', 'content', 'author', 'date', 'category');

$topic1->__set('title', 'Ivre, il refait tous les challenges en un week-end sans dormir.<br />');
echo $topic1->__get('title');

$topic1->__set('content', 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.<br />');
echo $topic1->__get('content');

$topic1->__set('author', 'Alexandre<br />');
echo $topic1->__get('author');

$topic1->__set('date', '2017-07-13<br />');
echo $topic1->__get('date');

$topic1->__set('category', 'Ma Vie De Dev<br />');
echo $topic1->__get('category');


// ******** A la mano *******
// $topic1->setContent('Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.<br />');
// echo $topic1->getContent();

// $topic1->setContent('Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.');
// echo $topic1->getContent();
echo '<br />';
echo '<br />';

$topic2 = new Topic('title', 'content', 'author', 'date', 'category');

$topic2->__set('title', 'POO or not POO, that is the question.<br />');
echo $topic2->__get('title');

$topic2->__set('content', 'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.<br :>');
echo $topic2->__get('content');

$topic2->__set('author', 'Julie<br />');
echo $topic2->__get('autnor');

$topic2->__set('date', '2017-07-04<br />');
echo $topic2->__get('date');

$topic2->__set('category', 'TeamBack<br />');
echo $topic2->__get('category');

// ******** A la mano *******
// $topic2->setTitle('POO or not POO, that is the question.<br />');
// echo $topic2->getTitle();

// $topic2->setContent('La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.');
// echo $topic2->getContent();

if (empty($argv)) {
    echo '</pre>';
}






