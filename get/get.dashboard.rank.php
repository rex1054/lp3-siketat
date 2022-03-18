<?php
require_once('../master.php');
$sql = "SELECT * FROM dosen";
$query = $con->query($sql);
if($query->num_rows == 0) {
    echo "Tidak ada data untuk ditampilkan.";
}
else {
    ?>
    <table id="tabel-rank" class="table table-striped table-hover" cellpadding="5" cellspacing="0">
    <thead>
    <th class="table-sort text-center">No.</th>
    <th class="table-sort">Nama</th>
    <th class="table-sort text-center">NIDN / NIP</th>
    <th class="table-sort text-center">Jumlah Dokumen</th>
    </thead>
    <tbody>
    <?php if(mysqli_num_rows($query)>0) { ?>
        <?php
        while ($data = mysqli_fetch_array($query)) {
            $sql2 = "SELECT COUNT(id) FROM penyusun WHERE id_dosen = ".$data['id'];
            $query2 = $con->query($sql2);
            $dokumen = $query2->fetch_assoc();
            ?>
            <tr>
            <td class="ranked text-center"></td>
            <td><?php echo $data["nama"];?></td>
            <td class="text-center"><?php echo $data["npk"];?></td>
            <td class="text-center"><?php echo $dokumen["COUNT(id)"];?></td>
            </tr>
            <?php }
            ?>
            <script>
            var id = 'tabel-rank';
            var n = 3;
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById(id);
            switching = true;
            //Set the sorting direction to ascending:
            dir = "desc";
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                    switching = false;
                    rows = table.rows;
                    /*Loop through all table rows (except the
                    first, which contains table headers):*/
                    for (i = 1; i < (rows.length - 1); i++) {
                        //start by saying there should be no switching:
                            shouldSwitch = false;
                            /*Get the two elements you want to compare,
                            one from current row and one from the next:*/
                            x = rows[i].getElementsByTagName("TD")[n];
                            y = rows[i + 1].getElementsByTagName("TD")[n];
                            /*check if the two rows should switch place,
                            based on the direction, asc or desc:*/
                            if (n == 0) {
                                if (dir == "asc") {
                                    if (Number(x.innerHTML) > Number(y.innerHTML)) {
                                        shouldSwitch = true;
                                        break;
                                    }
                                } else if (dir == "desc") {
                                    if (Number(x.innerHTML) < Number(y.innerHTML)) {
                                        shouldSwitch = true;
                                        break;
                                    }
                                }
                            } else {
                                if (dir == "asc") {
                                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                        //if so, mark as a switch and break the loop:
                                            shouldSwitch = true;
                                            break;
                                        }
                                    } else if (dir == "desc") {
                                        if (id == 'dashboard-table') {
                                            if (parseInt(x.innerHTML) < parseInt(y.innerHTML)) {
                                                //if so, mark as a switch and break the loop:
                                                    shouldSwitch = true;
                                                    break;
                                                }
                                            } else {
                                                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                                    //if so, mark as a switch and break the loop:
                                                        shouldSwitch = true;
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (shouldSwitch) {
                                        /*If a switch has been marked, make the switch
                                        and mark that a switch has been done:*/
                                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                        switching = true;
                                        //Each time a switch is done, increase this count by 1:
                                            switchcount++;
                                        } else {
                                            /*If no switching has been done AND the direction is "asc",
                                            set the direction to "desc" and run the while loop again.*/
                                            if (switchcount == 0 && dir == "asc") {
                                                dir = "desc";
                                                switching = true;
                                            }
                                        }
                                        
                                    }
                                    
                                    rows = table.rows;
                                    
                                    for(j = 0; j < rows.length; j++){
                                        if(j>5) {
                                            console.log("ROW = "+i+" is hidden");
                                            rows[j].style.display = "none";
                                        }
                                    }
                                    
                                    </script>
                                    <?php
                                }
                                ?>
                                </tbody>
                                </table>
                                <?php
                            }
                            ?>