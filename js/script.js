/* 
 * script.js
 * 
 * Copyright (c) 2011 Arash Mousavi <mousavi.arash@gmail.com>. 
 * 
 * This file is part of MLTheme.
 * 
 * MLTheme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * MLTheme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with MLTheme. If not, see <http ://www.gnu.org/licenses/>.
 */

function makeButtons() {
    $( "ul[class=mainMenu] a" ).button();
    $( "ul[class=mainMenu] a" ).click(function() { return false; });
    $("div[id=icons]").hover(
        $(this).addClass('ui-state-hover'),
        $(this).removeClass('ui-state-hover')
        );
}

function makeTabs() {
    $("#tabs").tabs();
}

function makeAccordion() {
    $( "#accordion" ).accordion();
}

$("document").ready(function() {
    makeButtons();
    makeTabs();
    makeAccordion();
});