<?php
declare(strict_types=1);


spl_autoload_register(function (string $className) {
    // Définir le répertoire de base (ici 'app/')
    $baseDir = __DIR__ . '/'; 

    // Remplacer les backslashes par des slashes et ajouter .php à la fin
    $path = $baseDir . str_replace('\\', '/', $className) . '.php';

    // Vérifier si le fichier existe
    if (file_exists($path)) {
        require_once $path;
    } else {
        throw new Exception("Fichier non trouvé : $path");
    }
});

