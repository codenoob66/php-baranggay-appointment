const aptForm = document.getElementById("appointment-form");
const responseDisplay = document.getElementById("message-area");
const responsiveDiv = document.getElementById("responseMessage");
const sutmitbtn = document.getElementById("submit-appt");
const toggleButton = document.getElementById("switch-to-check-form");
const checkAppt = document.getElementById("check-appointment");
const apptField = document.getElementById("appointment-no");


// console.log(checkAppt)

aptForm.addEventListener("submit", async function(event) {
  event.preventDefault();

  const url = "submit_handler.php";
  const formData = new FormData(this);

  try {
  
    const response = await fetch(url, {
          method: "POST",
          body: formData,
          });

  if (!response.ok) {
    responsiveDiv.innerHTML = `❌ Server Error`;
    responsiveDiv.style.color = "red";
    return; // stop here
  } else {
    const data = await response.json();
    const confirmationNumber = data;
    responseDisplay.innerText = `Appointment Confirmed! Your confirmation number is ${confirmationNumber}`
    aptForm.reset()
    setTimeout((element) => {
      element.innerText = "";
    }, 10000, responseDisplay)
  }
  
  } catch (error) {
    console.error("Error in something", error);
    responsiveDiv.innerHTML = `❌ Network Error unable to connect to the server`;
    responsiveDiv.style.color = "red";
  }
  
});

toggleButton.addEventListener("click", (event)=> {
  event.preventDefault();
    aptForm.classList.toggle("active");
    checkAppt.classList.toggle("active");
})

checkAppt.addEventListener("submit", async function(event) {
  event.preventDefault();
  
  const apptValue = apptField.value;

  const url = `submit_handler.php?appointment-no=${apptValue}`;

  try {
    
const response = await fetch(url, {
    method: "GET",

    });

    if(!response.ok) {
      console.log("unable to check this confirmation no.");
      return;
    } else {
      console.log("Valid Confirmation No.");
      const data = await response.json();
      console.log(data.message);
      return;
    }
  } catch (error) {
    console.error("Error in something", error);
  }
})