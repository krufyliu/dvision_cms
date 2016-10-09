<?php
/**
 * Created by PhpStorm.
 * User: liujun
 * Date: 2016/10/4
 * Time: 下午7:31
 */

use Illuminate\Support\HtmlString;

/**
 * detect weather a filed has error
 * @param $errors
 * @param $key
 * @return string
 */
function has_error_class($errors, $key)
{
    if ($errors->has($key)) {
        return 'has-error';
    } else {
        return '';
    }
}

function error_block($errors, $key)
{
    if ($errors->has($key)) {
        return new HtmlString("<span class='help-block'> {$errors->first($key)} </span>");
    } else {
        return '';
    }
}

function paginate_conclusion($paginating)
{
    $from = ($paginating->currentPage()-1) * $paginating->perPage() + 1;
    $from = $from > $paginating->total() ? 0 : $from;
    $to = ($paginating->currentPage()-1) * $paginating->perPage() + $paginating->count();
    return new HtmlString("Showing {$from} to {$to} of {$paginating->total()} entries");
}