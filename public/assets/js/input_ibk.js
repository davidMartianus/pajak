var saveData;
var modal = $('#modalData');
var tableData = $('#inputIbkTable');
var formData = $('#formData');
var modalTitle = $('#modalTitle');
var btnSave = $('#btnSave');
var count = 1;

$(document).ready(function () {
    // tableData.DataTable({
    //     "processing": true,
    //     "serverSide": true,
    //     "order": [],
    //     "ajax": {
    //         "url": "<?= base_url('InputIbk/getData'); ?>",
    //         "type": "POST"
    //     },
    //     columnDefs: [{
    //         "target": [-1],
    //         "orderable": false
    //     }]
    // });

    $('#inputIbkTable').DataTable();

    getReffCode();

    $(function () {
        $('input[name="daterange"]').daterangepicker();
    });

});

function add(btnType) {
    if (btnType == 'tambah') {
        formData[0].reset(); //clear form field every time Tambah Data button is pressed
    }
    console.log(btnType);
    modal.modal('show'); //display modal
    modalTitle.text('Tambah Data'); //modal title

    saveData = 'tambah'; //store value to variable saveData for further use

    btnSave.attr('disabled', false); //enable button
    btnSave.text('Simpan'); //text on button
}

function inputToTbl() {
    var pajakNo = $('input[name="pajakNo"').val();
    var pajakDate = $('input[name="pajakDate"').val();
    var kantorPajak = $('input[name="kantorPajak"').val();
    var nasabah = $('input[name="nasabah"').val();
    var outlet = $('input[name="outlet"').val();
    var nik = $('input[name="nik"').val();
    var npwp = $('input[name="npwp"').val();
    var tempatLahir = $('input[name="tempatLahir"').val();
    var tanggalLahir = $('input[name="tanggalLahir"').val();
    var keterangan = $('input[name="keterangan"').val();
    var addKeterangan = $('input[name="addKeterangan"').val();

    tableData.DataTable().row.add([pajakNo, pajakDate, kantorPajak, nasabah, outlet, nik, npwp, tempatLahir, tanggalLahir, keterangan, addKeterangan,
        '<a href="#" class="btn btn-warning btn-sm" onclick="add(\'edit\') ">Edit</a>' +
        '<a href="#" class="btn btn-danger btn-sm" onclick="deleteRow(event);">Delete</a>' +
        '<a href="#" class="btn btn-success btn-sm">Compare</a>']).draw(false);

    modal.modal('hide'); //hide modal
}

function deleteRow(row) {
    if (confirm("Are you sure you want to delete entire row?") == true) {
        var tr = $(row.target).closest('tr');
        $(tableData).DataTable().row($(tr)).remove().draw(false);
    }
}

function saveIbk() {
    // $('#saveIbk').click(function () {
    //     $.ajax({
    //         url: 'helloworld/secondmoney',
    //         method: 'POST',//not type
    //         data: { myamount: $("#amount").val() }//no need for submit variable (although you can use it) since this will be submitted on click; no quotes over variables
    //     });
    //       .done(function (result)) {
    //         //do your stuff on response
    //     };
    // });

    // $('#saveIbk').click(function () {
    //     $('#formsIbk').attr('action', '/InputIbk/save');
    // });
}

// function to ensure phone number only can be filled with number
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode

    // charcode 48-57 is for 0-9
    if (charCode >= 48 && charCode <= 57) {
        return true;
    }
    return false;
}

function dateHandler(e) {
    var checkDate = document.getElementById('tglPeriksa').value;
    var disposDate = document.getElementById('tglSuratDispos').value;

    if (checkDate && disposDate) {
        var diffInTime = new Date(checkDate).getTime() - new Date(disposDate).getTime();
        var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24 * 31));
        // var diffInDays = diffInDays / 31;

        document.getElementById("sla").value = diffInDays;
    }
}

function forceKeyPressUppercase(e) {
    var charInput = e.keyCode;
    if ((charInput >= 97) && (charInput <= 122)) { // lowercase
        if (!e.ctrlKey && !e.metaKey && !e.altKey) { // no modifier key
            var newChar = charInput - 32;
            var start = e.target.selectionStart;
            var end = e.target.selectionEnd;
            e.target.value = e.target.value.substring(0, start) + String.fromCharCode(newChar) + e.target.value.substring(end);
            e.target.setSelectionRange(start + 1, start + 1);
            e.preventDefault();
        }
    }
}

document.getElementById("nomorSuratJwb").addEventListener("keypress", forceKeyPressUppercase, false);
document.getElementById("noSuratDjp").addEventListener("keypress", forceKeyPressUppercase, false);
document.getElementById("noSuratKpp").addEventListener("keypress", forceKeyPressUppercase, false);