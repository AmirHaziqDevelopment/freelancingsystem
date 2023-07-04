const editButton = document.getElementById("editButton");
const editProfile = document.querySelector(".edit-profile");

editButton.addEventListener("click", () => {
  editProfile.style.display = "block";
});

const profileForm = document.getElementById("profileForm");

profileForm.addEventListener("submit", (e) => {
  e.preventDefault();
  
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const location = document.getElementById("location").value;

  // Perform any necessary actions with the form data (e.g., update profile)

  // Display success message or perform any other desired actions
  alert("Profile updated successfully!");
});
