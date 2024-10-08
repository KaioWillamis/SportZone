function openGoogleMaps() {
    var latitude = -8.294110;
    var longitude = -35.952963; 

    // URL do Google Maps com a localização
    var url = `https://www.google.com/maps/@${latitude},${longitude},15z`;

    // Redireciona para o Google Maps
    window.open(url, '_blank'); // Abre em uma nova aba
}