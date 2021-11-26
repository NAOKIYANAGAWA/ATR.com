<?php
namespace view\profile\match;

function index($matchs, $users) {
?>

    <div class="container-fluid">
        <div class="row">

        <?php \partials\profile\side_menu(); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <?php \partials\profile\match\dashboard(); ?>

            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

            <?php \partials\profile\match\history($matchs, $users); ?>

            </main>
        </div>
    </div>

<?php
}