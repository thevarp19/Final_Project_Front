const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}
function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight+100;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
       if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
       }
      }
  }
  window.addEventListener("scroll", reveal);
  $('#bur1').click(function(){
    var width = $(window).width();
    $('#bur1').toggleClass("open");
    $('#ov1').slideToggle();
});   