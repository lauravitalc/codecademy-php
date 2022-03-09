<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$netIncome -= $socialSecurity;

$annualIncome = $netIncome;

echo $annualIncome . "\n";

$annualIncome -= $annualExpenses["vacations"];

$annualIncome -= $annualExpenses["carRepairs"];

echo $annualIncome . "\n";

$monthlyIncome = $annualIncome / 12;

echo $monthlyIncome;

$monthlyIncome -= $monthlyExpenses["rent"];

$monthlyIncome -= $monthlyExpenses["utilities"];

$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\n" . $monthlyIncome;

$weeklyIncome = $monthlyIncome / 4.33;

echo "\n" . $weeklyIncome;

$weeklyExpensives = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 97
];

$weeklyIncome -= $weeklyExpensives["gas"];

$weeklyIncome -= $weeklyExpensives["food"];

$weeklyIncome -= $weeklyExpensives["entertainment"];

echo "\n" . $weeklyIncome;

$savings = $weeklyIncome * 52;

echo "\n" . $savings;
