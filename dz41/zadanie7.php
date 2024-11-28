<?php
/*Задача 7*.
 Создайте класс Session - оболочку над сессиями.
Он должен иметь следующие методы: создать переменную сессии,
получить переменную, удалить переменную сессии, проверить наличие переменной сессии.*/
class Session {
    public function __construct() {
        session_start();
    }

    public function setSession($name, $value) {
        $_SESSION[$name] = $value;
    }

    public function getSession($name) {
        return $_SESSION[$name];
    }

    public function createValueSession() {
        if (!empty($session)) {
            return true;
        }

        return false;
    }

    public function destroySession($name) {
        unset($_SESSION[$name]);
    }
}

$session = new Session();
$session->setSession('one', aleks);
echo $session->getSession('two');
//echo $session->getSession('one');