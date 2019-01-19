<?php
 

  use \Carbon\Carbon;
  use \Khill\Lavacharts\Lavacharts;

  $lava = new Lavacharts;

  $dt = $lava->DataTable();

  $dt->addDateColumn('dates');
  $dt->addNumberColumn('numbers');

  for ($a=1; $a <= 30; $a++) {
    $dt->addRow([Carbon::parse($a.'-1-2015'), rand(100,200)]);
  }

  $lava->LineChart('Stuff')
       ->dataTable($dt);
?>

<html lang="en">
<head>
	<meta charset="utf-8">
    <title>No Composer</title>
  </head>
  <body>
    <div id="chart"></div>

    <?php echo $lava->render('LineChart', 'Stuff', 'chart'); ?>
  </body>
</html>