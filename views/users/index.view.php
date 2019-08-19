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

<?php include_once BASE_PATH . "/views/_header.inc.php"; ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">

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

<?php include BASE_PATH. "/views/_footer.inc.php"; ?>
