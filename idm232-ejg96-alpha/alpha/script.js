// const checkbox = document.querySelectorAll(".cb");
// const labelcolor = document.querySelectorAll("label");

// checkbox.addEventListener("change") {
//   if (this.checked) {
//     console.log("testing ugh");
//     labelcolor[index].style.color = "#ff0000"; // Change color when the checkbox is checked
//   } else {
//     labelcolor[index].style.color = "#ea5624"; // Restore the default color when unchecked
//   }
// };

function openRecipePage() {
  location.href='recipe-page/index.html'
}



const resetButton = document.getElementById("resetprotein");

resetButton.addEventListener("click", function() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"].cb');

  checkboxes.forEach(checkbox => {
    checkbox.checked = false; // Uncheck all checkboxes
  });
});