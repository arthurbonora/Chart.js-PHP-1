<?php
// mysql with mysqli
for ($i = 1; $i < 3; $i++) {
	$select = mysqli_query($conn, "SELECT * FROM table WHERE id = '" . $i . "' ");
	$predata[$i] = array();
	while ($r = mysqli_fetch_array($select)) {
		array_push($predata[$i], $r['col']);
	}
}
require 'chart/ChartJS.php';
$data = array(
	$predata['1'],
	$predata['2'],
	$predata['3']
);
$labels = array('jan', 'feb', 'mar', 'apr', 'may', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dez');
$colors = array(
	array('backgroundColor' => '', 'borderColor' => 'blue'),
  array('backgroundColor' => '', 'borderColor' => '#e5801d'),
  array('backgroundColor' => array('blue', 'purple', 'red', 'black', 'brown', 'pink', 'green')),
  array('backgroundColor' => '', 'borderColor' => 'purple')
);
$options = array('responsive' => true);
$datasets = array(
	array('data' => $data[0], 'label' => "1") + $colors[0],
  array('data' => $data[1], 'label' => "2") + $colors[1],
  array('data' => $data[2], 'label' => "3") + $colors[3],
  array('data' => $data[0], 'label' => "1") + $colors[1],
  array('data' => $data[1], 'label' => "2") + $colors[2],
  array('data' => $data[2], 'label' => "3") + $colors[3],
  array('data' => $data[0]) + $colors[2],
);
$attributes['id'] = 'line';
$Line = new ChartJS('line', $labels, $options, $attributes);
$Line->addDataset($datasets[0]);
$Line->addDataset($datasets[1]);
$Line->addDataset($datasets[2]);
// Echo your line
echo $Line;
