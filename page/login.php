
        <main class="main">
            <section class="head">
                <h2 class="head__title">Вход в систему</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>

            <form action="../includes/user-auth.php" class="form" method="post">
            
            <? if($_GET['error']): ?>
                <p>Неверный логин или пароль</p>
            <? endif; ?>
            
                <label class="form__label">
                    <!-- <span class="form__text">Логин</span> -->
                    <input type="text" class="form__input" name="login" autocomplete="off">
                </label>
                <label class="form__label">
                    <!-- <span class="form__text">Пароль</span> -->
                    <input type="password" class="form__input" name="pass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <button class="form__btn">Вход</button>
            </form>
        </main>