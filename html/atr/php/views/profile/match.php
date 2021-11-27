<?php
namespace view\profile\match;

function index($matchs, $users, $scores, $fetchedScore) {
?>

    <div class="container-fluid">
        <div class="row">

            <?php \partials\profile\side_menu(); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <?php //\partials\profile\match\dashboard(); ?>

                <?php \partials\profile\match\detail($fetchedScore); ?>

                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

                <?php \partials\profile\match\history($matchs, $users, $scores); ?>

            </main>
        </div>
    </div>

<?php
}