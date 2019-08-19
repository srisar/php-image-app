<?php

use ImageApp\Core\App;
use ImageApp\Core\View;
use ImageApp\Models\User;

try {

    /** @var User[] $users */
    $users = View::getData('users');

} catch (Exception $ex) {
    die($ex->getMessage());
}

?>

<?php include_once App::getBasePath() . "/views/_header.inc.php"; ?>

<div class="grid-container">

    <div class="grid-x">
        <div class="cell small-6">

            <table>
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Created on</th>
                </tr>
                </thead>

                <tbody>

                <?php foreach ($users as $user): ?>

                    <tr>
                        <td><?= $user->getFullName() ?></td>
                        <td><?= $user->getUsername() ?></td>
                        <td><?= $user->getCreatedAt() ?></td>
                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>


    </div>


</div>

<?php include App::getBasePath() . "/views/_footer.inc.php"; ?>
