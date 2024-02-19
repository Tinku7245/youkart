<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Categories and Subcategories</title>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    li {
        margin-bottom: 5px;
    }
    ul ul {
        margin-left: 20px;
    }
    /* Style for categories */
    li.category {
        font-weight: bold;
        color: blue;
        cursor: pointer; /* Add cursor pointer for better UX */
    }
    /* Style for subcategories */
    li.subcategory {
        color: green;
    }
</style>
</head>
<body>

<h2>Categories</h2>
<ul>
    <?php
    // Define categories and subcategories
    $categories = array(
        "Category 1" => array("Subcategory 1.1", "Subcategory 1.2", "Subcategory 1.3"),
        "Category 2" => array("Subcategory 2.1", "Subcategory 2.2", "Subcategory 2.3")
        // Add more categories and subcategories as needed
    );

    // Loop through categories
    foreach ($categories as $category => $subcategories) {
        echo "<li class='category' onclick=\"window.location='subcategory.php?category=" . urlencode($category) . "'\">$category";
        echo "<ul>";
        // Loop through subcategories
        foreach ($subcategories as $subcategory) {
            echo "<li class='subcategory'>$subcategory</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    ?>
</ul>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subcategory Page</title>
</head>
<body>

<h2>Subcategory Page</h2>

<?php
// Check if category is set in the URL
if(isset($_GET['category'])) {
    $category = $_GET['category'];
    echo "<h3>$category Subcategories:</h3>";
    
    // Display subcategories for the selected category
    // This is just a demonstration, you might have a database query here instead
    echo "<ul>";
    switch($category) {
        case "Category 1":
            echo "<li>Subcategory 1.1</li>";
            echo "<li>Subcategory 1.2</li>";
            echo "<li>Subcategory 1.3</li>";
            break;
        case "Category 2":
            echo "<li>Subcategory 2.1</li>";
            echo "<li>Subcategory 2.2</li>";
            echo "<li>Subcategory 2.3</li>";
            break;
        // Add more cases for additional categories
    }
    echo "</ul>";
} else {
    // Redirect to index.php if category is not set in the URL
    header("Location: index.php");
    exit();
}
?>

</body>
</html>

