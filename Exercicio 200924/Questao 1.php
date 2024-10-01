<?php
function get_product_info() {
    $products = [];
    for ($i = 0; $i < 5; $i++) {
        echo "Enter product " . ($i + 1) . " name: ";
        $name = trim(fgets(STDIN));
        echo "Enter product " . ($i + 1) . " price: ";
        $price = (float) trim(fgets(STDIN));
        $products[] = ["name" => $name, "price" => $price];
    }
    return $products;
}

function count_cheaper_than_50($products) {
    $count = 0;
    foreach ($products as $product) {
        if ($product["price"] < 50) {
            $count++;
        }
    }
    return $count;
}

function get_products_between_50_and_100($products) {
    $products_between_50_and_100 = [];
    foreach ($products as $product) {
        if ($product["price"] >= 50 && $product["price"] <= 100) {
            $products_between_50_and_100[] = $product["name"];
        }
    }
    return $products_between_50_and_100;
}

function calculate_average_price_above_100($products) {
    $prices_above_100 = [];
    foreach ($products as $product) {
        if ($product["price"] > 100) {
            $prices_above_100[] = $product["price"];
        }
    }
    if (count($prices_above_100) == 0) {
        return 0;
    }
    return array_sum($prices_above_100) / count($prices_above_100);
}

function main() {
    $products = get_product_info();
    $cheaper_than_50 = count_cheaper_than_50($products);
    $products_between_50_and_100 = get_products_between_50_and_100($products);
    $average_price_above_100 = calculate_average_price_above_100($products);

    echo "a. Quantity of products with price inferior to R$50,00: " . $cheaper_than_50 . "\n";
    echo "b. Names of products with price between R$50,00 and R$100,00: " . implode(", ", $products_between_50_and_100) . "\n";
    echo "c. Average price of products with price superior to R$100,00: R$" . number_format($average_price_above_100, 2) . "\n";
}

main();

?>