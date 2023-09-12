document.getElementById('show-pos-neg-btn').addEventListener('click', function () {
    let myDiv = document.getElementById('show-pos-neg-div');
    let bsCollapse = new bootstrap.Collapse(myDiv, {
        toggle: true
    });
});

function getImage(code, id) {

    var xhttp = new XMLHttpRequest();
    const imgCont = document.getElementById('imageContainer');
    imgCont.innerHTML = ""
    xhttp.open("GET", "/cn-images/" + code, true);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 1) {
            // document.querySelector('.banter-loader').classList = 'd-block';
        }
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            data.forEach(element => {
                const img = document.createElement('img');
                img.classList = 'img-responsive'
                imgUrl = element.image.replace(/\\/g, "/")
                img.src = `/storage/${imgUrl}`;
                imgCont.appendChild(img)
                // document.querySelector('.banter-loader').classList = 'd-none';
            });
            // document.querySelector('.slider-modal').classList = 'slider-modal modal-active';
        }
    };
    xhttp.send();
}
