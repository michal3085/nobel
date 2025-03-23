<?php

declare(strict_types=1);

function _numberFormat0(string $input, bool $space = false)
{
    if ($space === false) {
        return number_format((float) trim($input), 0, '', '');
    }

    return number_format((float) trim($input), 0, '', ' ');
}

function _numberFormat2(string $input, bool $space = false)
{
    if (isset($input)) {
        $input = preg_replace('/,/', '.', trim($input));
        $input = preg_replace('/\xc2\xa0/', '', trim($input));

        if ($space === false) {
            return number_format((float) $input, 2, '.', '');
        }

        return number_format((float) $input, 2, '.', ' ');
    }
}

function _numberFormat2FillZero(string $input, bool $space = false)
{
    if (! isset($input)) {
        $input = 0;
    }

    return _numberFormat2($input, $space);
}

function _numberFormat1(string $input, bool $space = false)
{
    if (isset($input)) {
        $input = preg_replace('/,/', '.', trim($input));
        $input = preg_replace('/\xc2\xa0/', '', trim($input));

        if ($space === false) {
            return number_format((float) $input, 1, '.', '');
        }

        return number_format((float) $input, 1, '.', ' ');
    }
}

function _numberFormat0OrBlank(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '-';
    }

    if ($space === false) {
        return number_format((float) trim($input), 0, '', '');
    }

    return number_format((float) trim($input), 0, '', ' ');
}

function _numberFormat2OrBlank(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '-';
    }

    return _numberFormat2($input, $space);
}

function _numberFormat1OrBlank(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '';
    }

    return _numberFormat1($input, $space);
}

function _numberFormat1OrDash(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '-';
    }

    return _numberFormat1($input, $space);
}

function _numberFormatIntegerOrDash(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '-';
    }

    return _numberFormat0($input, $space);
}

function _numberFormat2OrDash(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '-';
    }

    return _numberFormat2($input, $space);
}

function _numberFormat2OrBlankPercent(string $input, bool $space = false)
{
    if (floatval($input) === floatval(0)) {
        return '-';
    }

    return _numberFormat2($input, $space) . ' %';
}

function _formatNumberForPostgres(float $input)
{
    return number_format(round($input, 2), 2, '.', '');
}

function _blankIfZero(string $input)
{
    if ((float) $input < 0 or (float) $input > 0) {
        return $input;
    }
    return null;
}

function _numberToRoman(string $num)
{
    // Be sure to convert the given parameter into an integer
    $numberInteger = intval($num);
    $result = '';

    // Declare a lookup array that we will use to traverse the number:
    $lookup = [
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1,
    ];

    foreach ($lookup as $roman => $value) {
        // Look for number of matches
        $matches = intval($numberInteger / $value);

        // Concatenate characters
        $result .= str_repeat($roman, $matches);

        // Substract that from the number
        $numberInteger %= $value;
    }

    return $result;
}

function _num2alpha(int $num)
{
    $numeric = $num % 26;
    $letter = chr(65 + $numeric);
    $num2 = intval($num / 26);
    if ($num2 > 0) {
        return _num2alpha($num2 - 1) . $letter;
    }

    return $letter;
}

function _yesIfAbove0(string $num)
{
    if (floatval($num) === floatval(0)) {
        return '-';
    }

    return 'Tak';
}

function _installments()
{
    return [
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
    ];
}
