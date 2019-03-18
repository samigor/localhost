
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
 <h3>Лабораторная работа №8. Написать программу(скрипт) которая передает текстовый файл из html-формы, загруженный файл помещается в каталог «uploads», если файл с таким именем уже существует, то его необходимо сохранить под другим именем. После того как файл был загружен все его содержимое нужно записать в файл «log.txt», сохранив при этом информацию которая в нем содержится.
	</h3>

<form enctype="multipart/form-data" action="lab81.php" method="post">
    Загружаемый файл: <input type="file" name="uploadfile">
   <input type="submit" value="Загрузить выбранный файл">
</form>
<?
// Каталог, в который мы будем принимать файл:
$uploaddir = './uploads/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

$file = $_FILES['uploadfile']['name'];
$newfile = "log.txt";

if (!copy("./uploads/$file", "./uploads/$newfile")) {
    echo "не удалось скопировать $file...\n";
}
// Выводим информацию о загруженном файле:
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
?>