<!DOCTYPE html>
<?php
$album = array(
    array("title" => "Nocturnal", "artist" => "MOTHICA"),
    array("title" => "The Silver Scream", "artist" => "Ice Nine Kills"),
    array("title" => "Welcome to Horrorwood", "artist" => "Ice Nine Kills"),
    array("title" => "Damaged Vol.2", "artist" => "bulow"),
    array("title" => "The Fall of Hobo Johnson", "artist" => "Hobo Johnson"),
    array("title" => "time of our lives", "artist" => "Christian French"),
    array("title" => "bright side of the moon", "artist" => "Christian French"),
    array("title" => "Desensitize", "artist" => "DREAMERS"),
    array("title" => "Lemon Boy", "artist" => "Cavetown"),
    array("title" => "Elsewhere", "artist" => "Set it Off"),
);
?>
<html lang="en">
    <head>
        <title>Music</title>
    </head>
    <body>
        <?php if (count($album) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th><?php echo implode('</th><th>', array_keys(current($album)))?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($album as $row): array_map('htmlentities', $row);?>
                <tr>
                    <td><?php echo implode('</td><td>', $row); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
<?php endif; ?>