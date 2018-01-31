"use strict";

import $ from 'jquery';
import cttalpa from './lib/cttalpa';
import whatInput from 'what-input';

window.$ = $;

// import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below

import './lib/foundation-explicit-pieces';
import {FoundationModules} from "./lib/foundation-explicit-pieces";

$(document).foundation();


$(document).ready(() => {
    const $gotoNextSection=$('#go-to-next-section');

    if($gotoNextSection.length)
    {
        cttalpa.moveUpAndDown($gotoNextSection);
        cttalpa.animateGotoSection();
    }
    cttalpa.scroll();
    $('.scroll-btn a').on("click", cttalpa.jump.call($(this)));

    if (location.hash) {
        setTimeout(() => {
            $('html, body').scrollTop(0).show();
            cttalpa.jump.call($(this));
        }, 0);
    } else {
        $('html, body').show();
    }

   


});











