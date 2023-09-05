document.getElementById('ab-pos-data-btn').addEventListener('click', function () {
    let myDiv = document.getElementById('ab-pos-data-div');
    let bsCollapse = new bootstrap.Collapse(myDiv, {
        toggle: true
    });
});

document.getElementById('be-pos-data-btn').addEventListener('click', function () {
    let myDivx = document.getElementById('be-pos-data-div');
    let bsCollapsex = new bootstrap.Collapse(myDivx, {
        toggle: true
    });
});

document.getElementById('ab-neg-data-btn').addEventListener('click', function () {
    let myDivx = document.getElementById('ab-neg-data-div');
    let bsCollapsex = new bootstrap.Collapse(myDivx, {
        toggle: true
    });
});
document.getElementById('be-neg-data-btn').addEventListener('click', function () {
    let myDivx = document.getElementById('be-neg-data-div');
    let bsCollapsex = new bootstrap.Collapse(myDivx, {
        toggle: true
    });
});


// const bePosDataBtn = document.getElementById('be-pos-data-btn');
// const bePosDataDiv = document.getElementById('be-pos-data-div');

// bePosDataBtn.addEventListener('click', () => {
//     if (bePosDataDiv.style.display === 'none') {
//         bePosDataDiv.style.display = 'block';
//         bePosDataDiv.style.height = '0';
//         setTimeout(() => {
//             bePosDataDiv.style.height = '68vh';
//         }, 10);
//     } else {
//         bePosDataDiv.style.height = '0';
//         setTimeout(() => {
//             bePosDataDiv.style.display = 'none';
//         }, 300);
//     }

// });

// const beNegDataBtn = document.getElementById('be-neg-data-btn');
// const beNegDataDiv = document.getElementById('be-neg-data-div');

// beNegDataBtn.addEventListener('click', () => {
//     if (beNegDataDiv.style.display === 'none') {
//         beNegDataDiv.style.display = 'block';
//         beNegDataDiv.style.height = '0';
//         setTimeout(() => {
//             beNegDataDiv.style.height = '68vh';
//         }, 10);
//     } else {
//         beNegDataDiv.style.height = '0';
//         setTimeout(() => {
//             beNegDataDiv.style.display = 'none';
//         }, 300);
//     }

// });

// const abNegDataBtn = document.getElementById('ab-neg-data-btn');
// const abNegDataDiv = document.getElementById('ab-neg-data-div');

// abNegDataBtn.addEventListener('click', () => {
//     if (abNegDataDiv.style.display === 'none') {
//         abNegDataDiv.style.display = 'block';
//         abNegDataDiv.style.height = '0';
//         setTimeout(() => {
//             abNegDataDiv.style.height = '68vh';
//         }, 10);
//     } else {
//         abNegDataDiv.style.height = '0';
//         setTimeout(() => {
//             abNegDataDiv.style.display = 'none';
//         }, 300);
//     }

// });