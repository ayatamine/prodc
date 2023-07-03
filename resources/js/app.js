import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
import lozad from 'lozad'
import Swal from 'sweetalert2'
import fsLightbox from 'fslightbox';



Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()

const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();