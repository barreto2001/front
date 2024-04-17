/* Expandir modal y obtner información del producto */

function modalEdit(id) {
    let url = document.getElementById("url").value;
    alert(url+"/"+id);
    $.ajax({
        method: "GET",
        url: url+"/"+id
    }).done(function (data) {
        console.log(data);
    }).fail(function () {
        alert("Algo salió mal");
    })
}
