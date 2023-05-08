const editBtn = document.querySelectorAll(".editBtn");
editBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        btn.innerHTML = "حفظ";
        const row = btn.parentNode.parentNode;
        row.style.backgroundColor =" var(--color-dark-2)";
        const cells = row.getElementsByTagName("td");
        for (let i = 0; i < cells.length - 1; i++) {
            if (cells[i].contentEditable == "true") {
                cells[i].contentEditable = false;
                btn.innerHTML="تعديل"
                row.style.backgroundColor =" var(--color-dark-1)";
            } else {
                cells[i].contentEditable = true;
            }
        }
    });
});