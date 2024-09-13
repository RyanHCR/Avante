window.addEventListener('scroll', function() {
    const animatedTextContainer = document.querySelector('.animated-text-container');
    const textPosition = animatedTextContainer.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;

    // Log para verificar se o código está sendo executado
    console.log('Scroll detectado, posição do texto:', textPosition, 'altura da tela:', screenHeight);

    if (textPosition < screenHeight) {
        animatedTextContainer.classList.add('show-text');
        console.log('Classe "show-text" adicionada');
    }
});
