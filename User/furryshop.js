 document.querySelectorAll('.btn.fav').forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('active');
      });
    });

    let cartCount = 0;
    const cartDisplay = document.getElementById('cart-count');

    document.querySelectorAll('.btn.cart').forEach(btn => {
      btn.addEventListener('click', () => {
        cartCount++;
        cartDisplay.textContent = cartCount;
      });
    });