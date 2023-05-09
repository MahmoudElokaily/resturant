const img_Exchange = document.querySelectorAll(".img_Exchange");
const mainDisplayImg = document.querySelector(".display-image img");
img_Exchange.forEach((p) => {
    p.addEventListener("click", () => {
        mainDisplayImg.src = p.src;
    });
});