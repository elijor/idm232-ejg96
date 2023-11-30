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
  // location.href='recipe-page/index.html'
  location.href='recipe-page/index.html'
};  
const chickencb = document.getElementById('chicken');

function submitFilter() {

    document.getElementById('filtersform').submit();
    // chickencb.checked = true;

  };
  

  let form1 = document.getElementById('formtest');

const resetButton = document.getElementById("resetprotein");

resetButton.addEventListener("click", function() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"].cb');

  checkboxes.forEach(checkbox => {
    checkbox.checked = false; // Uncheck all checkboxes
  });

  document.getElementById('filtersform').submit();

});

// function expnd() {
//   document.getElementById('filtersform').classList.add("expand");

//   let svgContainer = document.getElementById('expandFilter');
  
//   let newSVG = '<svg onClick="close()" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ea5624"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#ea5624"></path> </g></svg>';

//   svgContainer.innerHTML = newSVG;
//   console.log("firseexpandWorks");


// };

// function close() {
//   console.log("itWorks");

//   document.getElementById('filtersform').classList.remove("expand");

//   let svgContainer2 = document.getElementById('expandFilter');
  
//   let newSVG2 = '<svg onClick="expnd()" width="24px" height="24px" viewBox="0 0 120 42" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.71666 0C0.597155 0 -1.21429 6.78082 3.22319 9.33389L57.5065 40.5654C59.0502 41.4535 60.9498 41.4535 62.4935 40.5654L116.777 9.33389C121.214 6.78082 119.403 0 114.283 0H5.71666Z" fill="#EA5624"/> </svg>';


//   svgContainer2.innerHTML = newSVG2;
// };

function toggleSVG() {
  var formContainer = document.getElementById('filtersform');
  formContainer.classList.toggle('expand');

  var svgElement = document.getElementById('svgElement');

  // Check if the form is expanded or not and update the SVG accordingly
  if (formContainer.classList.contains('expand')) {
    svgElement.innerHTML = '<g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="16" height="16" id="icon-bound" fill="none"></rect> <polygon points="8,3 16,11 0,11"></polygon> </g>';
  } else {
    svgElement.innerHTML = '<g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="16" height="16" id="icon-bound" fill="none"></rect> <polygon points="8,13 0,5 16,5"></polygon> </g>';
  }
}
