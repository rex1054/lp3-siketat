var siteurl;
var domain = window.location.hostname;
if(domain == '127.0.0.1'){
    siteurl = 'http://'+domain+'/siketat/';
} else {
    siteurl = 'https://'+domain+'/';
}

function retable(){
    setTimeout(function(){
        $("#tabel-dokumen").DataTable()
        .responsive.recalc();
        $("#tabel-dosen").DataTable()
        .responsive.recalc();
    }, 1000);
}

$(document).ready(function() {
    var table = $("#tabel-dokumen").DataTable({
        "dom": 'Bfrtip',
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
        order: [[0, 'desc']],
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "buttons": ["excel", "pdf", "print"],
        "oLanguage": { "sUrl": "//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json" }
    });
    
    $(function(){
        var select = $('#sta')
        .on( 'change', function () {
            table.column( 1 )
            .search( this.value )
            .draw();
        } );	
    });
    $(function(){
        var select = $('#fak')
        .on( 'change', function () {
            table.column( 4 )
            .search( this.value )
            .draw();
        } );	
    });
    $(function(){
        var select = $('#prod')
        .on( 'change', function () {
            table.column( 5 )
            .search( this.value )
            .draw();
        } );	
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
    $("#tabel-dosen").DataTable({
        "dom": 'Bfrtip',
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
        order: [[3, 'desc']],
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "buttons": ["excel", "pdf", "print"],
        "oLanguage": { "sUrl": "//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json" }
    });
});

function fetch_slc(val, id) {
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

function fetch_select(val, id) {
    $.ajax({
        type: 'post',
        url: siteurl + 'get/get.filter.prodi.php',
        data: {
            get_option: val
        },
        success: function(response) {
            document.getElementById(id).innerHTML = response;
        }
    });
}

function dashPrint(ta){
    window.open(siteurl+'landing/dashboard-print.php?ta='+ta, '_blank');
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
    window.open(siteurl, '_self');
}

function editFunc(a) {
    window.open(siteurl + 'admin/edit/?act=dokumen&id=' + a, '_self');
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

function logout(){
    if (confirm("Logout?") == true) {
        window.open(siteurl+'admin/logout/', '_self');
    } else {
        
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
        window.open(siteurl + 'admin/list/delete.php?id=' + id, '_SELF');
    } else {
        
    }
}

function del(id) {
    if (confirm("Hapus data?") == true) {
        console.log('Data ' + id + ' dihapus.');
        window.open(siteurl + 'admin/fakultas/delete.php?id=' + id, '_SELF');
    } else {
        
    }
}

function dele(id, fak) {
    if (confirm("Hapus data?") == true) {
        console.log('Data ' + id + ' dihapus.');
        window.open(siteurl + 'admin/fakultas/detail/delete.php?id=' + id + '&fak=' + fak, '_SELF');
    } else {
        
    }
}

function admin(){
    window.open(siteurl + 'admin/', '_self');
}

function dashboard(who, ta, text) {
    if(who == 'admin'){
        window.open(siteurl + 'admin/?ta=' + ta + '&t=' + text, '_self');
    } else {
        window.open(siteurl + 'landing/?ta=' + ta + '&t=' + text, '_self');
    }
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
    window.open(siteurl + 'admin/prodi/?id=' + id + '&ta=' + ta, '_SELF');
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