<?php
$imageSource = "prints";
$folderPath = "../../public/assets/images/prints";
require('../../controllers/home/imageDisplay.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
<title>Black Mango India</title>
<?php echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">'; ?>
</head>
<body>
<?php
require('../../resources/views/header.php');
?>
<?php
require('../../resources/views/main.php');
?>
<?php
require('../../resources/views/footer.php');

?>

<script src="https://cdn.tailwindcss.com"></script>
<script src="/aashprojecttemp/public/assets/js/home/dropdown.js"></script>
</body>
</html>
