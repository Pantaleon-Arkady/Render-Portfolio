function openProject(modalId) {
    document.getElementById(modalId).style.display = "block";

    const modal = document.getElementById(modalId);
    const slides = modal.querySelectorAll('.each-slide');

    slides.forEach((slide, i) => {
        slide.style.display = i === 0 ? 'block' : 'none';
    });

    modal.currentSlideIndex = 0;
    modal.slides = slides;
}

function closeProject(modalId) {
    document.getElementById(modalId).style.display = "none";
}

function changeSlide(direction) {
    const openModal = document.querySelector('.project-modal[style*="block"]');
    if (!openModal) return;

    const slides = openModal.slides;
    if (!slides || slides.length <= 1) return;

    let newIndex = openModal.currentSlideIndex + direction;

    if (newIndex < 0) newIndex = slides.length - 1;
    if (newIndex >= slides.length) newIndex = 0;

    slides.forEach((slide, i) => {
        slide.style.display = i === newIndex ? 'block' : 'none';
    });

    openModal.currentSlideIndex = newIndex;
}

function openProjectOne() {
    openProject('modal-project-one');
}

function closeProjectOne() {
    closeProject('modal-project-one');
}

function openProjectTwo() {
    openProject('modal-project-two');
}

function closeProjectTwo() {
    closeProject('modal-project-two');
}

function openProjectThree() {
    openProject('modal-project-three');
}

function closeProjectThree() {
    closeProject('modal-project-three');
}

function openProjectFour() {
    openProject('modal-project-four');
}

function closeProjectFour() {
    closeProject('modal-project-four');
}

function openProjectFive() {
    openProject('modal-project-five');
}

function closeProjectFive() {
    closeProject('modal-project-five');
}