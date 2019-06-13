function swapContent(id) {
    const main = document.getElementById('main_place');
    const div = document.getElementById(id);
    const clone = div.cloneNode(true);

    while (main.firstChild) main.firstChild.remove();

    main.appendChild(clone);
}
