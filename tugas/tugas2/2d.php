<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
<style>
		td {
			width: 100px;
			height: 100px;
			border: 1px solid black;
		}
        .white{
            background-color: white;
        }
        .black{
            background-color: black;}
</style>
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) :?>
            <tr>
                <?php for($o = 1; $o <= 5; $o++) :?>
                    <?php if(($i + $o) % 2 == 0) :?>
                    <td class="black"><?php else: ?></td>
                    <td class="white"><?php endif; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>    
    </table>
</body>
</html>