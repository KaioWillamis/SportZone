function toggleDarkMode() {
    const estilo = document.querySelector('estilobranco');
    const hrf = document.querySelector('href');

    if(hrf === 'style/index.css'){
        hrf.setAttribute('href', 'style/index_dark.css');
    }
    else{
        hrf.setAttribute('href', 'style/index.css');
    }

    // Movendo a bolinha para o outro lado
    const buttonDark = document.querySelector('.bnt_dark');
    buttonDark.classList.toggle('active');
}