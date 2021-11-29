<?php
namespace view\profile\match\edit;

use staticList;

function index($match, $score, $is_edit)
{
    $header_title = $is_edit ? '試合編集' : '試合登録'; ?>
    <h1 class="h2 mb-3"><?php echo $header_title ?></h1>

    <div class="bg-white p-4 shadow-sm mx-auto rounded">
        <form class="validate-form" action="<?php echo CURRENT_URI; ?>" method="POST" novalidate autocomplete="off">
            <input type="hidden" name="id" value="<?php echo $match->id; ?>">
            <div class="form-group">
                <label for="opponent_id">対戦相手</label>
                <input type="text" id="opponent_id" name="opponent_id" value="<?php echo $match->opponent_id; ?>" class="form-control validate-target" required autofocus>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="match_type">試合形式</label>
                <select name="match_type" id="match_type" class="form-control">
                    <?php foreach (StaticList::$match_type as $key=>$value): ?>
                        <?php if ($match->match_type === $key) :?>
                            <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php endif ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="win_flg">試合結果</label>
                <select name="win_flg" id="win_flg" class="form-control">
                    <?php foreach (StaticList::$win_flg as $key=>$value): ?>
                        <?php if ($match->win_flg === $key) :?>
                            <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                        <?php else: ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php endif ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h3">試合詳細</h1>
            </div>
            <div class="text-center mb-3"><span class="h3">スコア</span></div>
            <div class="text-center mt-3"><span class="h5">TOTAL SET</span></div>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row col-3 m-0"><span class="text-center h3 m-0 w-100">User1</span></div>
                    <div class="row col-3 form-group m-0">
                        <label for="set_point_user"></label>
                        <select name="set_point_user" id="set_point_user" class="form-control">
                            <?php foreach (StaticList::$set_point_user as $key=>$value): ?>
                                <?php if ($score->set_point_user === $key) :?>
                                    <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php endif ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                        <span class="h3">-</span>
                    <div class="row col-3 form-group m-0">
                        <label for="set_point_opponent"></label>
                        <select name="set_point_opponent" id="set_point_opponent" class="form-control">
                            <?php foreach (StaticList::$set_point_opponent as $key=>$value): ?>
                                <?php if ($score->set_point_opponent === $key) :?>
                                    <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php endif ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <div class="row col-3 m-0"><span class="text-center h3 m-0 w-100">User2</span></div>
            </div>

            <div class="text-center mt-3"><span class="h5">1st SET</span></div>
            <div class="container d-flex justify-content-center">
                <div class="row col-3 form-group m-0">
                    <label for="first_set_game_point_user"></label>
                    <select name="first_set_game_point_user" id="first_set_game_point_user" class="form-control">
                        <?php foreach (StaticList::$first_set_game_point_user as $key=>$value): ?>
                            <?php if ($score->first_set_game_point_user === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <span class="h3">-</span>
                <div class="row col-3 form-group m-0">
                    <label for="first_set_game_point_opponent"></label>
                    <select name="first_set_game_point_opponent" id="first_set_game_point_opponent" class="form-control">
                        <?php foreach (StaticList::$first_set_game_point_opponent as $key=>$value): ?>
                            <?php if ($score->first_set_game_point_opponent === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="text-center mt-3"><span class="h5">2st SET</span></div>
            <div class="container d-flex justify-content-center">
                <div class="row col-3 form-group m-0">
                    <label for="second_set_game_point_user"></label>
                    <select name="second_set_game_point_user" id="second_set_game_point_user" class="form-control">
                        <?php foreach (StaticList::$second_set_game_point_user as $key=>$value): ?>
                            <?php if ($score->second_set_game_point_user === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <span class="h3">-</span>
                <div class="row col-3 form-group m-0">
                    <label for="second_set_game_point_opponent"></label>
                    <select name="second_set_game_point_opponent" id="second_set_game_point_opponent" class="form-control">
                        <?php foreach (StaticList::$second_set_game_point_opponent as $key=>$value): ?>
                            <?php if ($score->second_set_game_point_opponent === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="text-center mt-3"><span class="h5">3st SET</span></div>
            <div class="container d-flex justify-content-center">
                <div class="row col-3 form-group m-0">
                    <label for="third_set_game_point_user"></label>
                    <select name="third_set_game_point_user" id="third_set_game_point_user" class="form-control">
                        <?php foreach (StaticList::$third_set_game_point_user as $key=>$value): ?>
                            <?php if ($score->third_set_game_point_user === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <span class="h3">-</span>
                <div class="row col-3 form-group m-0">
                    <label for="third_set_game_point_opponent"></label>
                    <select name="third_set_game_point_opponent" id="third_set_game_point_opponent" class="form-control">
                        <?php foreach (StaticList::$third_set_game_point_opponent as $key=>$value): ?>
                            <?php if ($score->third_set_game_point_opponent === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="text-center mt-3"><span class="h5">4st SET</span></div>
            <div class="container d-flex justify-content-center">
                <div class="row col-3 form-group m-0">
                    <label for="fourth_set_game_point_user"></label>
                    <select name="fourth_set_game_point_user" id="fourth_set_game_point_user" class="form-control">
                        <?php foreach (StaticList::$fourth_set_game_point_user as $key=>$value): ?>
                            <?php if ($score->fourth_set_game_point_user === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <span class="h3">-</span>
                <div class="row col-3 form-group m-0">
                    <label for="fourth_set_game_point_opponent"></label>
                    <select name="fourth_set_game_point_opponent" id="fourth_set_game_point_opponent" class="form-control">
                        <?php foreach (StaticList::$fourth_set_game_point_opponent as $key=>$value): ?>
                            <?php if ($score->fourth_set_game_point_opponent === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="text-center mt-3"><span class="h5">5st SET</span></div>
            <div class="container d-flex justify-content-center">
                <div class="row col-3 form-group m-0">
                    <label for="fifth_set_game_point_user"></label>
                    <select name="fifth_set_game_point_user" id="fifth_set_game_point_user" class="form-control">
                        <?php foreach (StaticList::$fifth_set_game_point_user as $key=>$value): ?>
                            <?php if ($score->fifth_set_game_point_user === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <span class="h3">-</span>
                <div class="row col-3 form-group m-0">
                    <label for="fifth_set_game_point_opponent"></label>
                    <select name="fifth_set_game_point_opponent" id="fifth_set_game_point_opponent" class="form-control">
                        <?php foreach (StaticList::$fifth_set_game_point_opponent as $key=>$value): ?>
                            <?php if ($score->fifth_set_game_point_opponent === $key) :?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                            <?php else: ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div>
                    <input type="submit" value="送信" class="btn btn-primary shadow-sm mr-3">
                </div>
                <div>
                    <a href="<?php the_url('profile/match'); ?>">戻る</a>
                </div>
            </div>

        </form>
    </div>

<?php
}
