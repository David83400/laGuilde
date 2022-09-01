/**
 * Manage the creation of the leaflet map
 */
class LeafletMap {
    /**
     * Constructor of the leaflet map
     * @param {string} container 
     */
    constructor(container) {
        this.container = document.getElementById(container);

        if (this.container) {
            // Leaflet map configuration
            this.newMap = L.map(this.container, { scrollWheelZoom: false });

            // Adding of the tile layer
            this.tileLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/outdoors-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoiZGF2aWQ4MzQwMCIsImEiOiJjazY5NTJwZHIwNnBlM2RvNWxhaTFycm44In0.uxoF-W3Mg7iBwmgGSJIW6Q'
            }).addTo(this.newMap);
        }

    }

    /**
     * Manage the loading of the map and the centering in relation to the markers coordinates.
     * Manage the markers, the marker clusters and the personal icons.
     */
    loadMap() {
        this.latLng = [];

        // Bounds configuration for the centering of the map in relation to the markers coordinates
        this.bounds = [];

        // Initialization of the markers grouping
        let markers = L.markerClusterGroup();

        Array.from(document.querySelectorAll('.js-marker')).forEach((item) => {

            // Latitude and longitude recovery in each item
            this.latLng = L.latLng([item.dataset.lat, item.dataset.lng]);

            // Creation of the personal icon for the markers
            let LeafIcon = L.Icon.extend({
                options: {
                    className: 'marker',
                    iconSize: [50, 50]
                }
            });

            let greenLightIcon = new LeafIcon({ iconUrl: '/images/appliPage/icon/greenLightIcon.png' }),
                greenDarkIcon = new LeafIcon({ iconUrl: '/images/appliPage/icon/greenDarkIcon.png' });

            // Creation of each marker and set up of the personal icon
            let marker = L.marker([this.latLng.lat, this.latLng.lng], { icon: greenLightIcon });

            //  Hiking trail image recovery in each item
            let imgMarker = item.dataset.img;

            // Creation of the marker popup
            marker.bindPopup('<p><img src="' + imgMarker + '" alt="" class="w-100"/></p><h3>Randonnée</h3><p>Description courte de la randonnée ...<a href="/appli/hikingPage" class="greenlightCol"> Lire la suite</a></p>').openPopup();

            // Addition of the markers to the grouping
            markers.addLayer(marker);

            // Markers coordinates are pushed in bounds table to center the table
            let coordinate = [this.latLng.lat, this.latLng.lng];
            this.bounds.push(coordinate);
            this.newMap.fitBounds(this.bounds);

            item.addEventListener('mouseover', () => {
                marker.setIcon(greenDarkIcon);
            })

            item.addEventListener('mouseout', () => {
                marker.setIcon(greenLightIcon);
            })

            // Addition of the layer
            this.newMap.addLayer(markers);
        });
    }
}