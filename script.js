// Exemplo de animação simples: ao rolar a página, as seções podem aparecer com animação
document.addEventListener('scroll', () => {
    let sections = document.querySelectorAll('section');
    sections.forEach(section => {
        let position = section.getBoundingClientRect().top;
        if (position < window.innerHeight) {
            section.classList.add('active');
        }
    });
});
