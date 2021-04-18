// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

//Paralax
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  $(".jumbotron img").css({
    transform: "translate(0px, " + wScroll + "%)",
  });
});

/**
 * Scrolls to an element with header offset
 */
const scrollto = (el) => {
  let header = select("#header");
  let offset = header.offsetHeight;

  let elementPos = select(el).offsetTop;
  window.scrollTo({
    top: elementPos - offset,
    behavior: "smooth",
  });
};

/**
 * Toggle .header-scrolled class to #header when page is scrolled
 */
let selectHeader = select("#header");
let selectTopbar = select("#topbar");
if (selectHeader) {
  const headerScrolled = () => {
    if (window.scrollY > 100) {
      selectHeader.classList.add("header-scrolled");
      if (selectTopbar) {
        selectTopbar.classList.add("topbar-scrolled");
      }
    } else {
      selectHeader.classList.remove("header-scrolled");
      if (selectTopbar) {
        selectTopbar.classList.remove("topbar-scrolled");
      }
    }
  };
  window.addEventListener("load", headerScrolled);
  onscroll(document, headerScrolled);
}

/**
 * Mobile nav toggle
 */
on("click", ".mobile-nav-toggle", function (e) {
  select("#navbar").classList.toggle("navbar-mobile");
  this.classList.toggle("bi-list");
  this.classList.toggle("bi-x");
});

/**
 * Mobile nav dropdowns activate
 */
on(
  "click",
  ".navbar .dropdown > a",
  function (e) {
    if (select("#navbar").classList.contains("navbar-mobile")) {
      e.preventDefault();
      this.nextElementSibling.classList.toggle("dropdown-active");
    }
  },
  true
);

$(document).ready(function () {
  var readMoreHTML = $(".read-more").html();
  var lessText = readMoreHTML.substr(0, 100);

  if (readMoreHTML.length > 100) {
    $(".read-more").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
  } else {
    $("read-more").html(readMoreHTML);
  }

  $("body").on("click", ".read-more-link", function (event) {
    event.preventDefault();
    $(this).parent(".read-more").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
  });

  $("body").on("click", ".show-less-link", function () {
    event.preventDefault();
    $(this).parent(".read-more").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
  });
});
