const swiper = new Swiper('.swiper', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    keyboard: true,
    mousewheel: true,
    autoplay: {
        delay: 2000, // Waktu dalam milidetik antara setiap slide (misalnya 3000ms = 3 detik)
        disableOnInteraction: false, // Jika true, autoplay berhenti saat ada interaksi dengan swiper
    },
});
