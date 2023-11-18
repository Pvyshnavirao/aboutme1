document.getElementById('contactButton').addEventListener('click', function() {
    document.getElementById('contactForm').style.display = 'block';
});
// Add JavaScript to change button text on click
const returnButton = document.getElementById('returnButton');

returnButton.addEventListener('click', function() {
    // Change the button text when clicked
    returnButton.innerText = 'Returning...';
    
    // You can also add other actions here, like a delay or redirection
});
