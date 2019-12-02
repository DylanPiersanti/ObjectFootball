let compo1 = document.getElementById('s4-4-2')
let compo2 = document.getElementById('s4-3-3')
let compo3 = document.getElementById('s4-5-1')


function getOneCompo() {
    compo1.style.display = "block"
    compo2.style.display = "none"
    compo3.style.display = "none"
}

function getTwoCompo() {
    compo2.style.display = "block"
    compo1.style.display = "none"
    compo3.style.display = "none"
}

function getThreeCompo() {
    compo3.style.display = "block"
    compo2.style.display = "none"
    compo1.style.display = "none"
}