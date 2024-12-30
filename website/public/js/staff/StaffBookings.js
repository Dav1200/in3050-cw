// open the overlay
function openOverlay() {
    document.getElementById('overlay-reservation').style.display = 'block';
    document.body.style.overflow = 'hidden'; // Disable scrolling
 
 
 
}

// Function to close the overlay
function closeOverlay() {
    document.getElementById('overlay-reservation').style.display = 'none';
    document.body.style.overflow = ''; // Enable scrolling
  
}

// Function to print the list of reservations
function printList() {
    // Hide other elements that are not needed when pringint he list
    var bodyContent = document.body.innerHTML;
    var overlayContent = document.getElementById('overlay-reservation').innerHTML;
    //assign the content of the body to a variable so we only print the overlay content as before it was printing all the content on body, we assign it back to the body after printing
    document.body.innerHTML = overlayContent;
    window.print();
    document.body.innerHTML = bodyContent;
}