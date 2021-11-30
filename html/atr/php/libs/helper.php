<?php

use staticList;

function get_param($key, $default_val, $is_post = true)
{
    $arry = $is_post ? $_POST : $_GET;
    return $arry[$key] ?? $default_val;
}

function redirect($path)
{
    if ($path === GO_HOME) {
        $path = get_url('');
    } elseif ($path === GO_REFERER) {
        $path = $_SERVER['HTTP_REFERER'];
    } else {
        $path = get_url($path);
    }

    header("Location: {$path}");

    die();
}

function the_url($path)
{
    echo get_url($path);
}

function get_url($path)
{
    return BASE_CONTEXT_PATH . trim($path, '/');
}

function is_alnum($val)
{
    return preg_match("/^[a-zA-Z0-9]+$/", $val);
}

function escape($data)
{
    if (is_array($data)) {
        foreach ($data as $prop => $val) {
            $data[$prop] = escape($val);
        }

        return $data;
    } elseif (is_object($data)) {
        foreach ($data as $prop => $val) {
            $data->$prop = escape($val);
        }

        return $data;
    } else {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}

function is_staticListParam($val, $staic_list_param)
{
    $res = false;

    foreach ($staic_list_param as $key => $value) {
        if ($key === $val) {
            $res = true;
        }
    }

    return $res;
}

function get_match_data($matchs)
{
    $result = [
        'wins' => 0,
        'loses' => 0,
    ];
    foreach ($matchs as $match) {
        if ($match->win_flg === 1) {
            $result['wins']++;
        } else {
            $result['loses']++;
        }
    }
    return $result;
}

function count_points($matchs)
{
    $points = 0;
    foreach ($matchs as $match) {
        if ($match->win_flg === 1) {
            switch ($match->match_type) {
            case 1:
                $points += 10;
                break;
            case 3:
                $points += 30;
                break;
            case 5:
                $points += 50;
                break;
            };
        }
    }

    return $points;
}
