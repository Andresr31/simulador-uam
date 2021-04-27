function toggledMenu() {
    let element = document.getElementById("wrapper");
    if (!element.classList.contains("toggled")) element.classList.add("toggled");
    else element.classList.remove("toggled");
}