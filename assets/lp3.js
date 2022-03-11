function fetch_select(val) {
    $.ajax({
        type: 'post',
        url: 'http://127.0.0.1:80/lp3-siketat/get/get.prodi.php',
        data: {
            get_option: val
        },
        success: function(response) {
            document.getElementById("prodi").innerHTML = response;
        }
    });
}

function fetch_prodi(val) {
    $.ajax({
        type: 'post',
        url: 'http://127.0.0.1:80/lp3-siketat/get/get.prodi.php',
        data: {
            get_fak: val
        },
        success: function(response) {
            document.getElementById("prod").innerHTML = response;
        }
    });
}

function checkin(val) {
    var z = document.getElementById('modul');
    if (val == '1') {
        z.removeAttribute('disabled');
    } else {
        z.setAttribute('disabled', 'true');
        z.value = '';
    }
}

function backFunc() {
    window.open('http://127.0.0.1:80/lp3-siketat/', '_self');
}

function editFunc(a) {
    window.open('http://127.0.0.1:80/lp3-siketat/edit/?act=dokumen&id=' + a, '_self');
}

function signFunc() {
    var i = document.getElementById('signature-a');
    var j = document.getElementById('signature-b');
    var k = document.getElementById('tabel-c');
    var m = document.getElementById('tabel-a');
    if (i.style.display == '') {
        var l = k.offsetHeight;
        var n = m.offsetHeight;
        i.style.top = 'calc(527px + ' + n + 'px)';
        j.style.top = 'calc(200mm + ' + l + 'px + 356px)';
        i.style.display = 'block';
        j.style.display = 'block';
    } else {
        i.style.display = '';
        j.style.display = '';
    }
}

function printFunc() {
    window.print();
}

function sortTable(id, n) {
    console.log("tabel = " + id + " dan kolom penyortir = " + n);
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById(id);
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
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
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
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
}

// pagination
$(document).ready(function() {
    $('#tabel-member').after('<div id="nav" class="centereddd"></div>');
    var rowsShown = 11;
    var rowsTotal = $('#tabel-member tbody tr').length;
    var numPages = rowsTotal / rowsShown;
    for (i = 0; i < numPages; i++) {
        var pageNum = i + 1;
        $('#nav').append('<a class="btn btn-outline-success" href="#" rel="' + i + '">' + pageNum + '</a> ');
    }
    $('#tabel-member tbody tr').hide();
    $('#tabel-member tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function() {

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#tabel-member tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
        css('display', 'table-row').animate({ opacity: 1 }, 300);
        $('#tabel-member tbody tr').css('opacity', '0.0').slice(0, 1).
        css('display', 'table-row').animate({ opacity: 1 }, 300);
    });
});

// pagination
$(document).ready(function() {
    $('#tabel-dosen').after('<div id="nav-dos" class="centereddd"></div>');
    var rowsShown = 11;
    var rowsTotal = $('#tabel-dosen tbody tr').length;
    var numPages = rowsTotal / rowsShown;
    for (i = 0; i < numPages; i++) {
        var pageNum = i + 1;
        $('#nav-dos').append('<a class="btn btn-outline-success" href="#" rel="' + i + '">' + pageNum + '</a> ');
    }
    $('#tabel-dosen tbody tr').hide();
    $('#tabel-dosen tbody tr').slice(0, rowsShown).show();
    $('#nav-dos a:first').addClass('active');
    $('#nav-dos a').bind('click', function() {

        $('#nav-dos a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#tabel-dosen tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
        css('display', 'table-row').animate({ opacity: 1 }, 300);
        $('#tabel-dosen tbody tr').css('opacity', '0.0').slice(0, 1).
        css('display', 'table-row').animate({ opacity: 1 }, 300);
    });
});

function filt(id, x, y) {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(id);
    filter = input.value.toUpperCase();
    table = document.getElementById("tabel-member");
    tr = table.getElementsByTagName("tr");
    console.log(id + " = " + filter);

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[x];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (y == 0) {
        sechide('filtersec', 'filter-bt');
    }

}

function dosen(id) {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(id);
    filter = input.value.toUpperCase();
    table = document.getElementById("tabel-dosen");
    tr = table.getElementsByTagName("tr");
    console.log(id + " = " + filter);

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function secshow(a, b) {
    console.log("id section a = " + a);
    console.log("id section b = " + b);
    var c = document.getElementById(a);
    var d = document.getElementById(b);
    c.classList.remove('hide-section');
    c.classList.add('show-section');
    d.setAttribute('onclick', "sechide('" + a + "', '" + b + "')");
}

function sechide(a, b) {
    console.log("id section a = " + a);
    console.log("id section b = " + b);
    var c = document.getElementById(a);
    var d = document.getElementById(b);
    c.classList.remove('show-section');
    c.classList.add('hide-section');
    d.setAttribute('onclick', "secshow('" + a + "', '" + b + "')");
}