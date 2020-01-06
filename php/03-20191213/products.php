<?php
$product = [
    "apple" => [
        "name" => "iphone X",
        "price" => 999,
    ],
    "samsung" => [
        "name" => "galaxy S10",
        "price" => 888,
    ]
];

$keys = array_keys($products);

echo $keys[1];

?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>price</th>
        </tr>    
    <thead>  
    <tbody>
        <?php
        $tong = 0;
        for ($i = 0; $i < count($keys); $i++) {
        ?>
        <tr>
            <td>
                <?php echo $i + 1; ?>
            </td>
            <td>
                <?php echo $products[$keys[$i]]["name"]; ?>
            </td>
            <td>
                <?php echo $products[$keys[$i]]["price"]; ?>
            </td>    
        </tr>
        <?php 
            $tong = $tong + $products[$keys[$i]]["price"];
        }
        ?>
        <tr>
            <td colspan="2">Tong</td>
            <td>
                <?php echo $tong; ?>
            </td>
        </tr>
    </tbody>      
</table>


    





