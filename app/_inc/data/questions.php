<?php

namespace _inc\data;
function getQuestions(): array|Exception
{
    $source = './data.json';
    $content = file_get_contents($source);
    $questions = json_decode($content, true);

    if (empty($questions)) {
        throw new Exception('No question :(', 1);
    }

    return $questions;
}