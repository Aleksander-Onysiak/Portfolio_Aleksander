document.addEventListener('DOMContentLoaded', function () {
  const menuItems = document.querySelectorAll('.menu__item');


  menuItems.forEach(function (item) {
    item.addEventListener('click', function () {
      this.classList.toggle('active');
      const dropdown = this.querySelector('.menu__dropdown');
      if (dropdown) {
        dropdown.classList.toggle('active');
      }
    });
  });
});
