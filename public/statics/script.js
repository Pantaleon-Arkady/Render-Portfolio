function openProject(modalId) {
    const modal = document.getElementById(modalId);

    modal.classList.remove('hidden');

    const slides = modal.querySelectorAll('.each-slide');

    slides.forEach((slide, i) => {
        slide.classList.toggle('hidden', i !== 0);
    });

    modal.currentSlideIndex = 0;
    modal.slides = slides;
}


function closeProject(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('hidden');
}

function changeSlide(direction) {
    const openModal = document.querySelector('[id^="modal-project-"]:not(.hidden)');
    if (!openModal) return;

    const slides = openModal.slides;
    if (!slides || slides.length <= 1) return;

    let newIndex = openModal.currentSlideIndex + direction;

    if (newIndex < 0) newIndex = slides.length - 1;
    if (newIndex >= slides.length) newIndex = 0;

    slides.forEach((slide, i) => {
        slide.classList.toggle('hidden', i !== newIndex);
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

// Script for manual scroll header follow

const scrollContainer = document.querySelector('.overflow-y-auto');
const sections = document.querySelectorAll('[data-section]');
const navLinks = document.querySelectorAll('.section_links');

const observer = new IntersectionObserver(
(entries) => {
    entries.forEach(entry => {
    if (!entry.isIntersecting) return;

    const id = entry.target.id;

    navLinks.forEach(link => {
        link.classList.remove('bg-white/15', 'text-white', 'scale-105');
    });

    const activeLink = document.querySelector(
        `.section_links[href="#${id}"]`
    );

    if (activeLink) {
        activeLink.classList.add('bg-white/15', 'text-white', 'scale-105');
    }
    });
},
{
    root: scrollContainer,     // IMPORTANT: your scroll div
    threshold: 0.6             // 60% of section visible
}
);

sections.forEach(section => observer.observe(section));

