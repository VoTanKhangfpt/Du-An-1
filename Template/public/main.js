function fetchProducts() {
  fetch('http://localhost:3000/products')
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      renderList(data);
    })
    .catch((error) => {
      console.error('Error fetching data:', error);
    });
}
fetchProducts();

const insert_list = document.querySelector('.list-product-body');
function renderList(products) {
  products.forEach((product) => {
    if (insert_list) {
      insert_list.innerHTML += `
              <a href="/pages/sanphamchitiet.html?id=${product.id}"data-id="${product.id}">
              <div class="list-product-item">
                <div class="list-product-item-img"  >
                  <img
                    src="/img/product/sale/${product.img}"
                    alt=""
                  />
                </div>
                <h2>${product.name}"</h2>
                <span>${product.price}</span>
              </div>
            </a> 
              `;
    }
  });
}
