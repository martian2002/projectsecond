<? include_once './db.php'; ?>

<? editlogin($_POST['editlogin']); 

header('location:/?route=edit');
?>
