const allCircles = document.querySelector('.circle-article');
const allArticles = document.querySelector('.article-timeline');

const controller = new ScrollMagic.Controller()

allArticles.forEach(article => {

    for (i = 0; i < allCircles.length; i++) {

        if(allCircles[i].getAttribute('data-anim') === article.getAttribute('data-anim')){

            let tween = gsap.from(article, {y: -50, opacity: 0, duration: 0.5})

            let scene = new ScrollMagic.Scene({
                triggerElement: allCircles[i],
                reverse: true
            })
            setTween(tween)
            .addIndicators()
            .addTo(controller)
        }
    }
});