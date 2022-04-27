let menu = document.getElementById('menu');
let content = document.getElementById('content');
let lessonMenu = menu.querySelectorAll('.lesson-title');
let sectionMenu = menu.querySelectorAll('.section-title');
let lessonContent = content.querySelectorAll('.lesson-content');

// pour ouvrir le menu
function openMenu() {
    if (window.matchMedia("(min-width: 1025px)").matches) {
        menu.style.width = '600px';
    } else if (window.matchMedia("(min-width: 641px)").matches) {
        menu.style.width = '550px';
    } else if (window.matchMedia("(min-width: 479px)").matches){
        menu.style.width = '420px';
    } else if (window.matchMedia("(min-width: 339px)").matches){
        menu.style.width = '340px';
    }
    
    content.style.filter = 'blur(1em)';
    document.querySelector('.open-menu-img').style.transform = 'rotate(180deg)'
}

// pour le fermer
function closeMenu() {
    menu.style.width = '0px';
    content.style.filter = 'blur(0)';
    document.querySelector('.open-menu-img').style.transitionDelay = '0.4s';
    document.querySelector('.open-menu-img').style.transform = 'rotate(0deg)';
}

// ajouter la possibilité de cliquer sur le menu
function makeClickable(el) {
    setTimeout(() => {
        for (let g = 0; g < el.length; g++) {
            el[g].style.pointerEvents = 'auto'
        }
    }, 400);
}

// enlever la possibilité de cliquer
function notClickable(el) {
    setTimeout(() => {
        for (let m = 0; m < el.length; m++) {
            el[m].style.pointerEvents = 'none'
        }
    }, 400);
}

// ouvrir et fermer le menu
// l'ouvrir et faire en sorte que les elements soit clickable
document.getElementById('openMenu').addEventListener('click', () => {
    openMenu();
    makeClickable(lessonMenu);
});
// le fermer et enlver les click
document.getElementById('closeMenu').addEventListener('click', () => {
    closeMenu();
    notClickable(lessonMenu);
});
// faire le menu en accordeon
let sectionMenuWrapper = document.querySelectorAll('.section-menu');

for (let y = 0; y < sectionMenuWrapper.length; y++)
{
    let state = false;
    let sectionMenuLesson = sectionMenuWrapper[y].querySelectorAll('.lesson-menu');
    sectionMenuWrapper[y].querySelector('.section-title').addEventListener('click', () => {
        if (sectionMenuWrapper[y].querySelector('.open-accordeon-img').style.transform == 'rotate(270deg)') {
            sectionMenuWrapper[y].querySelector('.open-accordeon-img').style.transform = 'rotate(90deg)';   
        } else {
            sectionMenuWrapper[y].querySelector('.open-accordeon-img').style.transform = 'rotate(270deg)';
        }
        if (state) {
            
            for (let t = 0; t < sectionMenuLesson.length; t++)
            {
                sectionMenuLesson[t].style.height = '0';
                sectionMenuLesson[t].querySelector('.lesson-title > a').style.color = 'transparent';
                sectionMenuLesson[t].querySelector('.lesson-title > a').style.pointerEvents = 'none';
            }
            state = false;
        } else {
            for (let t = 0; t < sectionMenuLesson.length; t++)
            {
                sectionMenuLesson[t].style.height = 'auto';
                sectionMenuLesson[t].querySelector('.lesson-title > a').style.color = 'white';
                sectionMenuLesson[t].querySelector('.lesson-title > a').style.pointerEvents = 'auto';
            }
            state = true;
        }
        
    });

}
// gérer l'event listener pour faire fonctionner le menu
for (let i = 0; i < lessonMenu.length; i++)
{
    let currentLessonContent = lessonContent[i];
    let currentLessonTitle = lessonMenu[i].querySelector('.lesson-title > a');

    // ajout de levent listener qui permet d'afficher le bon contenu
    // et qui change la couleur de la lesson active
    currentLessonTitle.addEventListener('click', () => {
        closeMenu();
        for (let j =0; j < i; j++)
        {
            lessonContent[j].style.display = 'none';
        }
        for (let h = i+1; h < lessonMenu.length; h++)
        {
            lessonContent[h].style.display = 'none';
        }
        currentLessonContent.style.display = 'block';
    });

    let lessonNext = currentLessonContent.querySelector('.lesson-complete');
    let lessonBack = currentLessonContent.querySelector('.lesson-back');
    
    // faire fonctionner les btn du bas précédent/terminer
    if (i < lessonMenu.length) {
        lessonNext.addEventListener('click', () => {
            if(i < lessonMenu.length -1) {
                lessonContent[i].style.display = 'none';
                lessonContent[i+1].style.display = 'block'; 
            }
            
        })
    }
    
    if (i > 0) {
        
        lessonBack.addEventListener('click', () => {
            lessonContent[i].style.display = 'none';
            lessonContent[i-1].style.display = 'block';
        })
    } else {
        lessonBack.style.display = 'none';
    }
}