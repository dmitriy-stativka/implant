const Player = document.querySelector('.budget-video iframe');
let times = 0, playY;

function playVideo(){
    if(times == 0){
        playY = Player.src += '?autoplay=1&mute=1';
        times = 1;
    }
}

gsap.to('.budget-video iframe', {     
    scrollTrigger: {
        trigger: '.budget-video',       
        once: true,
        start: 'top bottom-=20%',
        end: 'top bottom-=20%',
        markers: false,

        onEnter: () => { 
            playVideo();

            gsap.to('.budget-video iframe', {     
                opacity: 1,
                delay: 1,
                duration: 2
            })
        },
    }
});