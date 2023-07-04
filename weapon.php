<?php
// класс всегда пишется с большой буквы
class Weapon
{
    // в данном случае идет публичная переменная 
    public $weapon;

    // функция __construct Классы, у которых есть метод конструктора, вызывают этот метод для каждого вновь созданного объекта,
    public function __construct(array $weapon)
    {
        $this->weapon = $weapon;
    }
    // функция __destruct используется в случаи не действительности в данном случае если мы удаляем какой либо обьект там будет выводится данный текст
    public function __destruct()
    {
        //функция принт выводит текст в терминале 
        print('класс был убит');
    }

    // функция get используется для получения 
    public function getWeapon()
    {
        print_r($this->weapon);
        return $this;
    }

    // функция add добавляет элементы 
    public function addNewWeapon(string $status, string $name)
    {
        $this->weapon[$status] = $name;
        return $this;
    }
}

// в данном случае идет наследие он Stockpile берет наследство от негоWeapon
class Stockpile extends Weapon
{
}

// тут создается новый массив 
$machine = new Weapon([
    'machine' => 'ak-47',
    'semi-automatic' => 'uzi',
]);
// и тут 
$pistols = new Weapon([
    'pistolsOne' => 'deagle',
    'pistolsTwo' => 'glock',
]);

// а тут мы получаем информацию в терминал с помощью get
$machine->getWeapon();
$pistols->getWeapon();

// а тут мы удаляем эллемент
unset($machine);
