<div>
    <a href="?c=teams&a=create" class="btn btn-primary">Pridaj team</a>
</div>
<div class="table-responsive">
    <table class="table">
    <thead>
        <tr>
            <td colspan="4" class="centered table-danger">5.liga</td>
        </tr>
        </thead>
        <tbody>

<?php

use App\Models\Team;
/** @var Team[] $data */
foreach ($data as $team) { ?>
            <tr>
                <td> <?php echo $team->getTeamName(); ?> </td>
                <td> <?php echo $team->getLeague(); ?> </td>
                <td> <a href="?c=teams&a=delete&id=<?php echo $team->getId()?>" class="btn btn-danger">Delete</a> </td>
                <td> <a href="?c=teams&a=edit&id=<?php echo $team->getId()?>" class="btn btn-light">Uprav team</a> </td>
            </tr>

<?php
}
?>

        </tbody>
    </table>
</div>
