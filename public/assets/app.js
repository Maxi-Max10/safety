(function () {
    const mapEl = document.getElementById('map');
    if (!mapEl) return;

    const latInput = document.getElementById('lat');
    const lngInput = document.getElementById('lng');
    const latInput2 = document.getElementById('lat2');
    const lngInput2 = document.getElementById('lng2');

    const fallback = { lat: -34.6037, lng: -58.3816 };
    const map = L.map('map').setView([fallback.lat, fallback.lng], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    function setPosition(lat, lng) {
        map.setView([lat, lng], 16);
        L.marker([lat, lng]).addTo(map);
        if (latInput) latInput.value = lat;
        if (lngInput) lngInput.value = lng;
        if (latInput2) latInput2.value = lat;
        if (lngInput2) lngInput2.value = lng;
    }

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (pos) => setPosition(pos.coords.latitude, pos.coords.longitude),
            () => setPosition(fallback.lat, fallback.lng)
        );
    } else {
        setPosition(fallback.lat, fallback.lng);
    }
})();
