const search = document.querySelector('.search-bar');
const page = document.querySelector('.pagination-js');

search.addEventListener('submit', e => {
    e.preventDefault();
    let value = search.querySelector('input').value;
    let url = `/formation?q=${value}`;
    let el = document.querySelector('.wrapper');
    el.style.opacity = '0';
    loadUrl(url, el, page);
});

page.addEventListener('click', e => {
    e.preventDefault();
    let value = search.querySelector('input').value;
    let pageValue = e.target.href.slice(-4);
    let pageNumber = pageValue.replace(/\D/g, "");
    let url = `/formation?q=${value}&page=${pageNumber}`;
    let el = document.querySelector('.wrapper');
    el.style.opacity = '0';
    loadUrl(url, el, page);
})

async function loadUrl(url, el, page) {
    const response = await fetch(url, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    });
    if (response.status >= 200 & response.status < 300) {
        const data = await response.json();
        el.innerHTML = data.content.content;
        el.style.opacity = '1';
        page.innerHTML = data.pagination.content;
        history.pushState({}, '', url);
    } else {
        console.log(response);
    }
}
