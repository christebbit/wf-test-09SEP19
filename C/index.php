<?php
    include('DeliveryData.php');
    include('DummyDataCreator.php');

    $type_totals = [];

    $totals = [
        'destination' => [],
        'source' => []
    ];

    $column_row = [];

    foreach ($data as $data_row) {
        if (!isset($type_totals[$data_row->destination])) {
            $type_totals[$data_row->destination] = [];
        }

        if (!isset($type_totals[$data_row->destination][$data_row->source])) {
            $type_totals[$data_row->destination][$data_row->source] = 0;
        }

        $type_totals[$data_row->destination][$data_row->source] += $data_row->number;

        if (!isset($totals['destination'][$data_row->destination])) {
            $totals['destination'][$data_row->destination] = 0;
        }

        if (!isset($totals['source'][$data_row->source])) {
            $totals['source'][$data_row->source] = 0;
        }

        $totals['destination'][$data_row->destination] += $data_row->number;
        $totals['source'][$data_row->source] += $data_row->number;

        $column_row[] = $data_row->destination;
        $column_row[] = $data_row->source;
    }

    $column_row = array_unique($column_row);
    sort($column_row);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Delivery Data</title>
    </head>

    <body>
        <h1>Delivery Data</h1>

        <table>
            <caption>Delivery Data totals</caption>

            <colgroup>
                <col span="<?=(count($column_row))?>" />
            </colgroup>

            <thead>
                <tr>
                    <td colspan="2" rowspan="2"></td>
                    <th colspan="<?=(count($column_row))?>" scope="colgroup">Destination</th>
                    <td></td>
                </tr>

                <tr>
                    <?php foreach ($column_row as $column) { ?>
                        <th scope="column"><?=$column?></th>
                    <?php } ?>
                    <th scope="column">Total</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($column_row as $row) { ?>
                    <tr>
                        <?php if ($column_row[0] == $row) { ?>
                            <th rowspan="<?=count($column_row)?>" scope="rowgroup">Source</th>
                        <?php } ?>

                        <th scope="row"><?=$row?></th>

                        <?php foreach ($column_row as $column) { ?>
                            <td><?=(isset($type_totals[$column][$row]) ? $type_totals[$column][$row] : 0) ?></td>
                        <?php } ?>

                        <td><?=(isset($totals['source'][$row]) ? $totals['source'][$row] : 0) ?></td>
                    </tr>
                <?php } ?>
            </tbody>

            <tfoot>
                <td></td>
                <th scope="row">Total</td>

                <?php foreach ($column_row as $column) { ?>
                    <td><?=(isset($totals['destination'][$column]) ? $totals['destination'][$column] : 0) ?></td>
                <?php } ?>

                <td><?=(array_sum($totals['destination']) == array_sum($totals['source']) ? array_sum($totals['source']) : '!')?></td>
            </tfoot>
        </table>
    </body>
</html>