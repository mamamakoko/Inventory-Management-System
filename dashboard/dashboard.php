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
            <!---------- navigation bar ---------->
            <nav class="navbar">
                <div>
                    <img class="logo" src="./asset/logo1.png">
                    <a href="#">Dashboard</a>

                    <div class="logout">
                        <form method="POST"><button type="submit" name="logout">Logout</button></form>
                        <?php
                            if (isset($_POST['logout'])) {
                                // Destroy the session
                                session_destroy();
                                // Redirect to the login page
                                header('Location: ./source/main.php');
                                exit;
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>

        <!---------- modal for "New Product" button ---------->
        <aside>
            <div>
                <?php
                include_once './source/new-product-modal.php';
                ?>
            </div>
        </aside>

        <!---------- display data tabel ---------->
        <main>
            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Date</th>
                    <th>No. of Stock</th>
                    <th>Action</th>
                </tr>

                <!---------- data container/database ---------->
                <?php
                include_once './process/display-data.php';
                ?>

            </table>
        </main>
    </div>


</body>

</html>