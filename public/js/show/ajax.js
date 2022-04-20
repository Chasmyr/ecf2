function onClickCompleteLesson(event) {
    event.preventDefault();

    const url = this.href;
    const bar = document.querySelector('.progress-content');
    const el = document.querySelector('.progress-number');
    findPercent(el, bar, url);
    
}
document.querySelectorAll('.lesson-complete').forEach(function(el) {
    el.addEventListener('click', onClickCompleteLesson);
})
async function findPercent(el, bar, url) {
    const response = await fetch(url, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    });
    
    //const data = await response.json();
    //console.log(response)
    if (response.status >= 200 & response.status < 300) {
        const data = await response.json();
        console.log(data.progress);
        el.innerHTML = Math.round(data.progress) + '%';
        bar.style.width = `${data.progress}%`;
    } else {
        console.log(response);
    }
}
