//controller
var controller = new ScrollMagic.Controller({vertical:false});

//Tween
var song = TweenMax.from("#song",2,{opacity:0,rotation:-100,ease:Power3.easeInOut})

var textTwo = TweenMax.from(".container-text-two",1,{opacity:0, ease:Power2.easeInOut})
var cardTwo = TweenMax.from(".card-two",1.5,{opacity:0,top :-300,ease: Power2.easeInOut})
var backgroundOneTwo = TweenMax.from(".background-1",1,{opacity:0,left :-300,rotation:20,ease: Power2.easeInOut})
var backgroundTwoTwo = TweenMax.from(".background-2",1,{opacity:0,left:-300,rotation:-30,ease: Power2.easeInOut})

var slideThree = TweenMax.from(".three",2,{opacity:0,top:-300,ease: Power2.easeInOut})
var cardThree = TweenMax.from(".card-three",2,{opacity:0,right :-300,ease: Power2.easeInOut})
var textThree = TweenMax.from(".container-text-three",1,{opacity:0,ease: Power2.easeInOut})
var cardTwoThree = TweenMax.from(".avm",1,{opacity:0,left:-300,ease: Power2.easeInOut})

var slideFour = TweenMax.from(".four",1,{opacity:0,right:-300,ease:Power2.easeInOut})
var textFour = TweenMax.from(".container-text-four",1,{opacity:0,bottom:-200,ease:Power2.easeInOut})
var cardFour = TweenMax.from(".card-four",1.5,{opacity:0,top :-300,ease: Power2.easeInOut})


//scene scrollmagic
var sceneSong = new ScrollMagic.Scene({triggerElement:".one"})
                                  .triggerHook(1)
                                  .setTween(song)
                                  .reverse(false)
                                  .addTo(controller)


var sceneTextTwo = new ScrollMagic.Scene({triggerElement:".two"})
                                  .triggerHook(0.7)
                                  .setTween(textTwo)
                                  .reverse(false)
                                  .addTo(controller)


var sceneCardTwo = new ScrollMagic.Scene({triggerElement:".container-text-two"})
                                  .triggerHook(0.7)
                                  .setTween(cardTwo)
                                  .reverse(false)
                                  .addTo(controller)

var sceneBackgroundOneTwo = new ScrollMagic.Scene({triggerElement:".background-1"})
                                  .triggerHook(0.6)
                                  .setTween(backgroundOneTwo)
                                  .reverse(false)
                                  .addTo(controller)
                                  
                                  
var sceneBackgroundTwoTwo = new ScrollMagic.Scene({triggerElement:".background-2"})
                                    .triggerHook(0.8)
                                    .setTween(backgroundTwoTwo)
                                    .reverse(false)
                                    .addTo(controller)





var sceneSlideThree = new ScrollMagic.Scene({triggerElement:".background-2"})
                                    .triggerHook(0.4)
                                    .setTween(slideThree)
                                    .reverse(false)
                                    .addTo(controller)

var sceneCardThree = new ScrollMagic.Scene({triggerElement:".background-2"})
                                    .triggerHook(0.5)
                                    .setTween(cardThree)
                                    .reverse(false)
                                    .addTo(controller)

var sceneTextThree = new ScrollMagic.Scene({triggerElement:".card-three"})
                                    .triggerHook(0.2)
                                    .setTween(textThree)
                                    .reverse(false)
                                    .addTo(controller)

var sceneCardTwoThree = new ScrollMagic.Scene({triggerElement:".card-three"})
                                    .triggerHook(0.3)
                                    .setTween(cardTwoThree)
                                    .reverse(false)
                                    .addTo(controller)



var sceneSlideFour = new ScrollMagic.Scene({triggerElement:".avm"})
                                    .triggerHook(0.3)
                                    .setTween(slideFour)
                                    .reverse(false)
                                    .addTo(controller)

var sceneTextFour = new ScrollMagic.Scene({triggerElement:".avm"})
                                    .triggerHook(0.3)
                                    .setTween(textFour)
                                    .reverse(false)
                                    .addTo(controller)

var sceneCardFour = new ScrollMagic.Scene({triggerElement:".avm"})
                                    .triggerHook(0.3)
                                    .setTween(cardFour)
                                    .reverse(false)
                                    .addTo(controller)