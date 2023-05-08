const divAllResults = document.querySelector(".all-results");
const selectPlace = document.getElementById("select-place");
const numOfResult = document.getElementById("numOfResult");


const btnQuickView = document.querySelectorAll("#details");
btnQuickView.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        createQuickView();
    });
});


function createQuickView() {
    const divQuickView = document.querySelector(".quick-view-product");
    divQuickView.classList.add("active");

    const btnQuickViewClose = document.querySelector(
        ".quick-view-product .close"
    );

    btnQuickViewClose.addEventListener("click", () => {
        divQuickView.classList.remove("active");
    });

    const img_Exchange = document.querySelectorAll(".img_Exchange");
    const mainDisplayImg = document.querySelector(".display-image img");
    img_Exchange.forEach((p) => {
        p.addEventListener("click", () => {
            mainDisplayImg.src = p.src;
        });
    });

    const btnCheckOut = document.getElementById("checkBtn");
    btnCheckOut.addEventListener("click", () => {
        divQuickView.classList.remove("active");
        window.location.href = "../Booking/index.html";
    });
}
