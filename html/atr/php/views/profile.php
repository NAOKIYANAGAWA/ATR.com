<?php
namespace view\profile;

function index() {
?>

    <div class="container-fluid">
        <div class="row">

            <?php \partials\profile\side_menu(); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <h1>プロフィール</h1>

            </main>
        </div>
    </div>

<?php
}