const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

// 3. Converting HTML table to PDF

const pdf_btn = document.querySelector('#toPDF');
const guide_table = document.querySelector('#guide_table');


const toPDF = function (guide_table) {
    const html_code = `
    <!DOCTYPE html>
    <link rel="stylesheet" type="text/css" href="css/touriste.css">
    <main class="table" id="guide_table">
    ${guide_table.innerHTML}</main>`;

    const new_window = window.open();
     new_window.document.write(html_code);

    setTimeout(() => {
        new_window.print();
        new_window.close();
    }, 400);
}

pdf_btn.onclick = () => {
    toPDF(guide_table);
}








// Fonction pour exporter le tableau en Excel
const toExcel = function (table) {
    console.log("Exporting...");

    // Récupérer les entêtes du tableau (les <th>)
    const headers = Array.from(table.querySelectorAll('th')).map(th => th.textContent.trim());

    // Créer une copie du tableau sans les boutons (enlever les cellules de la dernière colonne)
    const rows = Array.from(table.querySelectorAll('tr'));

    // Créer un tableau pour stocker les données sans les boutons
    const rowsWithoutButtons = rows.map(row => {
        // Créer une copie de la ligne sans la dernière cellule (celle des boutons)
        const cells = Array.from(row.querySelectorAll('td'));
        const cellsWithoutButtons = cells.slice(0, cells.length - 1); // Enlever la dernière cellule (boutons)
        return cellsWithoutButtons;
    });

    // Créer un tableau HTML à partir des lignes sans boutons
    const tempTable = document.createElement('table');

    // Ajouter les entêtes au tableau temporaire
    const headerRow = tempTable.insertRow();
    headers.forEach(header => {
        const headerCell = headerRow.insertCell();
        headerCell.textContent = header;
    });

    // Ajouter les lignes de données au tableau temporaire
    rowsWithoutButtons.forEach(rowCells => {
        const row = tempTable.insertRow();
        rowCells.forEach(cell => {
            const newCell = row.insertCell();
            newCell.textContent = cell.textContent;
        });
    });

    // Convertir le tableau sans boutons en un livre Excel
    const wb = XLSX.utils.table_to_book(tempTable, { sheet: "Guide" });
    console.log("Livre Excel créé : ", wb);

    // Convertir le livre en binaire pour téléchargement
    const wbout = XLSX.write(wb, { bookType: "xlsx", type: "binary" });

    // Créer un fichier binaire et le télécharger
    const buf = new ArrayBuffer(wbout.length);
    const view = new Uint8Array(buf);
    for (let i = 0; i < wbout.length; i++) {
        view[i] = wbout.charCodeAt(i) & 0xFF;
    }

    // Créer un lien de téléchargement pour le fichier Excel
    const blob = new Blob([buf], { type: "application/octet-stream" });
    const a = document.createElement("a");
    a.href = URL.createObjectURL(blob);
    a.download = "guides_table.xlsx"; // Nom du fichier Excel
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
};

// Attacher l'événement au bouton
const excel_btn = document.querySelector('#toEXCEL');
excel_btn.onclick = () => {
    const table = document.querySelector('#guide_table'); 
    // Sélectionner le tableau avec l'ID "guide_table"
    if (table) {
        toExcel(table); // Convertir et télécharger en Excel
    } else {
        alert("Tableau introuvable !");
    }
};
