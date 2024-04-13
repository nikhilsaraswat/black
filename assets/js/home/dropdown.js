const contacts = document.querySelector('.contacts');
const contactLists = document.querySelector('.contactLists');

contacts.addEventListener('mouseover', function() {
    contactLists.classList.remove('hidden'); // Show on mouseover
});

contacts.addEventListener('mouseout', function() {
    contactLists.classList.add('hidden'); // Hide on mouseout
});
const projects = document.querySelector('.projects');
    const projectsList = document.querySelector('.projectsList');

    projects.addEventListener('mouseover', function() {
      projectsList.classList.remove('hidden'); // Show on mouseover
    });

    projects.addEventListener('mouseout', function() {
      projectsList.classList.add('hidden'); // Hide on mouseout
    });

    const eShop = document.querySelector('.eShop');
    const shopList = document.querySelector('.shopList');

    eShop.addEventListener('mouseover', function() {
        shopList.classList.remove('hidden'); // Show on mouseover
    });

    eShop.addEventListener('mouseout', function() {
        shopList.classList.add('hidden'); // Hide on mouseout
    });