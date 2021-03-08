const bootstrap = require('bootstrap')
const $ = require('jquery');

const throttle = (fn, delay) => {
    let lastCalled = 0;
    return (...args) => {
        let now = new Date().getTime();
        if(now - lastCalled < delay) {
            return;
        }
        lastCalled = now;
        return fn(...args);
    }
}


//Elements
let header = $('header.header');
let headerBottom = $('header .header-bottom');

let checkHeader = throttle(() => {
    let scrollPosition = Math.round(window.scrollY);
    console.log(scrollPosition);
    if(scrollPosition > 0) {
        headerBottom.addClass('almost-dark');
    } else  {
        headerBottom.removeClass('almost-dark');
    }
}, 0)

window.addEventListener('scroll', checkHeader);

