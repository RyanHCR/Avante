document.addEventListener('DOMContentLoaded', () => {
    const logo = document.querySelector('.logo');
    logo.addEventListener('animationend', () => {
        console.log('Animação do logo concluída');
        // Adicione qualquer ação que você deseja após a animação
    });
});

window.addEventListener('scroll', function() {
    const animatedTextContainer = document.querySelector('.animated-text-container');
    const textPosition = animatedTextContainer.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;

    if (textPosition < screenHeight) {
        animatedTextContainer.classList.add('show-text');
    }
});
