import $ from 'jquery';
import Popper from 'popper.js';
window.$ = window.jQuery = $; // Torna o jQuery acessível globalmente (se necessário)
window.Popper = Popper; // Torna o Popper acessível globalmente (se necessário)

// Importe o Bootstrap (se instalado via npm):
import 'bootstrap';

// Seu código (conteúdo do script.js)
// ...

function adjustLevel(bar) {
    const currentWidth = parseFloat(bar.querySelector('.progress-bar').style.width);
    const newWidth = prompt("Digite o novo nível de proficiência (%)", currentWidth);

    if (newWidth !== null) {
        const percentage = Math.max(0, Math.min(100, parseFloat(newWidth)));
        bar.querySelector('.progress-bar').style.width = percentage + '%';
        bar.querySelector('.progress-bar').setAttribute('aria-valuenow', percentage);
        bar.querySelector('.progress-bar').innerText = percentage + '%';
    }
}

document.querySelectorAll('.progress-container').forEach(container => {
    container.addEventListener('click', () => adjustLevel(container));
});

function getVisitorCount() {
    return fetch('https://api.countapi.xyz/hit/nilsong87-github-io-curriculo-online/visitas')
        .then(response => response.json())
        .then(data => data.value);
}

function updateVisitorCounter() {
    getVisitorCount().then(count => {
        document.getElementById('counter').innerText = count;
    });
}

window.onload = updateVisitorCounter;