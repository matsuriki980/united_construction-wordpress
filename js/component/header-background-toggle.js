/**
 * ヘッダー背景色変更
 */
export const initializeBackGroundToggle = () => {
  const headerElement = document.querySelector(".js-header");
  const triggerElement = document.querySelector(".js-header-trigger");
  const headerActiveClass = "is-active";

  if (!headerElement || !triggerElement) return;

  const setWhiteBackground = () => {
    headerElement.classList.add(headerActiveClass);

    gsap.to(headerElement, {
      duration: 0.3,
      ease: "power2.out",
      backgroundColor: "rgba(255, 255, 255, 1)",
      boxShadow: "0 7rem 30rem 0 rgba(100, 100, 111, 0.1)",
    });
  };
  const setTransparentBackground = () => {
    headerElement.classList.remove(headerActiveClass);
    gsap.to(headerElement, {
      duration: 0.3,
      ease: "power2.out",
      backgroundColor: "transparent",
      boxShadow: "0 7rem 30rem 0 rgba(100, 100, 111, 0)",
    });
  };

  ScrollTrigger.create({
    trigger: triggerElement,
    //  markers: true,
    start: "bottom top",
    onEnter: () => setWhiteBackground(),
    onLeaveBack: () => setTransparentBackground(),
  });
};
