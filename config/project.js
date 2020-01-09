module.exports = {

    // --- Project details ---

    name: 'Bricks',
    URL: '',
    desc: 'A modular starter theme built with Boostrap.',
    author: 'Stefano Bartoletti',
    authorEmail: 'stefano@stefanobartoletti.it',
    authorURL: 'https://www.stefanobartoletti.it',
    license: '',
    licenseURL: '',
    textdomain: 'bricks',

    siteURL: 'http://localhost:8080/sbbase',

    // --- CSS ---

    css: {
        purge: {
            // Purgecss whitelists
            wl: [],
            wlp: [
                /^carousel-item.*/,     // Bootstrap Carousel Animation
                /collapsing/,           // Bootstrap Navbar Animation
                /show/,                 // Bootstrap Dropdown
            ],
            wlpc: []
        }
    },

    // --- Icons ---

    icons: {
        used: {
            // faMinify used icons
            // Light (Pro), Regular (Pro), Solid (Free), Brands (Free)
            fal: [],
            far: [],
            fas: [ 
                'angle-up',
                'envelope',
                'share-alt',
                'search',
            ],
            fab: [ 
                'facebook-f',
                'linkedin-in',
                'instagram',
                'twitter',
                'pinterest-p',
                'get-pocket',
                'telegram-plane',
                'whatsapp',
            ] 
        }
    }

}