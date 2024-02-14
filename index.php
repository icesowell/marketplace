<?php
class TreeOX2 {

    private $_db = null;
    private $_category_arr = array();

    public function __construct() {
        //Подключаемся к базе данных, и записываем подключение в переменную _db
        $this->_db = new PDO("mysql:dbname=marketplace;host=localhost", "root", "");
        //В переменную $_category_arr записываем все категории (см. ниже)
        $this->_category_arr = $this->_getCategory();
    }


    private function _getCategory() {
        $query = $this->_db->prepare("SELECT * FROM market"); //Готовим запрос
        $query->execute(); //Выполняем запрос
        //Читаем все строчки и записываем в переменную $result
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        //Перелапачиваем массим (делаем из одномерного массива - двумерный, в котором
        //первый ключ - parent_id)
        $return = array();
        foreach ($result as $value) { //Обходим массив
            $return[$value->parent][] = $value;
        }
        return $return;
    }

    public function outTree($parent_id, $level) {
        if (isset($this->_category_arr[$parent_id])) { //Если категория с таким parent_id существует
            foreach ($this->_category_arr[$parent_id] as $value) { //Обходим ее
                echo "<div style='margin-left:" . ($level * 25) . "px;'>" . $value->name . "</div>";
                $level++; //Увеличиваем уровень вложености
                //Рекурсивно вызываем этот же метод, но с новым $parent_id и $level
                $this->outTree($value->id, $level);
                $level--; //Уменьшаем уровень вложености
            }
        }
    }

}

$tree = new TreeOX2();
$tree->outTree(0, 0); //Выводим дерево

?>
