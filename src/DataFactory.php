<?php

namespace BeiyiiSchool;
class DataFactory
{
    function totable($header, $data)
    {
        $table = "<table>";
        $table .= "<thead><tr>";
        foreach ($header as $item) {
            $table .= "<td>$item</td>";
        }
        $table .= "</tr></thead>";
        $table .= "<tbody>";
        foreach ($data as $item) {
            $table .= "<tr>";
            foreach ($item as $clild_item) {
                $table .= "<td> $clild_item</td>";
            }
            $table .= "</tr>";
        }
        $table .= "</tbody>";
        $table .= "</table>";
        return $table;
    }
}