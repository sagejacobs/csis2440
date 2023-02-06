<!DOCTYPE html>
<?php
$album = array(
    array("Title" => "Nocturnal", "Artist" => "MOTHICA"),
    array("Title" => "The Silver Scream", "Artist" => "Ice Nine Kills"),
    array("Title" => "Welcome to Horrorwood", "Artist" => "Ice Nine Kills"),
    array("Title" => "Damaged Vol.2", "Artist" => "bulow"),
    array("Title" => "The Fall of Hobo Johnson", "Artist" => "Hobo Johnson"),
    array("Title" => "time of our lives", "Artist" => "Christian French"),
    array("Title" => "bright side of the moon", "Artist" => "Christian French"),
    array("Title" => "Desensitize", "Artist" => "DREAMERS"),
    array("Title" => "Lemon Boy", "Artist" => "Cavetown"),
    array("Title" => "Elsewhere", "Artist" => "Set it Off"),
);
?>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css"/>
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