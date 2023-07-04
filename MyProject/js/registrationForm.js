document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var resume = document.getElementById('resume').value;
  
    // Perform form validation
    if (name && email && phone && resume) {
      // Form is valid, submit data or perform further actions
      console.log('Form submitted!');
      // Add your code here to submit the data or perform additional actions
    } else {
      // Form is incomplete, display error message
      alert('Please fill in all fields.');
    }
  });
  