<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];
    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {

        case:    // displays 404 if route not specified above
            $main_view = 'public/item_create.php';
            break;

        case:    // displays 404 if route not specified above
            $main_view = 'public/item_edit.php';
            break;

        case:    // displays 404 if route not specified above
            $main_view = 'public/items_index.php';
            break;

        case:    // displays 404 if route not specified above
            $main_view = 'public/items.php';
            break;

        case:    // displays 404 if route not specified above
            $main_view = 'public/log_in.php';
            break;

        case:    // displays 404 if route not specified above
            $main_view = 'public/sign_up.php';
            break;

        case:    // displays 404 if route not specified above
            $main_view = 'public/user_profile';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());