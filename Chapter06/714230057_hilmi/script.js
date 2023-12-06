function myOrder()  {
    alert('mari kita belajar')
    document.getElementById('caption').innerHTML =
    "buruan keburu habis," ; +
    "" +
    "stok tinggal sedikit lagi," ;

    document.getElementById("image").src = "download/buku.png" ;
}

function sedikit() {
    var a, b, c;
    a = 6;
    b = 3;
    c = a + b;
    alert(
        "buruan beli buku keburu habis sisa " + 
        c + 
        " lagi"
    );
}

function Aritmatika() {
    let a = 3;
    let b = 2;

    let tambah = a + b;

    alert("tinggal " + tambah + " buku lagi, buruan beli");

}