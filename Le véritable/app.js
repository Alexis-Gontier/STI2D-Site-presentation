// const txtAnim = document.querySelector('.txt1');

// new Typewriter(txtAnim,{
// 	//faire une boucle
// 	loop: true,
// 	// changer le delay de disparition des lettres
// 	deleteSpeed: 20 
// })
// // changer le delay de d'appartition des lettres
// .changeDelay(100)
// .typeString('<span style="color: #3500D3;"> d\'écologie.')
// .pauseFor(2000)
// .deleteChars(11)
// .pauseFor(150)
// .typeString('<span style="color: #3500D3;"> de conception.')
// .pauseFor(2000)
// .deleteChars(14)
// .pauseFor(150)
// .typeString('<span style="color: #3500D3;"> d\'innovation.')
// .pauseFor(2000)
// .deleteChars(14)
// .start()



// bouton aller en haut qui apparait quand on scroll
jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 20 ) {  // Quand on est à 20pixels du haut de page,
                $('#scrollUp').css('opacity','1'); // 
            } else { 
                $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});

// bar de nav + ombre qui apparait quand on scroll
jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 100 ) {  // Quand on est à 100pixels du haut de page,
                $('header').css('box-shadow','0 .3em 2em rgba(0, 0, 0, .1)');
                $('header').css('background','var(--background');
            } else { 
                $('header').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});

jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 1500 ) {  // Quand on est à 1500pixels du haut de page,
                $('.navbar-date').css('left','0');
            } else { 
                $('.navbar-date').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});

// Dark mode
const switchThemeBtn = document.querySelector('.dark-mode')
    let toggleTheme = 0;
    

    switchThemeBtn.addEventListener('click', () => {

        if(toggleTheme === 0) {

            // dark mode
            document.documentElement.style.setProperty('--color_h1', '#FCFCFC');
            document.documentElement.style.setProperty('--color', '#FCFCFC');
            document.documentElement.style.setProperty('--background', '#00000A');
            document.documentElement.style.setProperty('--background-carte', '#131313');
            document.documentElement.style.setProperty('--block', 'none');
            document.documentElement.style.setProperty('--none', 'block');
            toggleTheme++;

        } else {

            // light mode
            document.documentElement.style.setProperty('--color_h1', '#282828');
            document.documentElement.style.setProperty('--color', '#282828');
            document.documentElement.style.setProperty('--background', '#FCFCFC');
            document.documentElement.style.setProperty('--background-carte', '#EFEFEF');
            document.documentElement.style.setProperty('--block', 'block');
            document.documentElement.style.setProperty('--none', 'none');
            toggleTheme--;

        }


    })



// menu burger
$(document).ready(function(){

    $('#menu-bar').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

});