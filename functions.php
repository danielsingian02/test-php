<?php
$table_header = ['Name', 'Age', 'Education', 'Certificate', 'Training'];

$table_row_1 = [
    ['Jake', 32, 'MBA', 'Digital Marketing Diploma', ''],
    ['Kim', 56, 'Undergrad', 'Google Adwords Certified', '6 Months SDA'],
    ['Huang', 19, '', 'Digital Marketing Diploma', 'Sales Training'],
    ['Janet', 28, 'BFA', 'Video Marketing Diploma', '']
];

$table_row_2 = [
    ['Amir', 28, '', '', 'One year Ads Mgtmt'],
    ['Andrew', 22, 'BBA', '', '6 Months SDA'],
    ['Emery', 21, '', '', 'Sales Training'],
    ['Alex', 28, 'BBA', '', '']
];


function renderTable($tableHeader, $tableRow) {
    $removedIndex = [];

    foreach($tableHeader as $thKey => $th) {
        $count = 0;

        foreach ($tableRow as $trKey => $tr) {
            if ( ! empty($tr[$thKey]) ) {
               $count++;
            }
        }

        if ( $count < 1 ) {
            unset($tableHeader[$thKey]);
            $removedIndex[] = $thKey;
        }
    }

    include('table.php');
}