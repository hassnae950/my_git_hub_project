<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert | Export html Table to CSV & EXCEL File</title>
    <link rel="stylesheet" type="text/css" href="css/touriste.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delete" />
   
</head>

<body>
    <main class="table" id="Tourist_table">
        <section class="table__header">
            <h1>Tourist's Orders</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                    <th> Id  <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tourist  <span class="icon-arrow">&UpArrow;</span></th>
                        <th> email  <span class="icon-arrow">&UpArrow;</span></th>
                        <th>  Gender<span class="icon-arrow">&UpArrow;</span> </th>
                        <th> Phone <span class="icon-arrow">&UpArrow;</span></th>
                        <th> City <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Pays <span class="icon-arrow">&UpArrow;</span></th>
                       <th> </th>
                        <th> </th>
                        <th> </th>

                   
                    </tr>
                </thead>
                <tbody >
                   
             
                <?php if (!empty($touristes)): ?>
    <?php foreach ($touristes as $touriste): ?>
        <tr>
            <td><?= esc($touriste['touriste_id']) ?></td>
            <td><?= esc($touriste['nom'] . ' ' . $touriste['prenom']) ?></td>
            <td><?= esc($touriste['email']) ?></td>
            <td><?= esc($touriste['sexe']) ?></td>
            <td><?= esc($touriste['telephone']) ?></td>
            <td><?= esc($touriste['ville']) ?></td>
            <td><?= esc($touriste['pays']) ?></td>
          <td class="ddd">
                           
                        
                            <button class="status Edit">
                            <i class="fa-regular fa-pen-to-square"> </i> &nbsp; Edit
                          </button>
                          </button>
<button class="status Delete" onclick="deleteTouriste(<?= esc($touriste['touriste_id']) ?>)">
    <span class="material-symbols-outlined">delete</span> Delete
</button>
                        </td>
                     
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="11">Aucun touriste trouvé.</td></tr>
<?php endif; ?>

      </tbody>
            </table>

        </section>
     
        <a  href="\dashboard" class=" btn"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;log out</a>
    </main>
    <script>
        
function deleteTouriste(id) {
    if (confirm("Are you sure you want to delete this tourist?")) {
        window.location.href = `/touriste/delete/${id}`;
    }
}


</script>
    <script src="js/touriste.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

</body>

</html>
