<?php
/*Задача 4*.
Создать класс, у которого есть свойства имени и фамилии, идентификатор (покупатель).
При инициализации, создавался новый объект с именем и фамилией, и идентификатором.
Создать методы установки и получения имени и фамилии, идентификатор.
вывести на экран информации о созданном объекте. Создать три экземпляра класса.*/

class User
{
    private $name;
    private $lastname;
    private $id;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

}

$user1 = new User;
$user1->setName('Иван');
$user1->setLastname('Иванович');
$user1->setId(1);

$user2 = new User;
$user2->setName('Петр');
$user2->setLastname('Петрович');
$user2->setId(2);

$user3 = new User;
$user3->setName('Алексей');
$user3->setLastname('Алексеевич');
$user3->setId(3);


echo $user1->getId() . $user1->getName() . $user1->getLastname().'<br>';
echo $user2->getId() . $user2->getName() . $user2->getLastname().'<br>';
echo $user3->getId() . $user3->getName() . $user3->getLastname().'<br>';

?>
