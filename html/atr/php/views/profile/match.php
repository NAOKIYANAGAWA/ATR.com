<?php
namespace view\profile\match;

function index($matchs, $users, $scores, $fetchedScore)
{
    ?>

    <div class="container-fluid">
        <div class="row">

            <?php \partials\profile\side_menu(); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <?php \partials\profile\match\detail($matchs, $fetchedScore); ?>

                <?php \partials\profile\match\history($matchs, $users, $scores); ?>

            </main>
        </div>
    </div>

<?php
}
