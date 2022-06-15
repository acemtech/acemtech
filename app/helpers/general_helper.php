<?php

// Simple page redirect
function redirect($page) {
    header('location:' . URLROOT . '/' . $page);
}

//    Truncate the body text to any limit
function limit_text($text, $limit) {
    $text = html_entity_decode(strip_tags($text));
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

// Category color helper
function colors_category($category_name) {
    switch ($category_name) {
        case 'Nouveautes':
        case 'alaune':
            echo "category-alaune";
            break;

        case 'Festivites':
        case 'Festvites':
        case 'festivites':
            echo "category-festivites";
            break;

        case 'Communiques':
        case 'communiques':
            echo "category-communiques";
            break;

        case 'Innovation':
        case 'innovation':
            echo "category-innovation";
            break;

        case 'Projets':
        case 'projets':
            echo "category-projets";
            break;

        case 'Soutenances':
        case 'soutenances':
            echo "category-soutenances";
            break;

        case 'Archives':
        case 'archives':
            echo "category-archives";
            break;

        case 'Aides' :
        case 'aides':
            echo "category-aides";
            break;
    }
}

function formatDate($date) {
    echo DateTime::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
}

function formatDateMin($date) {
    echo DateTime::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i');
}

