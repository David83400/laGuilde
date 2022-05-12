// New instance of the formValidate class
let inscriptionForm = new FormValidate(
    /^[a-zA-Z0-9éèê_-]+$/,
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
);

// Creation of the new instance of the Map class
let leafletMap = new LeafletMap(
    "map"
);
