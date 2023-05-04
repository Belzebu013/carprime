const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    tamanhoContainer = body.querySelector(".size-content"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");

    if (sidebar.classList.contains('close')) {
        tamanhoContainer.classList.add('size-content');
        tamanhoContainer.classList.remove('size-content-open');
    } else {
        tamanhoContainer.classList.remove('size-content');
        tamanhoContainer.classList.add('size-content-open');
    }

})

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
    } else {
        modeText.innerText = "Dark mode";

    }
});
$(document).ready(()=>{
    $('#nome').click (()=>{
        $('#nome').html('<p>Deu certo</p>')
    })

})


