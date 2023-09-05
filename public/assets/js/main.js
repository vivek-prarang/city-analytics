document.getElementById('show-pos-neg-btn').addEventListener('click', function () {
    let myDiv = document.getElementById('show-pos-neg-div');
    let bsCollapse = new bootstrap.Collapse(myDiv, {
        toggle: true
    });
});
