<script src="public/js/script.js"></script>

<form method="post" action="?c=teams&a=store" name="formName" onsubmit="return validateAll()">

    <?php /** @var \App\Models\Team $data */
    if ($data->getId()) { ?>
    <input type="hidden" name="id" value="<?php echo $data-> getId()?>">
    <?php }?>

    <label>
        Názov tímu:
        <input type="text" name="teamName" value="<?php echo $data->getTeamName()?>" onchange="validateTeamName()">
        Liga:
        <input type="number" name="league" value="<?php echo $data->getLeague()?>" onchange="validateLeague()">
    </label>
    <input type="submit" value="Pridaj">
</form>
