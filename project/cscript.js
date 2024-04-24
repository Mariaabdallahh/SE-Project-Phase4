
  let prevId = "1";

  window.onload = function () {
    document.getElementById("screen-next-btn").disabled = true;
  }

  function timeFunction() {
    document.getElementById("screen-next-btn").disabled = false;
  }

  function myFunction(dateNumeric) {
    // Create a new FormData object
    var formData = new FormData();
    formData.append('dateNumeric', dateNumeric);
  
    // Send an AJAX request to a PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_date.php', true);
    xhr.onload = function () {
      if (xhr.status == 200) {
        // Request was successful
        console.log('Data successfully sent to PHP script');
  
        // Set background color of previously selected element back to white
        if (prevId) {
          document.getElementById(prevId).style.background = "white";
        }
  
        // Set background color of newly selected element
        document.getElementById(dateNumeric).style.background = "rgb(254, 184, 1)";
  
        // Update prevId to the newly selected element id
        prevId = dateNumeric;
      } else {
        // Error occurred
        console.error('Error sending data to PHP script');
      }
    };
    xhr.send(formData);
  }
  


