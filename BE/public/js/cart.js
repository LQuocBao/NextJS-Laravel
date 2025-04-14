document.addEventListener("DOMContentLoaded", () => {
    const cartKey = "shoppingCart";

    function getCart() {
        return JSON.parse(localStorage.getItem(cartKey)) || [];
    }

    function saveCart(cart) {
        localStorage.setItem(cartKey, JSON.stringify(cart));
    }

    function addToCart(productId) {
        const cart = getCart();
        const existingProduct = cart.find((item) => item.id === productId);

        if (existingProduct) {
            existingProduct.quantity++;
        } else {
            cart.push({ id: productId, quantity: 1 });
        }

        saveCart(cart);
        alert("Sản phẩm đã được thêm vào giỏ hàng!");
    }

    function updateCart(productId, action) {
        const cart = getCart();
        const product = cart.find((item) => item.id === productId);

        if (product) {
            if (action === "increase") {
                product.quantity++;
            } else if (action === "decrease") {
                product.quantity--;
                if (product.quantity <= 0) {
                    removeFromCart(productId);
                    return;
                }
            }
        }

        saveCart(cart);
    }

    function removeFromCart(productId) {
        let cart = getCart();
        cart = cart.filter((item) => item.id !== productId);
        saveCart(cart);
    }

    document.querySelectorAll(".add-to-cart").forEach((button) => {
        button.addEventListener("click", () => {
            const productId = parseInt(button.getAttribute("data-id"));
            addToCart(productId);
        });
    });

    document.querySelectorAll(".increase-quantity").forEach((button) => {
        button.addEventListener("click", () => {
            const productId = parseInt(button.getAttribute("data-id"));
            updateCart(productId, "increase");
        });
    });

    document.querySelectorAll(".decrease-quantity").forEach((button) => {
        button.addEventListener("click", () => {
            const productId = parseInt(button.getAttribute("data-id"));
            updateCart(productId, "decrease");
        });
    });

    document.querySelectorAll(".remove-from-cart").forEach((button) => {
        button.addEventListener("click", () => {
            const productId = parseInt(button.getAttribute("data-id"));
            removeFromCart(productId);
        });
    });
});
