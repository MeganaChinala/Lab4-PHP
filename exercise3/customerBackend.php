<html>

<head>
  <title>Web Store</title>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
  <div class="form">
    <h1>Purchase Receipt</h1>
    <?php
        $total = 0;
        $products = ["Sweater",
                     "Dress",
                     "Romper"
                    ];

        $price = ["30",
                  "15",
                  "20"
                ];

      echo "Your purchase is complete <br><br>";
      echo "Email entered: ".$_POST["email"]."<br>";
      echo "Password entered: ".$_POST["password"]."<br><br>";
      echo "<table>";

        echo "<thead>";
            echo "<tr>";
                echo "<th class=\"empty\"></th>";
                echo "<th>Quantity</th>";
                echo "<th>Cost Per Product</th>";
                echo "<th>Sub Total</th>";
          echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";
            for($i = 0; $i < 3; $i++) 
            {
             $subtotal = ($price[$i] * $_POST["product".($i + 1)]);
             $total = total + subtotal;
             echo "<tr>";
                echo "<th>".$products[$i]."</th>";
                echo "<td>".number_format($_POST["product".($i + 1)], 0)."</th>";
                echo "<td>\$".$price[$i]."</th>";
                echo "<td>\$".number_format($subtotal, 2, '.', ',')."</th>";
            echo "</tr>";
            }
          
        echo "<tr>";
            echo "<th>Shipping</th>";
            $total = total + $_POST["shipping"];
            if($_POST["shipping"] == 0) 
            {
              echo "<td colspan=\"2\"> Free Shipping </td>";
            }

            else if (($_POST["shipping"] == 50))
            {
              echo "<td colspan=\"2\">Overnight Shipping</td>";
            }
            
            else if($_POST["shipping"] == 5)
            {
              echo "<td colspan=\"2\"> 3 Day Shipping </td>";
            }
           
            echo "<td>\$".number_format($_POST["shipping"], 2, '.', ',')."</td>";
          echo "</tr>";
        echo "</tbody>";
    
        echo "<tfoot>";
          echo "<tr>";
            echo "<th colspan=\"3\">Total Cost</th>";
            echo "<th>\$".number_format($total, 2, '.', ',')."</th>";
          echo "</tr>";
        echo "</tfoot>";
      echo "</table>";
    ?>
  </div>
</body>
</html>