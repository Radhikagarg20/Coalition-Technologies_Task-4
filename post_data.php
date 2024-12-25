<?php
if (isset($_POST['action']) && $_POST['action'] == 'save') {
    $productData = json_decode($_POST['product_data'], true);

    $file = 'product_data.json';
    $data = json_decode(file_get_contents($file), true);
    
    $data[] = $productData;
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo "Data saved successfully!";
}
?>