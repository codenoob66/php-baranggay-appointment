const aptForm = document.getElementById("appointment-form");

aptForm.addEventListener("submit", async function (event) {
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
    } else {
      const data = await response.json();
      console.log(data);
    }
  } catch (error) {
    console.error("Error in something", error);
    const responsiveDiv = document.getElementById("responseMessage");
    responsiveDiv.innerHTML = `❌ Network Error unable to connect to the server`;
    responsiveDiv.style.color = "red";
  }
});
