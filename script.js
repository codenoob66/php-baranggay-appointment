console.log("test");
const aptForm = document.getElementById("appointment-form");
const test = document.getElementById("message-area");
const responsiveDiv = document.getElementById("responseMessage");
const sutmitbtn = document.getElementById("submit-appt");

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
    console.log("itot")
    test.innerText = "Appointment Confirmed Thank you!"
  }
  
  } catch (error) {
    console.error("Error in something", error);
    responsiveDiv.innerHTML = `❌ Network Error unable to connect to the server`;
    responsiveDiv.style.color = "red";
  }
  
});