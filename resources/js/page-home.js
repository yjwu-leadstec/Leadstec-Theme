const storiesSliderContainer = document.querySelector(".slider-stories");
const slides = document.querySelectorAll(".slider-single-image");
if (storiesSliderContainer) {
    var sliderStories = tns({
        container: ".slider-stories",
        prevButton: "#sliderStoriesPrev",
        nextButton: "#sliderStoriesNext",
        axis: "vertical",
        fixedWidth: 400,
        speed: 400,
        items: 4,
        nav: false,
        startIndex: 1,
    });

    const storyMainImagesWrappers = document.querySelectorAll(
        ".story-main-image-wrapper"
    );
    const storySliderImages = document.querySelectorAll(
        ".slider-stories .slider-single-image"
    );

    sliderStories.events.on("indexChanged", () => {
        const info = sliderStories.getInfo();
        storyMainImagesWrappers.forEach((wrapper) => {
            if (wrapper.dataset.index == info.displayIndex % info.slideCount) {
                wrapper.classList.remove("opacity-0");
                wrapper.classList.add("opacity-100");
            } else {
                wrapper.classList.remove("opacity-100");
                wrapper.classList.add("opacity-0");
            }
        });
    });
}

const handleImageClick = (el) => {
    const imageIndex = el.dataset.index;
    const info = sliderStories.getInfo();
    sliderStories.goTo(
        (((imageIndex - 1) % info.slideCount) + info.slideCount) %
            info.slideCount
    );
};

const handleReadExpand = (el) => {
    const descriptionWrap = el.closest(".description-wrap");
    const mainText = el.previousElementSibling;
    descriptionWrap.classList.toggle("max-h-[50%]");
    descriptionWrap.classList.toggle("max-h-full");
    descriptionWrap.classList.toggle("w-1/2");
    descriptionWrap.classList.toggle("w-2/3");
    mainText.classList.toggle("truncate");
    mainText.classList.toggle("max-h-6");
    mainText.classList.toggle("max-h-screen");
};

const splide = new Splide(".splide", {
    type: "loop",
    drag: "free",
    focus: "center",
    arrows: false,
    pagination: false,
    perPage: 5,
    autoScroll: {
        speed: 1,
    },
    breakpoints: {
        640: {
            perPage: 2,
        },
        768: {
            perPage: 3,
        },
        1024: {
            perPage: 4,
        },
    },
});

splide.mount(window.splide.Extensions);
