<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LexAdvisor - LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>

    <?php 
        include_once '../includes/header.php';
    ?>




    <?php 
        include_once '../includes/footer.php';
    ?>

    <script src="../assets/js/script.js"></script>
    <script>
        function Menu(e){
            let list = document.querySelector('#links');

            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu" ,list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        }
    </script>
</body>
</html>