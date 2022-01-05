function openForm(a) {
    document.getElementById(a).style.display = "block";

    for (let i = 1; i < 6; i++) {
      if (i != a) {
        closeForm(i)
      }
   }
  }
function closeForm(a) {
    document.getElementById(a).style.display = "none";
  }