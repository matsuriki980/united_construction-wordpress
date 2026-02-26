/*
 * スタッフスライダー
 */

export const initializeRecruitGallerySlider = () => {
  const recruitGallerySplide = document.querySelector(
    ".js-recruit-culture-gallery",
  );

  if (!recruitGallerySplide) return;

  const splide = new Splide(recruitGallerySplide, {
    type: "loop",
    perPage: 3,
    arrows: false,
    pagenaition: false,
    drag: false,
    autoScroll: {
      speed: 0.7,
      pauseOnHover: false,
    },
    gap: "32rem",
    padding: { left: "112rem", right: "140rem" },

    breakpoints: {
      900: {
        perPage: 1,
        gap: "10rem",
        padding: { left: "10rem", right: "142rem" },
        autoScroll: {
          speed: 0.6,
        },
      },
    },
  });
  splide.mount(window.splide.Extensions);
};
