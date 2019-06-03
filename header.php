<header>
    <div class="site-width">
        <h1><a href="index.php">KASIKARI</a></h1>
        <nav id="top-nav">
            <ul>
                <!-- 未ログイン時の表示 -->
                <?php if(empty($_SESSION['user_id'])){ ?>

                    <li><a href="signup.php" class="btn btn-primary">ユーザー登録</a></li>
                    <li><a href="login.php">ログイン</a></li>

                <!-- ログインしている場合 -->
                <?php }else{ ?>
                    
                    <li><a href="mypage.php">マイページ</a></li>
                    <li><a href="logout.php">ログアウト</a></li>

                <?php } ?>

            </ul>
        </nav>
    </div>
</header>