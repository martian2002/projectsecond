<main class="main">
    <div class="user-images">
        <img class="user__img-item" src="<?= $userInfo['img_path']?>" alt="">
    </div>
    
    <div class="text">
        <p class="user-info">Login: <span class="user__span"><?= $userInfo['login']?></span></p>
        <p class="user-info">Name: <span class="user__span"><?= $userInfo['name']?></span></p>
    </div>
    
    
    <form action="../includes/user-edit-name.php" method="post">
        <fieldset>
            <legend class="editName">Изменить Имя</legend>
            <input type="text" class="editName__input" name="editname" value="<?= $userInfo['name']?>">
            <button class="form__btn">Изменить</button>
        </fieldset>
    </form>
    
    <form action="../includes/user-edit-login.php" method="post">
        <fieldset>
            <legend class="editName">Изменить Логин</legend>
            <input type="text" class="editName__input" name="editlogin" value="<?= $userInfo['login']?>">
            <button class="form__btn">Изменить</button>
        </fieldset>
    </form>
    
    <form action="../includes/user-edit-pass.php" method="post">
        <fieldset>
            <legend class="editName">Изменить Pass</legend>
            <input type="text" class="editName__input" name="editpass">
            <button class="form__btn">Изменить</button>
        </fieldset>
    </form>
</main>