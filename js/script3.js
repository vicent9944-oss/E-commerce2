const topBtn = document.getElementById("backToTop");

// 1. Show/Hide button based on scroll position
window.onscroll = function() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    topBtn.classList.add("show");
  } else {
    topBtn.classList.remove("show");
  }
};

// 2. Scroll to top logic
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // This makes the scroll nice and fluid
  });
}


    