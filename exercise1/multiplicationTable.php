<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  
  echo '<table border=\"3\">';
  for ($row = 1; $row <= 100; $row++)
  {
    echo '<tr>';
    for ($column = 1; $column <= 100; $column++)
    {
        echo '<td>'.$row * $column.'</td>';
    }
    echo '</tr>';
  }
  echo '</table>';
?>