<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
<style>
    td{
        width: 80;
        height: 80;
        background-color: salmon;
        text-align: center;
        border: 1px solid black;
    }
</style>
</head>
<body>

<table cellpadding="10" cellspacing="0">
        <?php for($i = 10; $i >= 1; $i--) :?>
            <tr>
            <?php  for($o = 1; $o <= $i; $o++) :?>
                <td><?= "$o"; ?></td>
            <?php endfor; ?>
            </tr>
        <?php  endfor;?>
    </table>
</body>
</html>