function openForm(a) {
    document.getElementById(a).style.display = "block";
        var x = window.matchMedia('(max-width: 768px)');
    function toButtom(x) {
      if (x.matches) {
        //toButtom
        window.scrollTo({left: 0, top: 9999, behavior: "smooth"});
      }
    }
    toButtom(x);
    x.addListener(toButtom);
    for (let i = 1; i < 6; i++) {
      if (i != a) {
        closeForm(i)
      }
   }
  }
function closeForm(a) {
    document.getElementById(a).style.display = "none";
  }
