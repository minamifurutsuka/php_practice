<?php
echo 'hello php!';
echo "\n";

$a = 3;
$b = 7;
echo $a + $b;
echo "\n";

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];
echo "\n";

$hello = "Hello,";
$name = "minami";
$world = "‘s World!";
echo $hello . $name . $world;
echo "\n";

# 課題４
$tech_boost = "tech";
$tech_boost .="boost";
echo $tech_boost;
echo "\n";

#課題５
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];
echo "\n";

#03 課題
$name = "minami";
if ($name == "minami") {
    echo "私は みなみ です";
} else {
    echo "みなみではありません";
}
echo "\n";

$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("strawberry", "apple", "orange", "grape", "peach");
foreach ($fruits as $fruit) {
  echo "要素は" . $fruit;
  echo "\n";
}
echo "\n";

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}