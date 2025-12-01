const selectedEl = document.getElementById("appointment-type");
const apptForm = document.getElementById("appointment-form");
const btnOutside = document.getElementById("btn-outside");


apptForm.addEventListener("submit", (event) => {
    event.preventDefault();

    console.log(selectedEl.value);
})


btnOutside.addEventListener("click", ()=> {
    console.log("the outside button is clicked");
})

