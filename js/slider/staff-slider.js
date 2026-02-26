/*
 * スタッフスライダー
 */

export const initializeAboutStaffSlider = () => {
  const aboutStaffSplide = document.querySelector(".js-about-member-slider");

  if (!aboutStaffSplide) return;

  const splide = new Splide(aboutStaffSplide, {
    type: "loop",
    perPage: 3,
    perMove: 1,
    arrows: false,
    pagenaition: false,
    autoplay: true,
    interval: 3000,
    gap: "40rem",
    padding: { left: "172rem", right: "259rem"},

    breakpoints: {
        900: {
            perPage: 1,
            gap: "32rem",
            padding: { left: "20rem", right: "125rem"},
        }
    }
  });
  splide.mount();
};
