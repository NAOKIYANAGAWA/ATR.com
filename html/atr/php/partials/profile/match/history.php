<?php

namespace partials\profile\match;

function history($matchs, $users)
{

?>
    <h2>戦績</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>日付</th>
                    <th>対戦相手</th>
                    <th>スコア</th>
                    <th>勝敗</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($matchs as $match) : ?>
                <tr>
                    <td><?php echo $match->id ?></td>
                    <td><?php echo $match->date ?></td>
                        <?php foreach($users as $user) : ?>
                            <?php if($match->opponent_id === $user['id']):?>
                                <td><?php echo $user['nickname'] ?></td>
                            <?php endif;?>
                        <?php endforeach; ?>
                    <td>
                        <a href="#"><?php echo '1-0'; ?></a>
                    </td>
                    <td><?php echo $match->win_flg ? 'Win' : 'Lose'; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
}
