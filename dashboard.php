<?php
    include_once './source/database.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="dashboard.css" rel="stylesheet" type="text/css">
    <link href="./source/new-product-modal.css" rel="stylesheet" type="text/css">
    <link href="./source/remove-product-modal.css" rel="stylesheet" type="text/css">
    <link href="./source/data-table-style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar">
                <div>
                    <img class="logo" src="./asset/logo1.png">
                    <a href="#">Dashboard</a>
                    <a href="#">In Stock</a>
                    <a href="#" class="admin"><i class="fas fa-user-circle"></i>Admin</a>

                    <div class="dropdown">
                        <a href="#"><i class="fa-solid fa-caret-down"></a></i>
                        <div class="dropdown-options">
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <aside>
            <div>
                <?php
                include_once './source/new-product-modal.php';
                ?>
            </div>
        </aside>

        <main>
            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Date</th>
                    <th>No. of Stock</th>
                    <th>Action</th>
                </tr>

                <?php
                include_once './process/display-data.php';
                ?>

            </table>
        </main>
    </div>


</body>

</html>