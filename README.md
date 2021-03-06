Chart.js-PHP
============
A PHP wrapper for [chartjs/Chart.js](https://github.com/chartjs/Chart.js)
This project is an expansion of [HugoHeneault's](https://github.com/HugoHeneault/Chart.js-PHP) repository

## How to use
Include Chart.js and driver.js before the end of your body (change src according to your project)
```html
<html>
  <body>
    <!-- Your awesome project comes here -->

    <!-- And here are Chart.js and Chart.js-PHP -->
    <script src="Chart.js"></script>
    <script src="driver.js"></script>
  </body>
</html>
```

Load ChartJS-PHP class
```php
require 'ChartJS.php';
```

Then, create your charts using PHP.
```php
$labels = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$options = array();
$attributes = array('id' => 'example', 'width' => 500, 'height' => 500);
$Line = new ChartJS('line', $labels, $options, $attributes);

$dataset = array(
    'data' => array(8, 7, 8, 9, 6),
    'backgroundColor' => '#f2b21a',
    'borderColor' => '#e5801d',
    'label' => 'Legend'
);
$Line->addDataset($dataset);

// Echo your line
echo $Line;
?>
```

Finally, load these charts with a small piece of javascript when your document is ready
```js
// Pure JS document.ready
(function() {
  loadChartJsPhp();
})();
```

## Full example
```php
<?php
require 'ChartJS.php';

$labels = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
$options = array('responsive' => false);
$attributes = array('id' => 'example', 'width' => 500, 'height' => 500);
$Line = new ChartJS('line', $labels, $options, $attributes);

$dataset = array(
    'data' => array(8, 7, 8, 9, 6),
    'backgroundColor' => '#f2b21a',
    'borderColor' => '#e5801d',
    'label' => 'Legend'
);
$Line->addDataset($datasets);

?><!DOCTYPE html>
<html>
  <head>
    <title>Chart.js-PHP</title>
  </head>
  <body>
    <?php
      echo $Line;
    ?>
    <script src="Chart.js"></script>
    <script src="driver.js"></script>
    <script>
      (function() {
        loadChartJsPhp();
      })();
    </script>
  </body>
</html>
```

## Documentation
Full documentation is available at [Chart.js](http://www.chartjs.org/docs/latest/charts/) website. There you can find what type of charts and associated properties are available.

## Time axis
If you are going to use time axis you need either to include Moment.js or Chart.bundle.js instead of Chart.js to your project. Chart.bundle.js consists of both Chart.js and Moment.js (which is needed for time axis).

## Contributing
Do not hesitate to edit or improve my code with bugfix and new functionnalities!
