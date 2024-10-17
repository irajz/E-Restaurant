let cart = [];

function addToCart(itemName, itemPrice) {
  cart.push({ name: itemName, price: itemPrice, quantity: 1 });

  // Save cart to localStorage to persist it across pages
  localStorage.setItem("cart", JSON.stringify(cart));

  // Show popup message
  showPopup();
}

// Function to show the popup
function showPopup() {
  const popup = document.getElementById("popup-message");
  popup.style.display = "block";
}

// Function to hide the popup when "OK" is clicked
function hidePopup() {
  const popup = document.getElementById("popup-message");
  popup.style.display = "none";
}
