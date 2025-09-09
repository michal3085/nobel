<?php

function _getOfficeTitle(string $string): string
{
    return match ($string) {
        'virtualOffices' => 'Wirtualne biuro',
        'coworkingOffices' => 'Coworking',
        'readyOffices' => 'Biura',
        default => 'Biura',
    };
}
