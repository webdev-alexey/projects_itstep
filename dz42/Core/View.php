<?php

namespace Core;

class View {

    public static function render($view, $args = []) {

        // разбивает массив на переменные
        extract($args, EXTR_SKIP);

        $file = "../App/Views/$view";
        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file не найден";
        }
    }
}