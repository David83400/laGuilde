// New instance of the LeafletMap class
let leafletMap = new LeafletMap(
    "map"
);
// New instance of the formValidate class to manage contact form animations
let contactForm = new FormValidate(
    'contactForm',
    ['pseudo', 'email', 'title', 'message'],
    'contactButton'
);

// New instance of the formValidate class to manage connection form animations
let connectionForm = new FormValidate(
    'connectionForm',
    ['pseudo', 'email', 'password'],
    'connectionButton'
);

// New instance of the formValidate class to manage register form animations
let registerForm = new FormValidate(
    'registerForm',
    ['pseudo', 'email', 'emailConfirm', 'password', 'passwordConfirm'],
    'registerButton'
);

// New instance of the formValidate class to manage assistance form animations
let assistanceForm = new FormValidate(
    'assistanceForm',
    ['pseudo', 'email', 'object', 'title', 'message'],
    'assistanceButton'
);

// New instance of the formValidate class to manage change Mdp form animations
let changeMdpForm = new FormValidate(
    'changeMdpForm',
    ['oldPassword', 'password', 'passwordConfirm'],
    'changeMdpButton'
);