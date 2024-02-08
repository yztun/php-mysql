
const searchKey = document.querySelector('.searchTerms');

// console.log(searchKey);

// table element
const tbl = document.createElement('div');
tbl.classList.add('table');

function createTable(data) {
    createHeader();
    createBody(data);
    document.querySelector('.container-fetch').appendChild(tbl);
}

function createHeader() {
    // header element
    const headers = ['ISBN', 'Title', 'Author', 'Price'];

    headers.forEach(heading => {
        const header = document.createElement('div');
        header.textContent = heading;
        header.classList.add('header');
        tbl.appendChild(header);
    });
}

function createBody(content) {

    content.forEach(data => {
        const cell1 = document.createElement('div');
        cell1.textContent = data['ISBN'];
        cell1.classList.add('cell');
        tbl.appendChild(cell1);

        const cell2 = document.createElement('div');
        cell2.textContent = data['title'];
        cell2.classList.add('cell');
        tbl.appendChild(cell2);

        const cell3 = document.createElement('div');
        cell3.textContent = data['author'];
        cell3.classList.add('cell');
        tbl.appendChild(cell3);

        const cell4 = document.createElement('div');
        cell4.textContent = data['price'];
        cell4.classList.add('cell');
        tbl.appendChild(cell4);
    });

}

searchKey.addEventListener('input', function() {

    const q = searchKey.value;

    const url = `http://localhost/php-mysql/fetch/data.php?q=${q}`;

    fetch(url)
        .then((res) => {
            return res.json();
        })
        .then((data) => {
            createTable(data);
        });
});