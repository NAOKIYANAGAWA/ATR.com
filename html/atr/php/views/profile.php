<?php
namespace view\profile;

function index($user, $result, $points, $user_id)
{
    ?>

    <div class="container-fluid">
        <div class="row">

            <?php \partials\profile\side_menu($user_id); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h3">プロフィール</h1>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <img class="rounded-circle" width="100" src="<?php echo BASE_IMAGE_PATH; ?>profile.png" alt="">
                </div>
                <div class="row justify-content-center">
                    <span class="mt-1 h3"><?php echo $user->nickname ?></span>
                </div>
                <div class="container d-flex mt-3">
                        <div class="justify-content-center d-block row col-4 m-0 ">
                            <h5 class="text-center">戦績</h5>
                            <span class="text-center d-block w-100"><?php echo $result['wins'] ?>勝<?php echo $result['loses'] ?>敗</span>
                        </div>
                        <div class="justify-content-center d-block row col-4 m-0">
                            <h5 class="text-center">ポイント</h5 >
                            <span class="text-center d-block w-100"><?php echo $points ?>pt</span>
                        </div>
                        <div class="justify-content-center d-block row col-4 m-0">
                            <h5 class="text-center">レベル</h5>
                            <span class="text-center d-block w-100">中級</span>
                        </div>
                </div>
            </div>

            </main>
        </div>
    </div>

<?php
}
