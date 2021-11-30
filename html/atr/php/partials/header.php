<?php
namespace partials;

use lib\Auth;
use lib\Msg;

function header()
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ATR</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_CSS_PATH; ?>style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- jQuery, popper.js, Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
            <header class="container my-2">
                <nav class="row align-items-center py-2">
                    <a href="<?php the_url('/'); ?>" class="col-md d-flex align-items-center mb-3 mb-md-0">
                        <img width="50" class="mr-2" src="<?php echo BASE_IMAGE_PATH; ?>logo.jpg" alt="サイトロゴ">
                        <span class="h2 font-weight-bold mb-0">ATR</span>
                    </a>
                    <div class="col-md-auto">
                        <?php if (Auth::isLogin()) : ?>
                            <a href="<?php the_url('profile/match/create'); ?>" class="btn btn-primary mr-2">試合登録</a>
                            <a href="<?php the_url('profile'); ?>" class="mr-2">マイページ</a>
                            <a href="<?php the_url('logout'); ?>">ログアウト</a>
                        <?php else: ?>
                            <a href="<?php the_url('register'); ?>" class="btn btn-primary mr-2">登録</a>
                            <a href="<?php the_url('login'); ?>">ログイン</a>
                        <?php endif; ?>
                    </div>
                </nav>
            </header>
            <main class="container py-3">
<?php

    Msg::flush();
}

?>