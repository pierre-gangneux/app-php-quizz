<?php

namespace _inc\data;


class Questions{
    static public function getQuestions(): array
    {
        $source = './data.json';
        $content = file_get_contents($source);
        $questions = json_decode($content, true);
    
        if (empty($questions)) {
            throw new \Exception('No question :(', 1);
        }
    
        return $questions;
    }
}