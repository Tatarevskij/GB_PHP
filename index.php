<?
header('Content-Type: text/html; charset=utf-8');
class shopElement
{
    private $id; // идентификатор объекта в нашем магазине.
    private $type; // имя типа объекта.

    function __construct($id, $type)
    {
        $this->id = $id;
        $this->type = $type;
    }
}

class item extends shopElement // класс товаров
{
    private $itemId; // идентификатор товара
    private $itemTypeId; // идентификатор типа товара, например верхняя одежда 1
    private $itemName; // название товара

    function __construct($id, $type, $itemId, $itemTypeId, $itemName)
    {
        parent::__construct($id, $type);
        $this->setItemId($itemId);
        $this->setItemTypeId($itemTypeId);
        $this->setItemName($itemName);
    }

    function setItemId($itemId){
        $this->itemId = $itemId;
    }

    function setItemTypeId($itemTypeId){
        $this->itemTypeId = $itemTypeId;
    }

    function setItemName($itemName){
        $this->itemName = $itemName;
    }
}

class user extends shopElement // класс пользователя
{
    private $userId;
    private $login;
    private $password;
    private $userName;

    function __construct($id, $type, $userId, $login, $password, $userName)
    {
        parent::__construct($id, $type);
        $this->setUserId($userId);
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setUserName($userName);
    }

    function setUserID($userId){
        $this->userId = $userId;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function setUserName($userName){
        $this->userName = $userName;
    }

    function showUser(){
        echo "Имя: ". $this->userName. "<br> id Пользователя: ". $this->userId. "<br> Логин: ". $this->login. "<br> Пароль: ". $this->password ;

    }
}

$Alex = new user(2, user, 1, Alex, 123, Alex_Pupkin);

echo $Alex->showUser();