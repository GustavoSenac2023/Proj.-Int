function getSelectedRadio() {
    // Get all radio buttons with name 'options'
    var radios = document.getElementsByName('options');
    
    // Variable to hold the selected value
    var selectedValue;
    
    // Loop through all radio buttons
    for (var i = 0; i < radios.length; i++) {
      // Check if radio button is checked
      if (radios[i].checked) {
        // Get the selected value
        selectedValue = radios[i].value;
        break; // Exit loop early since we found the selected radio
      }
    }
    
    // Output the selected value (you can modify this part based on your needs)
    if (selectedValue) {
      alert('Selected value: ' + selectedValue);
    } else {
      alert('Please select an option');
    }
  }