// Get cart from localStorage
let cart = JSON.parse(localStorage.getItem("cart")) || [];

// Function to render the cart
function renderCart() {
  let cartTableBody = document.querySelector("#cart-table tbody");
  let totalPriceElement = document.getElementById("total-price");

  // Clear current cart display
  cartTableBody.innerHTML = "";
  let total = 0;

  // Display each cart item
  cart.forEach((item, index) => {
    let row = document.createElement("tr");

    // Create table row for each item
    row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.price.toFixed(2)}</td>
            <td>
                <div class="quantity-controls">
                    <button onclick="decrementQuantity(${index})">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="incrementQuantity(${index})">+</button>
                </div>
            </td>
            <td>${(item.price * item.quantity).toFixed(2)}</td>
            <td><button onclick="removeFromCart(${index})">Remove</button></td>
        `;

    cartTableBody.appendChild(row);

    // Add item price to total
    total += item.price * item.quantity;
  });

  // Update total price
  totalPriceElement.textContent = total.toFixed(2);
}

// Function to increment quantity
function incrementQuantity(index) {
  cart[index].quantity++;
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
}

// Function to decrement quantity
function decrementQuantity(index) {
  if (cart[index].quantity > 1) {
    cart[index].quantity--;
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
  }
}

// Function to remove an item from the cart
function removeFromCart(index) {
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
}

// Initial rendering of the cart when the page loads
renderCart();
