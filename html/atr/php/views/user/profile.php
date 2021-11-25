<?php
namespace view\user\profile;

function index($matchs, $users) {
?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            プロフィール
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            戦績
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <?php \partials\profile_dashboard(); ?>

            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

            <?php \partials\profile_history($matchs, $users); ?>

            </main>
        </div>
    </div>

<?php
}