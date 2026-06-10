module.exports = {
    proxy: "localhost/theme3",
    files: [
        "wp-content/themes/bumble-bee/assets/css/output.css",
        "wp-content/themes/bumble-bee/**/*.php",
        "wp-content/themes/bumble-bee/**/*.js"
    ],
    injectChanges: false,
    reloadDelay: 1000,
    reloadDebounce: 1000,
    notify: false,
    open: false
};
