function applyDiscount(items, discounts, offers) {
  for (let i = 0; i < items.length; i++) {
    if (offers[i]) {
      const discountAmount = items[i].price * (discounts[i] / 100);
      items[i].price = (items[i].price - discountAmount).toFixed(2);
    }
  }

  return items;
}

const items = [
  { name: "Banana", price: 24.99 },
  { name: "Strawberry", price: 29.99 },
  { name: "Apple", price: 19.99 },
  { name: "Watermelon", price: 34.99 },
];
const discounts = [10, 60, 30, 9];
const offers = [true, false, true, true];
const updatedItems = applyDiscount(items, discounts, offers);
console.log(updatedItems);
