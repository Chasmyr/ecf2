function onClickCompleteLesson(event) {
    event.preventDefault();

    const url = this.href;
    
    axios.get(url).then(function(response) {
        // mettre le code ici pour la bar de progression de la formation
        const progress = Math.round(response.data.progress).toString();
        const progressContent = document.querySelector('.progress-content');
        const progressSpan = document.querySelector('.progress-number');
        progressSpan.textContent = progress + '%';
        progressContent.style.width = `${progress}%`;
    }).catch(function(error) {
        if(error.response.status === 403) {
            window.alert('Vous devez vous connecter pour continuer la formation');
        } else {
            window.alert('Une erreur est survenue, essayez plus tard');
        }
    });
}
document.querySelectorAll('.lesson-complete').forEach(function(el) {
    el.addEventListener('click', onClickCompleteLesson);
})
