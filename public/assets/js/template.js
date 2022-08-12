// $(document).ready(function () {


// });

// var a;
// titleText = "";
// hardCodedtitle = "";
// var menuCount = document.getElementsByClassName("userSelectedMenu");

// $(menuCount).each(function (index, item) {
//     title = item.title;

//     if (title == 'dashboard') {
//         hardCodedTitle = "Dashboard";
//         $(item).attr("title", hardCodedTitle);
//         $(item).attr("data-hardcoded", "true");
//     } else if (title == "searchIbk") {
//         hardCodedTitle = "Pencarian IBK";
//         $(item).attr("title", hardCodedTitle);
//         $(item).attr("data-hardcoded", "true");
//     } else if (title == "block") {
//         hardCodedTitle = "Pengajuan Blokir";
//         $(item).attr("title", hardCodedTitle);
//         $(item).attr("data-hardcoded", "true");
//     } else if (title == "unblock") {
//         hardCodedTitle = "Pengajuan Cabut Blokir";
//         $(item).attr("title", hardCodedTitle);
//         $(item).attr("data-hardcoded", "true");
//     } else if (title == "inputBlock") {
//         hardCodedTitle = "Input Pemblokiran";
//         $(item).attr("title", hardCodedTitle);
//         $(item).attr("data-hardcoded", "true");
//     } else if (title == "inputUnblock") {
//         hardCodedTitle = "Input Cabut Blokir";
//         $(item).attr("title", hardCodedTitle);
//         $(item).attr("data-hardcoded", "true");
//     }
// });

// function populateTitle(e) {
//     var title = document.getElementById('titlePage');
//     // var text = document.createTextNode(e.currentTarget.getAttribute("title"));
//     if (e.currentTarget.hasAttribute("data-hardcoded")) {
//         // title.appendChild(text);
//         title.innerHTML += e.currentTarget.getAttribute("title");
//         // $("#titlePage").val(e.currentTarget.getAttribute("title"));
//     } else {
//         $("#titlePage").val("");
//     }
//     console.log(title);
// }