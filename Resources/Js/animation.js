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

// Função para verificar se o elemento está visível na tela
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Função para adicionar a classe de animação quando o elemento estiver visível
function handleScrollAnimation() {
    const textContainer = document.querySelector('.text-container');
    if (isElementInViewport(textContainer)) {
        textContainer.classList.add('animate');
        window.removeEventListener('scroll', handleScrollAnimation); // Remove o event listener após a animação
    }
}

// Adiciona o event listener para detectar o scroll
window.addEventListener('scroll', handleScrollAnimation);

