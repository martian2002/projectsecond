<? include_once './db.php'; ?>

<? editpass($_POST['editpass']); 

header('location:/?route=edit');
?>
