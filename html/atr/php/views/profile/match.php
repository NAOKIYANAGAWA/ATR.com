<?php
namespace view\profile\match;

function index($matchs, $users, $scores, $fetchedScore, $permission, $user_id)
{
    ?>

<?php \partials\header(); ?>

    <div class="container-fluid">
        <div class="row">

            <?php \partials\profile\side_menu($user_id); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <?php \partials\profile\match\detail($matchs, $fetchedScore, $users); ?>

                <?php \partials\profile\match\history($matchs, $users, $scores, $user_id, $permission); ?>

            </main>
        </div>
    </div>

<?php \partials\footer(); ?>

<?php
}
