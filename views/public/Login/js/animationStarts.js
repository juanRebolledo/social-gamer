$(document).ready(function(){
    for (let i=0 ;  i<200 ;i++){
        const positionLeft = Math.random()*$(document).width();
        const positionTop = Math.random()*($(document).height()) / 1.5;
        const opacity = Math.random();
        const parpadeo = Math.random();
        let objStar;
        if(parpadeo < 0.3)
            objStar = `<div class='star animationOne' style='left: ${positionLeft}px; top:${positionTop}px; opacity:${opacity}'> </div>`;
        else if(parpadeo < 0.6)
            objStar = `<div class='star animationTwo' style='left: ${positionLeft}px; top:${positionTop}px; opacity:${opacity}'> </div>`;
        else if(parpadeo < 0.9)
            objStar = `<div class='star animationThree' style='left: ${positionLeft}px; top:${positionTop}px; opacity:${opacity}'> </div>`;
        $(".bg").append(objStar);
    }
});
