let switchBtns = document.querySelectorAll(".switch-btns .btn-cat");
let allTr = document.querySelectorAll(".all");
let trArray = Array.from(allTr);

switchBtns.forEach((btn) => {
    // remove active class from all btns and add to current
    btn.addEventListener("click", () => {
        switchBtns.forEach((btn) => {
            btn.classList.remove("active");
        });
        btn.classList.add("active");
    });

    // manage tr
    btn.addEventListener("click", function () {
        trArray.forEach((tr) => {
            tr.classList.add("hide-tr");
        });

        let trShow = document.querySelectorAll(
            "." + this.getAttribute("data-cat")
        );

        trShow.forEach((tr) => {
            tr.classList.remove("hide-tr");
        });
    });
});

let search = () => {
    let searchInp = document.querySelector(".search-inp").value.toUpperCase();
    let allMembers = document.querySelectorAll(".all");

    for (let i = 0; i < allMembers.length; i++) {
        let match = allMembers[i].querySelector("p");

        if (match) {
            let textValue = match.textContent || match.innerHTML;

            if (textValue.toUpperCase().indexOf(searchInp) > -1) {
                allMembers[i].classList.remove("hide-tr");
            } else {
                allMembers[i].classList.add("hide-tr");
            }
        }
    }
};
