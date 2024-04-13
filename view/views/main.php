<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<main>
        <div class="grid grid-cols-3 mt-4 pl-8 pr-8 bg-gray-200 pt-4">
            <div class="flex flex-col overflow-hidden">
        <?php for ($i = 1; $i <= $a; $i++): ?>
        <img class="relative object-contain hover:scale-110 z-40 hover:z-10 transition duration-300 ease-in-out cursor-pointer" src="/aashprojecttemp/assets/images/<?php echo $imageSource; ?>/<?php echo $i; ?>.jpg" alt="Black Mango India Logo">
        <?php endfor; ?>
        </div>
            <div class="flex flex-col overflow-hidden">
        <?php for ($i = $a+1; $i <= $a+$b; $i++): ?>
        <img class="object-contain hover:scale-110 z-40 hover:z-10 transition duration-300 ease-in-out cursor-pointer" src="/aashprojecttemp/assets/images/<?php echo $imageSource; ?>/<?php echo $i; ?>.jpg" alt="Black Mango India Logo">
        <?php endfor; ?>
        </div>
            <div class="flex flex-col overflow-hidden">
        <?php for ($i = $a+$b+1; $i <= $a+$b+$c; $i++): ?>
        <img class="object-contain hover:scale-110 z-40 hover:z-10 transition duration-300 ease-in-out cursor-pointer" src="/aashprojecttemp/assets/images/<?php echo $imageSource; ?>/<?php echo $i; ?>.jpg" alt="./../images/homedesign/<?php echo $i; ?>.jpg">
        <?php endfor; ?>
        </div>
    </main>
</body>
</html>