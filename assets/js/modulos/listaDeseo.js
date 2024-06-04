const tablelista = document.querySelector('tableListaDeseo tbody');
document.addEventListener('DOMContentLoaded', function () {
    getListaDeseo();
})
function getListaDeseo() {
    const url = base_url + 'principal/listaDeseo';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaDeseo));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
}