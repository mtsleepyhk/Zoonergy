document.addEventListener("scroll", function() {
    const imgBox = document.querySelector(".about-img");
    if (!imgBox) return; // falls es die Section nicht gibt

    const rect = imgBox.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
        imgBox.classList.add("visible");
    }
});
