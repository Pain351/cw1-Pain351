const formContainer = document.getElementById("form-container");
const bookingTypeRadios = document.querySelectorAll('input[name="booking_type"]');

// Form templates for different booking types
const appointmentForm = `
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="phone">Phone:</label>
  <input type="tel" name="phone" id="phone" required>

  <label for="date">Preferred Date:</label>
  <input type="date" name="date" id="date" required>

  <label for="message">Message (Optional):</label>
  <textarea name="message" id="message" rows="4"></textarea>
`;

const carRideForm = `
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="phone">Phone:</label>
  <input type="tel" name="phone" id="phone" required>

  <label for="date">Event Date:</label>
  <select name="date" id="date" required>
    <option value="" disabled selected>Select a date</option>
  </select>

  <label for="message">Message (Optional):</label>
  <textarea name="message" id="message" rows="4"></textarea>
`;

const driftTrackForm = `
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="phone">Phone:</label>
  <input type="tel" name="phone" id="phone" required>

  <label for="date">Preferred Date:</label>
  <select name="date" id="date" required>
    <option value="" disabled selected>Select a date</option>
  </select>

  <label for="car_model">Car Model:</label>
  <input type="text" name="car_model" id="car_model" required>
`;

const buyCarPartsForm = `
  <label for="part_name">Part Name:</label>
  <input type="text" name="part_name" id="part_name" required>

  <label for="quantity">Quantity:</label>
  <input type="number" name="quantity" id="quantity" required>

  <label for="address">Shipping Address:</label>
  <textarea name="address" id="address" rows="4" required></textarea>
`;

// Function to handle form selection change
function handleFormSelectionChange() {
  const selectedValue = document.querySelector('input[name="booking_type"]:checked').value;
  switch (selectedValue) {
    case 'appointment':
      formContainer.innerHTML = appointmentForm;
      break;
    case 'car_ride':
      formContainer.innerHTML = carRideForm;
      break;
    case 'drift_track':
      formContainer.innerHTML = driftTrackForm;
      break;
    case 'buy_car_parts':
      formContainer.innerHTML = buyCarPartsForm;
      break;
    default:
      formContainer.innerHTML = '';
  }
}

// Listen for change events on the booking type radio buttons
bookingTypeRadios.forEach(radio => {
  radio.addEventListener('change', handleFormSelectionChange);
});
function handleSubmit(event) {
  event.preventDefault(); // Prevent the default form submission
  
  // Get the selected booking type
  const selectedValue = document.querySelector('input[name="booking_type"]:checked').value;
  
  // Collect form data based on selected booking type
  const formData = new FormData(document.querySelector('form'));
  
  // Send the form data to the server using AJAX or Fetch API
  fetch('../php/process_form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    // Process the response from the server, such as showing a success message
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });
}

// Attach the handleSubmit function to the form's submit event
document.querySelector('form').addEventListener('submit', handleSubmit);