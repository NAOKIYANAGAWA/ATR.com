<?php
namespace view\profile;

function index() {
?>

    <div class="container-fluid">
        <div class="row">

            <?php \partials\profile\side_menu(); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <h1>プロフィール</h1>

            <div class="container">
                <div class="row justify-content-center">
                    <img class="rounded-circle" width="100" src="<?php echo BASE_IMAGE_PATH; ?>logo.jpg" alt="">
                    <span class="d-block">NAOKI</span>
                </div>
                <div class="container">
                    <div class="row col-4 m-0">
                        <div class="">
                            <h5>戦績</h5>
                            <span>89勝34敗</span>
                        </div>
                        <div class="">
                            <h5>ポイント</h5>
                            <span>4870pt</span>
                        </div>
                        <div class="">
                            <h5>レベル</h5>
                            <span>中級</span>
                        </div>
                    </div>
                </div>
            </div>

            </main>
        </div>
    </div>

<?php
}