var siteurl = "http://127.0.0.1:80/lp3/";

$(document).ready(function() {
    $('#tabel-dokumen').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
        },
        order: [[0, 'desc']],
        dom: 'Bfrtip',
        paging: true,
        "pageLength": 10,
        buttons: [
            'excelHtml5',
            'pdfHtml5'
        ]
    });
});

$(document).ready(function(){
    $('.pilihan').select2({
    });
});

$(document).on('select2:open', () => {
    document.querySelector('.select2-search__field').focus();
  });

$(document).ready(function() {
    $('#tabel-dosen').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
        },
        order: [[3, 'desc']],
        dom: 'Bfrtip',
        paging: true,
        "pageLength": 10,
        buttons: [
            'excelHtml5',
            'pdfHtml5'
        ]
    });
});

function fetch_select(val, id) {
    $.ajax({
        type: 'post',
        url: siteurl + 'get/get.prodi.php',
        data: {
            get_option: val
        },
        success: function(response) {
            document.getElementById(id).innerHTML = response;
        }
    });
}

function checkin(val) {
    var z = document.getElementById('modul');
    if (val == '2' || val == '5' || val == '7' || val == '10') {
        z.removeAttribute('disabled');
    } else {
        z.setAttribute('disabled', 'true');
        z.value = '';
    }
}

function backFunc() {
    window.open(siteurl + '', '_self');
}

function editFunc(a) {
    window.open(siteurl + 'edit/?act=dokumen&id=' + a, '_self');
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
        j.style.top = 'calc(200mm + ' + l + 'px + 330px)';
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

function apx(start) {
    $('#tabel-dokumen').after('<div id="nav" class="centereddd"></div>');
    var rowsShown = 10;
    var rowsTotal = $('#tabel-dokumen tbody tr').length;
    var numPages = rowsTotal / rowsShown;
    for (i = start; i < numPages; i++) {
        if (i == start) {
            var pageNum = i + 1;
            $('#nav').append('<a class="btn btn-outline-success prev" href="#main-table">Previous</a> ');
            $('#nav').append('<a class="btn btn-outline-success" href="#main-table" rel="' + i + '">' + pageNum + '</a> ');
        } else if (i == (Number(start) + 9)) {
            var pageNum = i + 1;
            $('#nav').append('<a class="btn btn-outline-success" href="#main-table" rel="' + i + '">' + pageNum + '</a> ');
            $('#nav').append('<a class="btn btn-outline-success next" href="#main-table">Next</a> ');
            break;
        } else {
            var pageNum = i + 1;
            $('#nav').append('<a class="btn btn-outline-success" href="#main-table" rel="' + i + '">' + pageNum + '</a> ');
        }
    }
}

function filt(id, x, y) {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(id);
    filter = input.value.toUpperCase();
    table = document.getElementById("tabel-dokumen");
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

function delet(id) {
    if (confirm("Hapus data?") == true) {
        console.log('Data ' + id + ' dihapus.');
        window.open(siteurl + 'list/delete.php?id=' + id, '_SELF');
    } else {

    }
}

function del(id) {
    if (confirm("Hapus data?") == true) {
        console.log('Data ' + id + ' dihapus.');
        window.open(siteurl + 'fakultas/delete.php?id=' + id, '_SELF');
    } else {

    }
}

function dele(id) {
    if (confirm("Hapus data?") == true) {
        console.log('Data ' + id + ' dihapus.');
        window.open(siteurl + 'fakultas/detail/delete.php?id=' + id, '_SELF');
    } else {

    }
}

function dashboard(ta, text) {
    console.log('ta = ' + ta + ' , text = ' + text);
    window.open(siteurl + 'dashboard/?ta=' + ta + '&t=' + text, '_self');
}

function fakultas(ta, text) {
    window.open(siteurl + 'fakultas/', '_self');
}

function nav(to) {
    if (to == 'fakultas') {
        window.open(siteurl + 'fakultas', '_SELF');
    } else {
        window.open(siteurl + '?to=' + to, '_SELF');
    }
}

function addPenyusun(n) {
    if (n == 10) {

    } else {
        try {
            var a = document.getElementById('penyusun' + n);
            var b = a.parentElement;
            var c = document.getElementById('tambah-penyusun');
            b.classList.remove('hiden');
            c.setAttribute('onclick', 'addPenyusun(' + (n + 1) + ')');
        } catch (err) {

        }
    }
}

function edit(id, fak, email) {
    var idf = document.getElementById('id-fakultas');
    var nama = document.getElementById('edit-nama-fakultas');
    var mail = document.getElementById('edit-email-fakultas');

    idf.setAttribute('value', id);
    nama.setAttribute('value', fak);
    mail.setAttribute('value', email);
}

function pedit(id, prodi, email, primer) {
    var idp = document.getElementById('id-prodi');
    var nama = document.getElementById('edit-nama-prodi');
    var mail = document.getElementById('edit-email-prodi');
    var prim = document.getElementById('edit-primer');

    idp.setAttribute('value', id);
    nama.setAttribute('value', prodi);
    mail.setAttribute('value', email);
    if (primer == 1) {
        prim.setAttribute('checked', 'true');
    } else {
        prim.removeAttribute('checked');
    }
}

function prodi(id, ta) {
    window.open(siteurl + 'prodi/?id=' + id + '&ta=' + ta, '_SELF');
}

function master(ta) {
    window.open(siteurl + 'master/?ta=' + ta, '_SELF');
}

function getYear(year, id) {
    for (i = new Date().getFullYear(); i > 1999; i--) {
        if (year == i) {
            $('#yearpicker').append($('<option />').val(i).attr("selected", "selected").html(i));
        } else {
            $('#yearpicker').append($('<option />').val(i).html(i));
        }
    }
}