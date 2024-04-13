<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Contact Form</h1>
    <form action="process.php" method="post" class="flex flex-col space-y-4">
      <div class="flex flex-col">
        <label for="name" class="text-gray-700 mb-2">Name</label>
        <input type="text" id="name" name="name" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="email" class="text-gray-700 mb-2">Email Address</label>
        <input type="email" id="email" name="email" required class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="phone" class="text-gray-700 mb-2">Phone Number (Optional)</label>
        <input type="tel" id="phone" name="phone" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="message" class="text-gray-700 mb-2">Message</label>
        <textarea id="message" name="message" rows="5" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
      </div>
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Send Message</button>
    </form>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Contact Form</h1>
    <form action="process.php" method="post" class="flex flex-col space-y-4">
      <div class="flex flex-col">
        <label for="name" class="text-gray-700 mb-2">Name</label>
        <input type="text" id="name" name="name" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="email" class="text-gray-700 mb-2">Email Address</label>
        <input type="email" id="email" name="email" required class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="phone" class="text-gray-700 mb-2">Phone Number (Optional)</label>
        <input type="tel" id="phone" name="phone" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
      </div>
      <div class="flex flex-col">
        <label for="message" class="text-gray-700 mb-2">Message</label>
        <textarea id="message" name="message" rows="5" class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
      </div>
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Send Message</button>
    </form>
  </div>
</body>
</html>



