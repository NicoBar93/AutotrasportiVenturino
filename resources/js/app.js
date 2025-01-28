import './bootstrap';
import 'bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Importa il file CSS di AOS
AOS.init();


// window.addEventListener('load', function() {
//     console.log(_iub);
// });

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("menu-toggle");

    toggleButton.addEventListener("click", function () {
        if (toggleButton.classList.contains("collapsed")) {
            toggleButton.classList.remove("collapsed");
        } else {
            toggleButton.classList.add("collapsed");
        }
    });
});
