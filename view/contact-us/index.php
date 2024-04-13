<?php
$imageSource = "exhibitions";
$folderPath = "../public/assets/images/exhibitions";
require('../controllers/home/imageDisplay.php');
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
require('../resources/views/header.php');
?>
<main>
    <div class="w-screen bg-black h-40">
        <h1 class="text-white text-6xl ml-8 pt-4 text-pretty">Contact Us</h1>
        <p class="text-white text-lg ml-8 text-pretty">Feel free to reach us anytime</p>
    </div>
    <div class="grid grid-cols-2">
    <div class="container mx-auto px-4 py-8 m-2 ml-4 shadow-2xl">
    <h1 class="text-3xl font-bold mb-4">Contact Form</h1>
    <form action="process.php" method="post" class="flex flex-col space-y-4">
      <div class="flex flex-col">
        <input type="text" id="name" name="name" placeholder="Name" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <input type="email" id="email" placeholder="Email" name="email" required class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <input type="tel" id="phone" name="phone" placeholder="Phone" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <textarea id="message" name="message" placeholder="Enter your message here. Will get back to you within 2 hours." rows="5" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
      </div>
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 w-1/6">Send Message</button>
    </form>
  </div>
        <div>

        </div>
    </div>
</main>
<?php
require('../resources/views/footer.php');

?>

<script src="https://cdn.tailwindcss.com"></script>
<script src="/aashprojecttemp/public/assets/js/home/dropdown.js"></script>
</body>
</html>