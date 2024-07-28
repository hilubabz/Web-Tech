
    $("#contactForm").submit(function (event) {
      event.preventDefault();
      const name = $("#name").val();
      const email = $("#email").val();
      const message = $("#message").val();
  
      alert(`Thank you, ${name}. We have received your message: "${message}"`);
  
      // Clear the form
      $(this).trigger("reset");
    });