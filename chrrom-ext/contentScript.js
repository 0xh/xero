var url = new URL(window.location.href);
var id = url.searchParams.get("InvoiceID");
var newURL = "http://127.0.0.1:8000/invoice/" + id;

var button = `<a href="${newURL}" target="_blank">Arabic Invoice</a>`;
var e = document.createElement('li');
e.innerHTML = button;

var elementx = document.getElementById("ext-gen26");
elementx.querySelector("ul").appendChild(e);


