<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        th,
        td {
            font: 15px 'Segoe UI';
        }

        table,
        th,
        td {
            border: solid 1px #ddd;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }
        tr:nth-child(odd) {background: #efefef}
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <input type="text" name="txtSearch" class="searchTerm" id="">
    <br>
    <br>
    <div id="output"></div>

    <script>
        const searchKey = document.querySelector('.searchTerm');

        function createTable() {
            createHeader();
            createBody(tbl);
            document.querySelector('body').appendChild(tbl);
        }

        function createHeader() {
            // table element
            const tbl = document.createElement('div');
            tbl.classList.add('table');

            // header element
            const headers = ['ISBN', 'Title', 'Author', 'Price'];

            headers.forEach(heading => {
                const header = document.createElement('div');
                header.textContent = heading;
                header.classList.add('header');
                tbl.appendChild(header);
            });
        }

        function createBody(tbl) {
            const body = [1, 2, 3, 4];

            body.forEach(data => {
                const cell = document.createElement('div');
                cell.textContent = data;
                cell.classList.add('cell');
                tbl.appendChild(cell);
            });

        }

        searchKey.addEventListener('keypress', function(){
            fetch('http://localhost/php-mysql/fetch/data.php')
                .then((res) => {
                    return res.json();
                })
                .then((data) => {
                    console.log(data);
                });
        });
    </script>
</body>
</html>