window.addEventListener("load", () => {
  /*animate on scroll*/
  AOS.init();
});

/* header bg reveal*/

const headerBg = () => {
  const header = document.querySelector(".js-header");

  window.addEventListener("scroll", function () {
    if (this.scrollY > 0) {
      header.classList.add("bg-reveal");
    } else {
      header.classList.remove("bg-reveal");
    }
  });
};
headerBg();

/*nav*/

const navigation = () => {
  const navToggler = document.querySelector(".js-nav-toggler");
  const nav = document.querySelector(".js-nav");
  const navItems = nav.querySelectorAll("li");

  const navToggle = () => {
    nav.classList.toggle("open");
    navToggler.classList.toggle("active");
  };
  navToggler.addEventListener("click", navToggle);

  navItems.forEach((li) => {
    li.querySelector("a").addEventListener("click", () => {
      if (window.innerWidth <= 767) {
        navToggle();
      }
    });
  });
};
navigation();

function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}

