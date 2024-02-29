
<?php
// Включение файла конфигурации базы данных
require 'dbConfig.php';
// Функция categoryTree() создает раскрывающийся список категорий n-го уровня для дерева категорий.
function categoryTree($parent_id = 0, $sub_mark = ''){
    global $db;
    $query = $db->query("SELECT * FROM product_categories WHERE parent_id = $parent_id ORDER BY name ASC");
   
    if($query->num_rows > 0){
// Перебор результата запроса и вывод категорий в виде опций в раскрывающемся списке
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$sub_mark.$row['name'].'</option>';
// Рекурсивный вызов функции для вывода подкатегорий
            categoryTree($row['id'], $sub_mark.'---');
        }
    }
}
?>

<html>
<head>
<!-- Подключение стилей Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Демострационный проект \\ github.com/icesowell/marketplace </title>
<!-- Стили для демо-страницы -->
<style>
.content {
  position: relative;
  margin: 60px auto;
  width: 100%;
  max-width: 640px;
  z-index: 1;
}
.clearfix{
    border-bottom: 1px dotted #ccc;
    margin-bottom: 5px;
}
.demo-title{
    background-color: #8cc63e;
    border-color:#8cc63e;
color:#fff;
padding:10px;
text-align:center;
}
.demo-title h4{
font-size: 22px;
    font-weight: 700;
    text-shadow: 2px 2px #00A058;
}
.select-boxes {
    width: 280px;
    text-align: center;
    margin: 0 auto;
}
select{
background-color: #F5F5F5;
    border: 1px double #584a41;
    color: #8cc63e;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
</style>
 
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
 
<body style="background-repeat: no-repeat;">
 
<div class="demo-title"><h4>ДЕМОНСТРАЦИЯ <span class="one"> КОДА</span><span class="two">_САЙТА</span>: Марышев Никита МИФ-ПИБ-41
 </h4></div>
 
<div class="col-md-12">
<div class="content">
 <div class="col-lg-12">

<div class="select-boxes">

<!-- Используем функцию для Dropdown -->
<select name="category>
    <?php echo categoryTree(); ?>
</select>
</div>
</div>
</div>
</div>
</div>
</body>
</html>