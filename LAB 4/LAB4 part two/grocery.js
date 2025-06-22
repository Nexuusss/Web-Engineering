const products = [
  { id: "banana", original: 24.99, discount: 50 },
  { id: "strawberry", original: 29.99, discount: 10 },
  { id: "apple", original: 19.99, discount: 15 },
  { id: "watermelon", original: 34.99, discount: 20 }
];

products.forEach(product => {
  const price = (product.original * (1 - product.discount / 100)).toFixed(2);

  const org = document.getElementById(product.id + "-original");
  if (org) {
    org.style.textDecoration = "line-through";
    org.style.color = "gray";
  }

  const priceEl = document.getElementById(product.id + "-price");
  if (priceEl) {
    priceEl.textContent = " $" + price;
    priceEl.style.color = "red";
    
  }

  const disc = document.getElementById(product.id + "-discount");
  if (disc) {
    disc.textContent = " (" + product.discount + "% OFF)";
    disc.style.color = "green";
    ;
  }
});
