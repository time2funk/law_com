$(document).ready(function(){$("#pthird .slider")&&(console.log("slick"),$("#pthird .slider").slick({dots:!0,infinite:!1,centerMode:!0,arrows:!1,slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:2e3,responsive:[{breakpoint:1440,settings:{centerPadding:"40px",centerMode:!0,arrows:!1,slidesToShow:3}},{breakpoint:768,settings:{centerPadding:"40px",centerMode:!0,arrows:!1,slidesToShow:2}},{breakpoint:480,settings:{centerPadding:"40px",centerMode:!0,arrows:!1,slidesToShow:1}}]})),$("#header-about .quote")&&(console.log("slick2"),$("#header-about .quote").slick({nextArrow:'<i class="fa fa-angle-right"></i>',prevArrow:'<i class="fa fa-angle-left"></i>',centerPadding:"0px",dots:!1,infinite:!0,centerMode:!0,arrows:!0,slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:2e3}))});