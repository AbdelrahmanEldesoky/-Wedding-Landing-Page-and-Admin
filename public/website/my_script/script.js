

var elements = document.querySelectorAll('.autoplay_m');
var numberOfElements_one = elements.length;

if(numberOfElements_one === 1){
    $('.autoplay').slick({
        dots: false,
              prevArrow :false,
              slidesToShow: 1,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  infinite: false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              prevArrow :false,
            }
          },
          {
            breakpoint: 775,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
        prevArrow: "<div  style='color: #388F75;margin:auto ;font-size: 49px;' ><i class='fa-regular fa-circle-left'></i></div>",
        nextArrow: "<div style='color: #388F75;font-size: 49px; margin:auto ;' ><i class='fa-regular fa-circle-right'></i></div>",
    });

}
else if (numberOfElements_one === 2 ) {
    $('.autoplay').slick({
        dots: false,
              prevArrow :false,
              slidesToShow: 2,
                  slidesToScroll: 0,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  infinite: false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              prevArrow :false,
            }
          },
          {
            breakpoint: 775,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
        prevArrow: "<div  style='color: #388F75;margin:auto ;font-size: 49px;' ><i class='fa-regular fa-circle-left'></i></div>",
        nextArrow: "<div style='color: #388F75;font-size: 49px; margin:auto ;' ><i class='fa-regular fa-circle-right'></i></div>",
    });

}

else{
    $('.autoplay').slick({
        dots: false,
              prevArrow :false,
              slidesToShow: 3,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  infinite: false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              prevArrow :false,
            }
          },
          {
            breakpoint: 775,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
        prevArrow: "<div  style='color: #388F75;margin:auto ;font-size: 49px;' ><i class='fa-regular fa-circle-left'></i></div>",
        nextArrow: "<div style='color: #388F75;font-size: 49px; margin:auto ;' ><i class='fa-regular fa-circle-right'></i></div>",
    });
}


var elements = document.querySelectorAll('.autoplay_two_m');
var numberOfElements = elements.length;

 if(numberOfElements === 1){
    $('.autoplay_two').slick({
        dots: false,
              prevArrow :false,
              slidesToShow: 1,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  infinite: false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              prevArrow :false,
            }
          },
          {
            breakpoint: 775,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
        prevArrow: "<div  style='color: #388F75;margin-top:25% ;font-size: 49px;' ><i class='fa-regular fa-circle-left'></i></div>",
        nextArrow: "<div style='color: #388F75;font-size: 49px; margin-top:25% ;' ><i class='fa-regular fa-circle-right'></i></div>",
    });

}
else if (numberOfElements === 2 ) {
    $('.autoplay_two').slick({
        dots: false,
              prevArrow :false,
              slidesToShow: 2,
                  slidesToScroll: 0,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  infinite: false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              prevArrow :false,
            }
          },
          {
            breakpoint: 775,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
        prevArrow: "<div  style='color: #388F75;margin-top:25% ;font-size: 49px;' ><i class='fa-regular fa-circle-left'></i></div>",
        nextArrow: "<div style='color: #388F75;font-size: 49px; margin-top:25% ;' ><i class='fa-regular fa-circle-right'></i></div>",
    });

}

else{
    $('.autoplay_two').slick({
        dots: false,
              prevArrow :false,
              slidesToShow: 3,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 2000,
                  infinite: false,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              prevArrow :false,
            }
          },
          {
            breakpoint: 775,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
        prevArrow: "<div  style='color: #388F75;margin-top:25% ;font-size: 49px;' ><i class='fa-regular fa-circle-left'></i></div>",
        nextArrow: "<div style='color: #388F75;font-size: 49px; margin-top:25% ;' ><i class='fa-regular fa-circle-right'></i></div>",
    });
}


// var elements = document.querySelectorAll('.demo-card ');
// var demo_card = elements.length;
// if(demo_card == 4){
//     styleElement.textContent = `
//     .demo-card-wrapper {
//         height: 1133px !important;
//     }
//   `;
// }



