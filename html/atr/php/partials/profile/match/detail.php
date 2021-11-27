<?php

namespace partials\profile\match;

function detail($score)
{
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">試合詳細</h1>
    </div>
    <div>
        <h5 class="text-center">スコア</h5>
        <h1 class="text-center">
            <span class="mr-5">User1</span>
            <?php echo $score->set_point_user ?>
                -
            <?php echo $score->set_point_opponent ?>
            <span class="ml-5">User2</span>
        </h1>
        <p class="text-center"><?php echo $score->first_set_game_point_user ?> - <?php echo $score->first_set_game_point_opponent ?></p>
        <p class="text-center"><?php echo $score->second_set_game_point_user ?> - <?php echo $score->second_set_game_point_opponent ?></p>
        <p class="text-center"><?php echo $score->third_set_game_point_user ?> - <?php echo $score->third_set_game_point_opponent ?></p>
        <p class="text-center"><?php echo $score->fourth_set_game_point_user ?> - <?php echo $score->fourth_set_game_point_opponent ?></p>
        <p class="text-center"><?php echo $score->fifth_set_game_point_user ?> - <?php echo $score->fifth_set_game_point_opponent ?></p>
    </div>

<?php
}
