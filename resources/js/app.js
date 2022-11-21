import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let radios = document.forms["form"].elements["category_id"]
for (let i = 0; i < radios.length; i++) {
    radios[i].onclick = function () {
        getCategory().then(r => console.log(r));
    }
}


const getCategory = async () => {
    const response = await fetch('http://localhost/usercategory')
    const myJson = await response.json(); //extract JSON from the http response
    console.log(myJson);
}


document.getElementById("profil_picture").addEventListener("change", sizeControllerProfile);
document.getElementById("project-picture").addEventListener("change", sizeControllerProject);

function sizeControllerProfile(input) {
    let file = input.target.files[0];
    let fileSize = file.size;
    if (fileSize > 4000000) {
        alert("Please upload a file less than 4MB");
    } else {
        let parent = document.getElementById("form-picture")
        parent.children[0].style.display = "none";

        let img = document.createElement("img");
        img.src = URL.createObjectURL(file);
        img.classList.add("rounded-full");
        img.style.maxWidth = "104px";
        img.style.maxHeight = "104px";
        parent.prepend(img);
    }
}

function sizeControllerProject(input) {
    let file = input.target.files[0];
    let fileSize = file.size;
    if (fileSize > 4000000) {
        alert("Please upload a file less than 4MB");
    } else {
        let parent = document.getElementById("form-picture-2")
        parent.children[0].style.display = "none";

        let img = document.createElement("img");
        img.src = URL.createObjectURL(file);
        img.classList.add("rounded-full");
        img.style.maxWidth = "200px";
        img.style.maxHeight = "200px";
        parent.prepend(img);
    }
}
