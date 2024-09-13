document.addEventListener('DOMContentLoaded', () => {
    const logo = document.querySelector('.logo');
    logo.addEventListener('animationend', () => {
        console.log('Animação do logo concluída');
        // Adicione qualquer ação que você deseja após a animação
    });
});