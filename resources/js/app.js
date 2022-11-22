import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.getElementById("profil_picture").addEventListener("change", sizeControllerProfile);
// document.getElementById("project-picture").addEventListener("change", sizeControllerProject);

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

let radios = document.forms["form"].elements["category_id"]
for (let i = 0; i < radios.length; i++) {
    radios[i].onclick = function () {
        let myDiv = document.getElementById("skills");
        while (myDiv.firstChild) {
            myDiv.removeChild(myDiv.firstChild);
        }
        testAPI(this.value)
    }
}

function testAPI(id) {
    fetch('/api/skills/' + id)
        .then((response) => response.json())
        .then((data) => {
            for (const [key, value] of Object.entries(data)) {

                // creating checkbox element
                let checkbox = document.createElement('input');

                // Assigning the attributes
                // to created checkbox
                checkbox.type = "checkbox";
                checkbox.name = "skills[]";
                checkbox.value = value.id;
                checkbox.id = value.name;
             //  checkbox.classList.add("hidden");





                // creating label for checkbox
                let label = document.createElement('label');
                label.htmlFor = value.name;


                let div = document.createElement('div');

                div.classList.add('rounded-full');
                div.classList.add('border');
                div.classList.add('p-2');
                div.classList.add('peer-checked:border-ok');
                div.classList.add('cursor-pointer');
                div.classList.add('focus-within:hidden');


                // appending the created text to
                // the created label tag
                label.appendChild(document.createTextNode(value.name));

                // appending the checkbox
                // and label to div
                let myDiv = document.getElementById("skills");


                div.appendChild(checkbox);
                div.appendChild(label);
                myDiv.appendChild(div);



            }
        });
}




