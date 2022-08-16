// var saveData;
// var modal = $('#modalData');
// var tableData = $('#inputIbkTable');
// var formData = $('#formData');
// var modalTitle = $('#modalTitle');
// var btnSave = $('#btnSave');
// var count = 1;

// function dataKantorPajak() {
//     $('#kantorPjk').select2({
//         minimumInputLength: 3,
//         allowClear: true,
//         placeholder: 'Pilih Kantor Pajak',
//         ajax: {
//             dataType: 'json',
//             url: "<?= site_url('InputIbk/getKantorPajak')?>",
//             delay: 500,
//             data: function (params) {
//                 return {
//                     search: params.term
//                 }
//             },
//             processResults: function (data, page) {
//                 return {
//                     results: data
//                 }
//             }
//         }
//     });
// }

// $(document).ready(function () {
//     // tableData.DataTable({
//     //     "processing": true,
//     //     "serverSide": true,
//     //     "order": [],
//     //     "ajax": {
//     //         "url": "<?= base_url('InputIbk/getData'); ?>",
//     //         "type": "POST"
//     //     },
//     //     columnDefs: [{
//     //         "target": [-1],
//     //         "orderable": false
//     //     }]
//     // });

//     $('#inputIbkTable').DataTable();

//     getReffCode();

//     $(function () {
//         $('input[name="daterange"]').daterangepicker();
//     });

//     // dataKantorPajak();

// });

// function add(btnType) {
//     if (btnType == 'tambah') {
//         formData[0].reset(); //clear form field every time Tambah Data button is pressed
//     }
//     console.log(btnType);
//     modal.modal('show'); //display modal
//     modalTitle.text('Tambah Data'); //modal title

//     saveData = 'tambah'; //store value to variable saveData for further use

//     btnSave.attr('disabled', false); //enable button
//     btnSave.text('Simpan'); //text on button
// }

// function inputToTbl() {
//     var pajakNo = $('input[name="pajakNo"').val();
//     var pajakDate = $('input[name="pajakDate"').val();
//     var kantorPajak = $('select[name="kantorPajak"').val();
//     var nasabah = $('input[name="nasabah"').val();
//     var outlet = $('select[name="outlet"').val();
//     var nik = $('input[name="nik"').val();
//     var npwp = $('input[name="npwp"').val();
//     var tempatLahir = $('input[name="tempatLahir"').val();
//     var tanggalLahir = $('input[name="tanggalLahir"').val();
//     var keterangan = $('input[name="keterangan"').val();
//     var addKeterangan = $('input[name="addKeterangan"').val();

//     tableData.DataTable().row.add([pajakNo, pajakDate, kantorPajak, nasabah, outlet, nik, npwp, tempatLahir, tanggalLahir, keterangan, addKeterangan,
//         '<button type="button" class="btn btn-warning btn-sm" onclick="add(\'edit\') ">Edit</button>' +
//         '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(event);">Delete</button>' +
//         '<button type="button" class="btn btn-success btn-sm">Compare</button>']).draw(false);

//     modal.modal('hide'); //hide modal
// }

// function deleteRow(row) {
//     deleteQuestion(row); //call function pop up delete confirmation
//     // if (confirm("Are you sure you want to delete entire row?") == true) {
//     //     var tr = $(row.target).closest('tr');
//     //     $(tableData).DataTable().row($(tr)).remove().draw(false);
//     // }
// }

// // pop up delete confirmation using Sweet Alert
// function deleteQuestion(row) {
//     Swal.fire({
//         title: 'Anda yakin akan menghapus ?',
//         text: "Setelah terhapus, data tidak dapat dikembalikan!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Ya, hapus data!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             // if button 'Ya, hapus data!' is pressed then call function deleteData()
//             var tr = $(row.target).closest('tr');
//             $(tableData).DataTable().row($(tr)).remove().draw(false);
//         }
//     })
// }

// // function to ensure phone number only can be filled with number
// function isNumberKey(evt) {
//     var charCode = (evt.which) ? evt.which : event.keyCode

//     // charcode 48-57 is for 0-9
//     if (charCode >= 48 && charCode <= 57) {
//         return true;
//     }
//     return false;
// }

// function dateHandler(e) {
//     var checkDate = document.getElementById('tglPeriksa').value;
//     var disposDate = document.getElementById('tglSuratDispos').value;

//     if (checkDate && disposDate) {
//         var diffInTime = new Date(checkDate).getTime() - new Date(disposDate).getTime();
//         var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24 * 31));
//         // var diffInDays = diffInDays / 31;

//         document.getElementById("sla").value = diffInDays;
//     }
// }

// function forceKeyPressUppercase(e) {
//     var charInput = e.keyCode;
//     if ((charInput >= 97) && (charInput <= 122)) { // lowercase
//         if (!e.ctrlKey && !e.metaKey && !e.altKey) { // no modifier key
//             var newChar = charInput - 32;
//             var start = e.target.selectionStart;
//             var end = e.target.selectionEnd;
//             e.target.value = e.target.value.substring(0, start) + String.fromCharCode(newChar) + e.target.value.substring(end);
//             e.target.setSelectionRange(start + 1, start + 1);
//             e.preventDefault();
//         }
//     }
// }

// document.getElementById("nomorSuratJwb").addEventListener("keypress", forceKeyPressUppercase, false);
// document.getElementById("noSuratDjp").addEventListener("keypress", forceKeyPressUppercase, false);
// document.getElementById("noSuratKpp").addEventListener("keypress", forceKeyPressUppercase, false);
// document.getElementById("pajakNo").addEventListener("keypress", forceKeyPressUppercase, false);