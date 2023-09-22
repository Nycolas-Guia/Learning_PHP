<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Name2: <input type="text" name="gname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars não deixa o navegador usar o que foi digitado no input como elemento HTML, ou seja, o usuário não consegue usar códigos HTML dentro do campo.
    $name = htmlspecialchars($_REQUEST['fname']);
    $name2 = htmlspecialchars($_REQUEST['gname']);
    if (empty($name)) {
        echo "Nome";
    } else {
        echo $name;
    }
    echo " ";
    if (empty($name2)) {
        echo "Name is empty";
    } else {
        echo $name2;
    }
}
?>

</body>
</html>