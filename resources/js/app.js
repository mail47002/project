import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import VueGoogleMaps from '@fawmi/vue-google-maps'
import { library } from "@fortawesome/fontawesome-svg-core";
import { faPhone } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';
InertiaProgress.init();

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(VueGoogleMaps, {
                load: {
                    // key: 'AIzaSyBZLBe3JfSAGoK3BgAPJzw3x0c607wUl0Q',
                    key: 'AIzaSyChngAWVMg7s9BpygSO90T2lMQCuEIPs74',
                    libraries: "places"
                    // language: 'de',
                },
            })
            .component("font-awesome-icon", FontAwesomeIcon)
            .mount(el);
    },
});