<?php

namespace partials\profile\match;

use staticList;

function history($matchs, $users, $scores)
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
                    <th>試合形式</th>
                    <th>スコア</th>
                    <th>勝敗</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($matchs as $match) : ?>
                <tr>
                    <td><?php echo $match->id ?></td>
                    <td><?php echo $match->date ?></td>
                        <?php foreach ($users as $user) : ?>
                            <?php if ($match->opponent_id === $user['id']):?>
                                <td><?php echo $user['nickname'] ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php foreach (staticList::$match_type as $value=>$key) : ?>
                            <?php if ($match->match_type === $value):?>
                                <td><?php echo $key ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php foreach ($scores as $score) : ?>
                            <?php if ($match->id === $score->match_id):?>
                                <td>
                                    <a href="<?php the_url('profile/match?id='); ?><?php echo $score->id; ?>"><?php echo $score->set_point_user . '-' . $score->set_point_opponent?></a>
                                </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <td><?php echo $match->win_flg ? 'Win' : 'Lose'; ?></td>
                    <td><a href="#">編集</a></td>
                    <td><a href="#">削除</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
}
