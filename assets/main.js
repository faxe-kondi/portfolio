document.addEventListener("DOMContentLoaded", () => {

  const polaroids = document.querySelectorAll(".works-polaroid");

  polaroids.forEach((polaroid) => {
    const expanded = polaroid.querySelector(".polaroid-expanded-left") || polaroid.querySelector(".polaroid-expanded-right");

    polaroid.addEventListener("click", (event) => {
      event.stopPropagation();
      const isShown = expanded.classList.toggle("show");
      polaroid.classList.toggle("disable-hover", isShown);
    });
  });


  document.addEventListener("click", () => {
    polaroids.forEach((polaroid) => {
      const expanded = polaroid.querySelector(".polaroid-expanded-left") || polaroid.querySelector(".polaroid-expanded-right");
      if (expanded.classList.contains("show")) {
        expanded.classList.remove("show");
        polaroid.classList.remove("disable-hover");
      }
    });
  });

 
  const letters = document.querySelectorAll('.works-title-letter');
  const mediaQuery = window.matchMedia('(min-width: 768px)');
  let animations = [];

  function resetLetters() {
    letters.forEach(el => {
      el.style.transform = '';
    });
  }

  function getTranslateYValues(isDesktop) {
    return isDesktop ? ['-0.7rem', '0.7rem'] : ['-0.35rem', '0.35rem'];
  }

  function createAnimations(isDesktop) {
    animations.forEach(anim => anim.pause());
    animations = [];
    resetLetters();

    const translateY = getTranslateYValues(isDesktop);

    letters.forEach((el, i) => {
      const anim = anime({
        targets: el,
        translateY: translateY,
        duration: 1000,
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true,
        delay: 0,
        autoplay: true,
        begin: () => {
          setTimeout(() => {
            const innerAnim = anime({
              targets: el,
              translateY: translateY,
              duration: 1000,
              easing: 'easeInOutSine',
              direction: 'alternate',
              loop: true
            });
            animations.push(innerAnim);
          }, i * 100);
        }
      });
      animations.push(anim);
    });
  }

  function handleMediaChange(e) {
    createAnimations(e.matches);
  }

  createAnimations(mediaQuery.matches);
  mediaQuery.addEventListener('change', handleMediaChange);


  anime({
    targets: ".contact-phone",
    rotate: ["-3deg", "3deg"],
    duration: 3000,
    easing: "easeInOutSine",
    direction: "alternate",
    loop: true
  });


  const bg = document.querySelector(".works-background-upper");
  if (bg) {
    const desktopImg = bg.dataset.imgDesktop;
    const mobileImg = bg.dataset.imgMobile;

    function setBackground() {
      bg.style.backgroundImage = window.innerWidth < 768
        ? `url('${mobileImg}')`
        : `url('${desktopImg}')`;
    }

    setBackground();
    window.addEventListener("resize", setBackground);
  }
});