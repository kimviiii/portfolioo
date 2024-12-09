document.addEventListener("DOMContentLoaded", function() {
    const footer = document.querySelector('footer');
    if (document.body.scrollHeight <= window.innerHeight) {
        footer.classList.add('fixed');
    } else {
        footer.classList.remove('fixed');
    }
});


// Function to validate the form
function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
  
    if (name == "" || email == "" || message == "") {
      alert("Please fill in all fields!");
      return false;
    }
  
    // You can add more specific validation rules here, such as email format validation
  
    return true;
  }
  
  // Function to display a success message (you'll need to handle the actual sending logic in your contact.php)
  function showSuccessMessage() {
    alert("Message sent successfully!");
    // You might want to reset the form here or redirect to another page
  }