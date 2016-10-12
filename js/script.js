var hamb = document.getElementById('hamb'),
    guit = document.getElementById('guit'),
    batt = document.getElementById('batt'),
    bass = document.getElementById('bass'),
    pian = document.getElementById('pian'),
    hs = document.getElementById('hs');

hamb.addEventListener('click', function () {
    if (guit.classList.contains('off')) {
        guit.classList.remove('off');
        batt.classList.remove('off');
        bass.classList.remove('off');
        pian.classList.remove('off');
        hs.classList.remove('off');
    } else {
        guit.classList.add('off');
        batt.classList.add('off');
        bass.classList.add('off');
        pian.classList.add('off');
        hs.classList.add('off');
    }
})
