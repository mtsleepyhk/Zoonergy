// Scroll Animation (About Section)
document.addEventListener("scroll", function() {
    const imgBox = document.querySelector(".about-img");
    if (!imgBox) return;

    const rect = imgBox.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
        imgBox.classList.add("visible");
    }
});

// Warenkorb Logik
document.addEventListener("DOMContentLoaded", function() {
    let cartCount = 0;
    const cartCountSpan = document.getElementById("cart-count");
    const cartButtons = document.querySelectorAll(".add-cart-btn");

    cartButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            if (!btn.classList.contains("added")) {
                btn.classList.add("added");
                btn.textContent = "Im Warenkorb ✅";
                cartCount++;
                cartCountSpan.textContent = cartCount;
            } else {
                btn.classList.remove("added");
                btn.textContent = "+ Warenkorb";
                cartCount--;
                cartCountSpan.textContent = cartCount;
            }
        });
    });
});
