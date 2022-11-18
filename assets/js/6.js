const draggable_list = document.getElementById('draggable-list');
const check = document.getElementById('check');

const taskDone = [
    'Rentrer dans les bâtiments de G4',
    'Phase de connexion',
    /*'Planification de la semaine',*/
    'Prioriser les tâches',
    'Intervention du COP sur un projet',
];

// Store listitems
const listItems = [];

let dragStartIndex;

createList();

// Insert list items into DOM
function createList() {
    [...taskDone]
        .map(a => ({ value: a, sort: Math.random() }))
        .sort((a, b) => a.sort - b.sort)
        .map(a => a.value)
        .forEach((person, index) => {
            const listItem = document.createElement('li');

            listItem.setAttribute('data-index', index);

            listItem.innerHTML = `
        <span class="number">${index + 1}</span>
        <div class="draggable" draggable="true">
          <p class="person-name">${person}</p>
          <i class="fas fa-grip-lines"></i>
        </div>
      `;

            listItems.push(listItem);

            draggable_list.appendChild(listItem);
        });

    addEventListeners();
}

function dragStart() {
    // console.log('Event: ', 'dragstart');
    dragStartIndex = +this.closest('li').getAttribute('data-index');
}

function dragEnter() {
    // console.log('Event: ', 'dragenter');
    this.classList.add('over');
}

function dragLeave() {
    // console.log('Event: ', 'dragleave');
    this.classList.remove('over');
}

function dragOver(e) {
    // console.log('Event: ', 'dragover');
    e.preventDefault();
}

function dragDrop() {
    // console.log('Event: ', 'drop');
    const dragEndIndex = +this.getAttribute('data-index');
    swapItems(dragStartIndex, dragEndIndex);

    this.classList.remove('over');
}

// Swap list items that are drag and drop
function swapItems(fromIndex, toIndex) {
    const itemOne = listItems[fromIndex].querySelector('.draggable');
    const itemTwo = listItems[toIndex].querySelector('.draggable');

    listItems[fromIndex].appendChild(itemTwo);
    listItems[toIndex].appendChild(itemOne);
}

// Check the order of list items
function checkOrder() {
    listItems.forEach((listItem, index) => {
        const taskName = listItem.querySelector('.draggable').innerText.trim();

        if (taskName !== taskDone[index]) {
            listItem.classList.add('wrong');
            alert("Dommage tu n'as pas mémorisé, il faut donc recommencer.")
            window.location.href = "../../index.php";
            index = numOflimit+1;
        } else {
            listItem.classList.remove('wrong');
            listItem.classList.add('right');
            window.confirm("Bravo ! \nTu as validé la compétence suivante : Prendre en compte les retours d’expérience des grands types de projet.");
            window.location.href = "/assets/page/7.php";
            index = numOflimit+1;
        }
    });
}

function addEventListeners() {
    const draggables = document.querySelectorAll('.draggable');
    const dragListItems = document.querySelectorAll('.draggable-list li');

    draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', dragStart);
    });

    dragListItems.forEach(item => {
        item.addEventListener('dragover', dragOver);
        item.addEventListener('drop', dragDrop);
        item.addEventListener('dragenter', dragEnter);
        item.addEventListener('dragleave', dragLeave);
    });
}

check.addEventListener('click', checkOrder);

const arnaud = document.getElementById("arnaud");
const popup = document.getElementById("popup-indice");

arnaud.addEventListener("click", ShowPopup);
function ShowPopup() {
    if (popup.style.opacity == "0") {
        popup.style.opacity = "1";
    } else {
        popup.style.opacity = "0";
    }
}

