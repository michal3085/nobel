<?php

function _setFilter($name)
{
    if (isset(request()->_token)) {
        Log::info('[FILTER] setting ['.$name.']');
        Log::info(request()->all());

        session()->put($name, request()->all());
    }

    if (request()->has('page')) {
        Log::info('[FILTER] setting ['.$name.'] page ['.request()->page.']');

        session()->put($name.'.page', request()->page);
    }

    if (request()->has('sortName')) {
        Log::info('[FILTER] setting ['.$name.'] sortName ['.request()->sortName.'] sortDir ['.request()->sortDir.']');

        session()->put($name.'.sortName', request()->sortName);
        session()->put($name.'.sortDir', request()->sortDir);
    }
}

/*
 * Method allows to set filters from separete forms/buttons without reseting prev value
 */
function _setFilterFieldByField($name)
{
    if (isset(request()->_token)) {
        Log::info('[FILTER] setting ['.$name.']');
        Log::info(request()->all());

        foreach (request()->all() as $key => $value) {
            session()->put($name.'.'.$key, $value);
        }
    }

    if (request()->has('page')) {
        Log::info('[FILTER] setting [ '.$name.'] page ['.request()->page.']');

        session()->put($name.'.page', request()->page);
    }

    if (request()->has('sortName')) {
        Log::info('[FILTER] setting ['.$name.'] sortName ['.request()->sortName.'] sortDir ['.request()->sortDir.']');

        session()->put($name.'.sortName', request()->sortName);
        session()->put($name.'.sortDir', request()->sortDir);
    }
}

function _setDefaultFilter($name, $value)
{
    if (! session()->has($name)) {
        session()->put($name, $value);
    }
}

function _setArrayFilter($name, $value)
{
    if (request()->has($name)) {
        session()->put($name, request()->$name);
    } else {
        if (! session()->has($name)) {
            session()->put($name, $value);
        }
    }
}

function _setFilterKey($name, $value)
{
    session()->put($name, $value);
}

function _setDefaultSort($name, $sortName, $sortDir)
{
    if (! session()->has($name.'.sortName')) {
        session()->put($name.'.sortName', $sortName);
        session()->put($name.'.sortDir', $sortDir);
    }
}

function _getFilter($value)
{
    return session()->get($value);
}

function _forgetFilter($name)
{
    Log::info('[FILTER] clear ['.$name.']');

    session()->forget($name);
}

function _transformMultiselectArray($name)
{
    $result = [];
    $array = session()->get($name);
    if (is_array($array)) {
        foreach ($array as $value) {
            $result[$value] = $value;
        }
    }

    session()->put($name, $result);
}

function _setClearField($name)
{
    if (isset(request()->clearField)) {
        _forgetFilter($name.'.'.request()->clearField);
        _forgetFilter($name.'.clearField');
    }
}

function _setFilterValue($name, $key, $value)
{
    Log::info('[FILTER] setting ['.$name.'] key ['.$key.'] value ['.$value.']');

    session()->put($name.'.'.$key, $value);
}
