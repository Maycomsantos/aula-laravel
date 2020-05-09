<?php

use Illuminate\Support\Arr;

/**
 *
 */
if (! function_exists('route_is')) {

    function route_is($routes)
    {
        return in_array(\Route::current()->getName(), Arr::wrap($routes));
    }
}

/**
 *
 */
if (! function_exists('icon_status')) {

    function icon_status(int $status)
    {
        $icon = $status == 1
            ? ['icon' => 'check', 'color' => 'text-success']
            : ['icon' => 'times', 'color' => 'text-danger'];

        echo vsprintf('<i class="fa fa-%s %s"></i>', $icon);
    }
}

/**
 *
 */
if (! function_exists('uploads_path')) {

    function uploads_path(string $path = '')
    {
        return asset('storage/' . $path);
    }
}

if (! function_exists('cnpj_db')) {

    function cnpj_db($value)
    {
        return left_zero(str_replace(['.', '-', '/'], '', $value), 14);
    }
}

/**
 *
 */
if (! function_exists('public_path')) {

    function public_path(string $path = '')
    {
        return asset('public/' . $path);
    }
}

/**
 *
 */
if (! function_exists('public_storage_path')) {

    function public_storage_path(string $path = '')
    {
        return public_path('storage/' . $path);
    }
}

/**
 *
 */
if (! function_exists('calc_percentage')) {

    function calc_percentage($value, $total = 0)
    {
        return $total == 0 ? 0 : round(($value / $total) * 100, 2);
    }
}

/**
 *
 */
if (! function_exists('date_db')) {

    function date_db($date)
    {
        return implode('-', array_reverse(explode('/', $date)));
    }
}


/**
 *
 */
if (! function_exists('start_datetime_db')) {

    function start_datetime_db($date)
    {
        return date_db($date) . ' 00:00:00';
    }
}

/**
 *
 */
if (! function_exists('end_datetime_db')) {

    function final_datetime_db($date)
    {
        return date_db($date) . ' 23:59:59';
    }
}


/**
 *
 */
if (! function_exists('money_db')) {

    function money_db($value)
    {
        return str_replace(['.', ','], ['', '.'], $value);
    }
}

/**
 *
 */
if (! function_exists('money_br')) {

    function money_br($value)
    {
        return $value ? number_format($value, 2, ',', '.') : '0,00';
    }
}

/**
 *
 */
if (! function_exists('phone_db')) {

    function phone_db($value)
    {
        return str_replace(['(', ')', '-', ' '], [''], $value);
    }
}

if (! function_exists('valid_phone')) {

    function valid_phone($phone)
    {
        return preg_match('/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/', $phone);
    }
}

/**
 *
 */
if (! function_exists('phone_view')) {

    function phone_view($value)
    {
        if (strlen($value) == 10) {
            return preg_replace("/(\d{2})(\d{4})/", "(\$1) \$2-\$3", $value);
        }

        return preg_replace("/(\d{2})(\d{1})(\d{4})/", "(\$1) \$2 \$3-\$4", $value);
    }
}



if (! function_exists('left_zero')) {

    function left_zero($value, $qty = 11)
    {
        return str_pad($value, $qty, 0, STR_PAD_LEFT);
    }
}

/**
 *
 */
if (! function_exists('document_db')) {

    function document_db($value = null)
    {
        $document = preg_replace("/\D/", '', $value);
        $lenght = strlen($document) > 11 ? 14 : 11;

        return $value ? left_zero($document, $lenght) : null;
    }
}

/**
 *
 */
if (! function_exists('document_view')) {

    function document_view($value)
    {
        $document = preg_replace("/\D/", '', $value);

        if (strlen($document) == 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $document);
        }

        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $document);
    }
}

/**
 *
 */
if (! function_exists('set_selected')) {

    function set_selected($field, $value)
    {
        return $field == $value ? 'selected' : '';
    }
}

/**
 *
 */
if (! function_exists('set_checked')) {

    function set_checked($field, $value)
    {
        return $field == $value ? 'checked' : '';
    }
}

/**
 *
 */
if (! function_exists('array_obj')) {

    function array_obj($array)
    {
        return json_decode(json_encode($array));
    }
}

/**
 *
 */
if (! function_exists('protocol_type')) {

    function protocol_type(int $type)
    {
        $types = [
            1 => 'ENTREGA',
            2 => 'RECEBIMENTO'
        ];

        return $types[$type];
    }
}

/**
 *
 */
if (! function_exists('hashId')) {

    function hashId($number)
    {
        return '#' . left_zero($number, 6);
    }
}

/**
 *
 */
if (! function_exists('userIsSuperAdmin')) {

    function userIsSuperAdmin()
    {
        return auth()->user()->isSuperAdmin();
    }
}

/**
 *
 */
if (! function_exists('active_tab')) {

    function active_tab($name)
    {
        return request()->tab == $name ? 'active' : '';
    }
}
