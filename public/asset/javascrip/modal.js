document.getElementById("toggleMenuBtn").addEventListener("click", function () {
    const menuContent = document.getElementById("menuContent");
    if (menuContent.classList.contains("show")) {
        menuContent.classList.remove("show");
    } else {
        menuContent.classList.add("show");
    }
});
