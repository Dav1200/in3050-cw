
function readMore(button) {
    //get the container which holds the text (meaning previous container to the button whihc is the text container)
    textContainer = button.previousElementSibling;
    //if the text is hidden we need to show it
    if (textContainer.style.display == "none") {
        textContainer.style.display = "block";
        button.innerHTML = "Read Less";
        //if the text is shown we need to hide it
    } else {
        textContainer.style.display = "none";
        button.innerHTML = "Read More";
    }
}

