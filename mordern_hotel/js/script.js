document.addEventListener("DOMContentLoaded", function () {

    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");

    // ======================
    // MOBILE MENU FIX
    // ======================
    if (hamburger && navMenu) {
        hamburger.addEventListener("click", () => {
            navMenu.classList.toggle("active");
            hamburger.textContent = navMenu.classList.contains("active") ? "✕" : "☰";
        });

        document.querySelectorAll("nav ul li a").forEach(link => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("active");
                hamburger.textContent = "☰";
            });
        });
    }

    // ======================
    // HERO SLIDES + TEXT SYNC
    // ======================

    const slides = document.querySelectorAll(".slide");
    const texts = document.querySelectorAll(".hero-text");

    const images = [
        "https://images.unsplash.com/photo-1566073771259-6a8506099945",
        "https://images.unsplash.com/photo-1582719508461-905c673771fd",
        "https://images.unsplash.com/photo-1584132967334-10e028bd69f7",
        "https://images.unsplash.com/photo-1566665797739-1674de7a421a",
        "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b",
        "https://images.unsplash.com/photo-1544161515-4ab6ce6db874"
    ];

    // assign images safely
    slides.forEach((slide, i) => {
        if (images[i]) {
            slide.style.backgroundImage = `url('${images[i]}')`;
        }
    });

    let current = 0;

    function showSlide(index) {

        slides.forEach((s, i) => {
            s.classList.toggle("active", i === index);
        });

        texts.forEach((t, i) => {
            t.classList.toggle("active-text", i === index);
        });
    }

    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 4000);

    showSlide(0);

});
// ======================
// CHAT POPUP CONTROL
// ======================

const chatPopup = document.getElementById("chatPopup");
const closeChat = document.getElementById("closeChat");

// show popup after 2 seconds
setTimeout(() => {
    if (chatPopup) {
        chatPopup.style.display = "block";
    }
}, 2000);

// close popup
closeChat?.addEventListener("click", () => {
    chatPopup.style.display = "none";
});