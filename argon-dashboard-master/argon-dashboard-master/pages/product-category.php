<?php
require_once("../../../db_connect_product_category.php");


$sqlAll = "SELECT * FROM primary_category where valid = 1";
$resultAll = $conn->query($sqlAll);

?>

<!doctype html>
<html lang="en">

<head>
    <title>product category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="container">
        <h1 class="text-center py-2">商品分類列表</h1>
        <div class="col">
            <form action="">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2" name="search" <?php if (isset($_GET["search"])) : $searchValue = $_GET["search"]; ?> value="<?= $searchValue ?>" <?php endif; ?>>
                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass fa-fw"></i></button>
                </div>
            </form>
        </div>
        <div class="py-2">
            共 個商品
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>編號</td>
                    <td>分類項目</td>
                    <td>查看資訊</td>
                    <td>編輯</td>
                </tr>
            </thead>
            <tbody>
            <?php
                    $rows = $resultAll->fetch_all(MYSQLI_ASSOC);
                    foreach ($rows as $product_category) :
                    ?>
                <tr>
                    <td><?=$product_category["id"]?></td>
                    <td><?=$product_category["name"]?></td>
                    <td><a href=""><i class="fa-solid fa-list fa-fw"></i></a></td>
                    <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    
</body>

</html>