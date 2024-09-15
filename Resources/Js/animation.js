document.addEventListener('DOMContentLoaded', () => {
    const logo = document.querySelector('.logo');
    const animatedTextContainer = document.querySelector('.animated-text-right');
    const infoText = document.querySelector('.info-text');

    logo.addEventListener('animationend', () => {
        console.log('Animação do logo concluída');
    });

    const checkVisibility = () => {
        const animatedTextPosition = animatedTextContainer.getBoundingClientRect().top;
        const infoTextPosition = infoText.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;

        if (animatedTextPosition < screenHeight) {
            animatedTextContainer.classList.add('show-text');
        }

        if (infoTextPosition < screenHeight) {
            infoText.classList.add('show-info-text');
        }
    };

    window.addEventListener('scroll', checkVisibility);
    checkVisibility();
});
