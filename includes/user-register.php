<? include_once './db.php';

$photo = $_FILES['photo'];

$randName = md5(time());
$photoExp = '.'. pathinfo($photo['name'], PATHINFO_EXTENSION);

$photoname = !empty($photo) ? $_POST['login'] . '-' . $randName . $photoExp : 'error.jpg';

$dirNamePhoto = "../img/user/$photoname";

$userReg = userReg($_POST['login'],$_POST['name'],$_POST['pass'],$dirNamePhoto);

if($userReg and $photo):
    move_uploaded_file($photo['tmp_name'], $dirNamePhoto);
endif;

header('Location:/?route=login');

?>