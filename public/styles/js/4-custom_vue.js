var colors=[
"#00a99d",
"#c99d66",
"#a99800",
"#3a994c",
"#8159af",
"#65c18a",
"#b7a36a",
"#ab3124",
"#0ec2b9",
"#28ab24",
"#7e7a99",
"#7a9984",
"#998f7a",
"#e3a17d",
"#31749e",
"#5f8999",
"#c77e3e",
"#f4702e",
"#e85497",
"#8bcf55",
"#a1a10e",
"#8a7265",
"#dea26d",
"#3ccf5a",
"#96b59d",
"#69757d",
"#6a818f",
"#6a8f79",
"#4fabb0",
"#6c9b48",
"#e06969",
"#a2b1ba",
"#adb046",
"#9e6c3f",
"#d986b7",
"#9bc97e",
"#4a21ff",
];

function ChangeBgColor(){
     var randomnumber=Math.floor(Math.random()*colors.length);
     $("body").css("background-color",colors[randomnumber]);
}

$(document).ready(function(){
   ChangeBgColor();
});

var replaceDigits = function () {
    var map =
        [
            "&\#1776;", "&\#1777;", "&\#1778;", "&\#1779;", "&\#1780;",
            "&\#1781;", "&\#1782;", "&\#1783;", "&\#1784;", "&\#1785;"
        ]
    // document.body.innerHTML =
    //     document.body.innerHTML.replace(
    //         /\d(?=[^<>]*(<|$))/g,
    //         function ($0) { return map[$0] }
    //     );
        $(".loading").hide();
}

window.onload = replaceDigits;

