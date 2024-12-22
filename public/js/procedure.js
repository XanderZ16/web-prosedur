linesObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            line = entry.target.querySelector(".line");
            line.classList.toggle("show-line", entry.isIntersecting);
        });
    },
    {
        rootMargin: "0px 0px -200px 0px",
    }
);

stepsObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            title = entry.target.querySelector(".step-title");
            info = entry.target.querySelector(".step-info");
            title.classList.toggle("show-step", entry.isIntersecting);
            info.classList.toggle("show-step", entry.isIntersecting);
        });
    },
    {
        rootMargin: "0px 0px -200px 0px"
    }
);

dotsObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            dot = entry.target.querySelector(".dot");
            dot.classList.toggle("show-dot", entry.isIntersecting);
        })
    },
    {
        rootMargin: "0px 0px -200px 0px"
    }
)

const steps = document.querySelectorAll(".step");

steps.forEach(step => {
    linesObserver.observe(step);
    stepsObserver.observe(step);
    dotsObserver.observe(step);
});

