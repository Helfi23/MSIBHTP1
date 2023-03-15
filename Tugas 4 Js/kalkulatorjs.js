function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.number1.value);
    var a2 = parseFloat(frm.number2.value);
    if(isNaN(a1) && isNaN(a2)) {
        alert("Kolom Angka Tidak Boleh Kosong");
    }else{
        var total = a1+a2;
        frm.hasil.value = total;
    }
}

function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.number1.value);
    var a2 = parseFloat(frm.number2.value);
    if(isNaN(a1) && isNaN(a2)) {
        alert("Kolom Angka Tidak Boleh Kosong");
    }else{
        var total = a1-a2;
        frm.hasil.value = total;
    } 
}
function bagi(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.number1.value);
    var a2 = parseFloat(frm.number2.value);
    if(isNaN(a1) && isNaN(a2)) {
        alert("Kolom Angka Tidak Boleh Kosong");
    }else{
        var total = a1/a2;
        frm.hasil.value = total;
    }
}
function kali(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.number1.value);
    var a2 = parseFloat(frm.number2.value);
    if(isNaN(a1) && isNaN(a2)) {
        alert("Kolom Angka Tidak Boleh Kosong");
    }else{
        var total = a1*a2;
        frm.hasil.value = total;
    }
}
function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.number1.value);
    var a2 = parseFloat(frm.number2.value);
    if(isNaN(a1) && isNaN(a2)) {
        alert("Kolom Angka Tidak Boleh Kosong");
    }else{
        var total = a1**a2;
        frm.hasil.value = total;
    }
}
let display = document.getElementById("clear");

function clearCalculator() {
  display.value = "";
}

/*tugas ke 4 Javascript
1. Lengkapilah form dari latihan 15js menggunakan CSS dan table 
2. Perbagus tampilannya 
3. Lengkapi perhitungannya dengan:
- pembagian
- perkalian
- pangkat
4. jika form input dari angka 1 dan 2 kosong dan user klik button, 
maka tampilkan "Maaf angka belum terisi"


*/