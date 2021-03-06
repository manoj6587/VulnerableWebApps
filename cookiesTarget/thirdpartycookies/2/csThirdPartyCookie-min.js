/**
 * Copyright (C) 2014 CrowdSurge www.crowdsurge.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
 * BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
var csThirdPartyCookie=function(){"use strict";function t(e,t){return decodeURIComponent(((new RegExp("[?|&]"+e+"="+"([^&;]+?)(&|#|;|$)")).exec(t)||["",""])[1].replace(/\+/g,"%20"))||null}function n(){var t=new Date;t.setDate(t.getDate()+2);document.cookie=e.thirdPartyCookieName+"=1;expires="+t.toUTCString()+"; path=/"}function r(){return document.cookie.indexOf(e.thirdPartyCookieName)>-1}function i(){var t=new RegExp("[?|&]"+e.returnUriParameter+"=1","i");return document.referrer.search(t)>0}function s(){console.log("Cookies must be enabled");return false}function o(){var t=[e.returnUriKey+"="+encodeURIComponent(document.referrer),e.frameUriKey+"="+encodeURIComponent(window.location)];window.top.location.href="//"+window.location.host+e.pathToCookieSetter+"?"+t.join("&")}function u(){return window.top!==window.self}function a(){var n=t(e.returnUriKey,location.search);if(n!=null){n+=(n.split("?")[1]?"&":"?")+e.returnUriParameter+"=1";if(e.retainedUriParameters.length){var r=t(e.frameUriKey,location.search);for(var i=0;i<e.retainedUriParameters.length;i++){var s=e.retainedUriParameters[i];var o=t(s,r);if(o!=null){if(e.retainedUriParameterMapping[s]){s=e.retainedUriParameterMapping[s]}n+="&"+s+"="+o}}}}window.location.href=n}function f(){if(!u()){return true}if(r()){return true}if(i()){return s()}n();if(r()){return true}o()}function l(){n();a()}var e={thirdPartyCookieName:"cs_third_party_accept",returnUriParameter:"cookie_attempted",pathToCookieSetter:"/store/js/default/third_party_cookie_setter.html",returnUriKey:"return_url",frameUriKey:"frame_url",retainedUriParameters:["eventid","descid"],retainedUriParameterMapping:{eventid:"event",descid:"desc"}};return{check:f,setAndReturn:l}}