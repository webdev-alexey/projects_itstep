<?php
/*Задача 5*.
Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.
Пример:
echo $form->input(['type'=>'text', 'value'=>'!!!']);
//Код выше выведет <input type="text" value="!!!">
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
//Код выше выведет <form action="index.php" method="POST">
echo $form->close();
//Код выше выведет </form>*/
class Form {
    public function open($attrs) {
        $str = $this->convertToString($attrs);
        return '<form ' . $str . '>';
    }

    public function close() {
        return '</form>';
    }

    public function input($attrs) {
        $str = $this->convertToString($attrs);
        return '<input ' . $str . '>';
    }

    public function submit($attrs) {
        $str = $this->convertToString($attrs);
        return '<input type="submit"' . $str . '>';
    }

    public function password($attrs) {
        $str = $this->convertToString($attrs);
        return '<input type="password"' . $str . '>';
    }

    public function textarea($attrs) {
        $str = $this->convertToString($attrs);
        return '<textarea ' . $str . '></textarea>';
    }

    private function convertToString($arr) {
        $str = '';

        foreach ($arr as $key => $item) {
            $str .= $key . '="' . $item . '" ';
        }

        return $str;
    }

}

$form = new Form;

echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();
