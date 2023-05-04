
window._ = require("lodash");

try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");

    window.lightbox = require("lightbox2/src/js/lightbox.js");	
    require("admin-lte/plugins/select2/js/select2.min.js");
    require("admin-lte/plugins/select2/js/i18n/es.js");
    require("admin-lte/plugins/overlayScrollbars/js/OverlayScrollbars.js");
    window.Swal = require("admin-lte/plugins/sweetalert2/sweetalert2.all.min.js");
    require("admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js");
    window.toastr = require("admin-lte/plugins/toastr/toastr.min.js");

    window.moment = require("moment");
    moment.locale("es");
    require("justgage/raphael.min.js");
    require("justgage/justgage.js");

    window.flatpickr = require("flatpickr");

    // AdminLTE code here.
    require('datatables.net');
    require('datatables.net-bs4');
    require('datatables.net-buttons-bs4');
    require('datatables.net-select-bs4');
    require('datatables.net-searchpanes-bs4');
    require('datatables.net-buttons/js/buttons.html5.min');
    require('datatables.net-buttons/js/buttons.print.min');
    require('datatables.net-buttons/js/buttons.flash.min');
    require('datatables.net-responsive-bs4');
    require('pdfmake'); // instalar con npm
    require('jszip'); // instalar con npm
    window.DataTablesSpanish = require('datatables.net-plugins/i18n/es-CL.json');

    require("admin-lte");
    window.LocaleFlatpick = {
        firstDayOfWeek: 1,
        weekdays: {
            shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
            longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes',
                'Sábado'
            ],
        },
        months: {
            shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep',
                'Оct',
                'Nov', 'Dic'
            ],
            longhand: ['Enero', 'Febrero', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                'Agosto',
                'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ],
        },
    };

} catch (e) {
    console.log(e);
}

var script = document.createElement("script");
var keymap = 'coloca una de prueba';

script.src =
    "https://maps.googleapis.com/maps/api/js?key="+keymap+"&callback=initMap&libraries=geometry&language=es";

script.async = true;

window.initMap = function () {};

document.head.appendChild(script);

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
