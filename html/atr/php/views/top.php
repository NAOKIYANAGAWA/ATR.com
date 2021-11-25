<?php
namespace view\top;

function index() {
    ?>

    <div class="text-center my-5">
        <h2>ランキングTOP10</h2>
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th	scope="col">#</th>
                    <th	scope="col">UserName</th>
                    <th	scope="col">Wins</th>
                    <th	scope="col">Points</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th	scope="row">1</th>
                    <td>
                        <a href="" class="">Ted</a>
                    </td>
                    <td>125</td>
                    <td><?php echo 125*10;?></td>
                </tr>
                <tr>
                    <th	scope="row">2</th>
                    <td>
                        <a href="" class=""> Tommy</a>
                    </td>
                    <td>94</td>
                    <td><?php echo 94*10;?></td>
                </tr>
                <tr>
                    <th	scope="row">3</th>
                    <td>
                        <a href="" class="">Chris</a>
                    </td>
                    <td>88</td>
                    <td><?php echo 88*10;?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
}