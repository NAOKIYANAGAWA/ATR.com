<?php

namespace partials\profile;

function side_menu()
{

?>

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php the_url('profile'); ?>">
                    <span data-feather="home"></span>
                    プロフィール
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php the_url('profile/match'); ?>">
                    <span data-feather="file"></span>
                    試合
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<?php
}
