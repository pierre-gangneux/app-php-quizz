<?php

namespace _inc\data;


class Questions{
    public static function getQuestions(): array
    {
        $source = __DIR__ . '/../../data.json';  // __DIR__ fait référence au répertoire où se trouve ce script
        $content = file_get_contents($source);
        $questions = json_decode($content, true);
    
        if (empty($questions)) {
            throw new \Exception('No question :( '.$source, 1);
        }
    
        return $questions;
    }
}