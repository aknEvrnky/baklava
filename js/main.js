//Headerin hep en üstte kalması
var $window = $(window);
$window.on('scroll', function() {
	var scroll = $window.scrollTop();
	if (scroll < 380) {
		$(".Header").removeClass("sticky");
	}else{
		$(".Header").addClass("sticky");
	}
});

//lightbox ayarlamalar

lightbox.option({
    'positionFromTop': 150
  });

//nav content togglerı
$(".Header-nav-toggler").on("click", function() {

    if ($(".Header-nav-mobile").is(".is-show")) {

        $(".Header-nav-mobile").removeClass("is-show");


    } else {
        $(".Header-nav-mobile").addClass("is-show");
    }
});

// owl carosuel tanımlamaları

$('.Slider-owl').owlCarousel({
    loop:true,
    nav:false,
    dots: true,
    items: 1,
    margin: 31
});

$('.sidebar-owl').owlCarousel({
    loop:true,
    nav:false,
    dots: true,
    autoplay:true,
    autoplayHoverPause:true,
    items: 1
});


$('.Slider-down-owl').owlCarousel({
    loop:true,
    nav:false,
    dots: false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,

    mouseDrag:false,
    touchDrag:false,
    margin: 10,

    responsive:{
        0:{
            items:2,
        },
        576:{
            items:3,
        },
        768:{
            items:4,
        },
        992:{
            items:5,
        },
        1200:{
            items:7,
        }
    }
});

$('.benzer-owl').owlCarousel({
    loop:false,
    nav:false,
    dots: true,
    dotsEach: true,
    items: 4,
    margin: 20,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        768:{
            items:3
        },
        992:{
            items:4
        }
    }

});

$('.urun-owl').owlCarousel({
    loop:false,
    nav:false,
    dots: true,
    autoplay:false,
    mouseDrag:false,
    touchDrag:false,
    items: 1,
    onInitialized: callback

});

if ($('.Urun-aciklama .content:nth-child(2)').is('show')) {

    
}



//URUN DETAY.PHP

//slayttaki item sayısını almak icin değişken yarat
var items;
function callback(event) {

    //item sayısnı değişkene ata
    items= event.item.count;

    //owl kutuphanelerinden gelen boş span tagini sil
    $('.Urun-detay .owl-dot span').remove();
    //owl dotın içine img tagi yerleştir.
    $('.Urun-detay .owl-dot').prepend('<img class="urun-foto-alt img-fluid" src="" />');

    //deminki image tagının içine yerleştirmek icin src al.
    var getSrc;
    var getAlt;

    for (var i=1; i<= items; i++) {

        //for dongusu ile itemlerin src lerini cekip, img lere yerleştriyirouz.
        getSrc = $('.owl-stage .owl-item:nth-child(' + i +') img').attr("src");
        getAlt = $('.owl-stage .owl-item:nth-child(' + i +') img').attr("alt");

        $('.Urun-detay .owl-dot:nth-child('+ i +') img').attr("src", getSrc);
        $('.Urun-detay .owl-dot:nth-child('+ i +') img').attr("alt", getAlt);
        
    }
}


//ürün zoomu için gerekli
$('.Urun-detay .owl-stage-outer').prepend('<div class="owl-container"><i class="fas fa-search-plus fa-2x"></i></div>');


//active buton js

$('.Urun-aciklama .button-container button').click(function(){

    //.not() fonksiyonunu kullanamadım burda anlamadım. Geçici çözümüm bu oldu.
    if($(this).is('.active')) {
        
    }
    else {
        $('.Urun-aciklama .button-container button').removeClass('active');
        $(this).addClass('active');
    }

});


$('.Urun-aciklama .button-container .content-selector:nth-child(1)').click(function(){


    $('.Urun-aciklama .content').removeClass('show');
    $('.Urun-aciklama .content:nth-child(1)').addClass('show');

    
});


$('.Urun-aciklama .button-container .content-selector:nth-child(2)').click(function(){

    $('.Urun-aciklama .content').removeClass('show');
    $('.Urun-aciklama .content:nth-child(2)').addClass('show');

    $('.yorum-owl').owlCarousel({
        loop:false,
        nav:false,
        dots: true,
        dotsEach: true,
        items: 1,
        margin:10,
        autoplay: true,
        autoplayHoverPause: true,
        
    
    });

    
});




/** content wrapper */

var contentWrapperFloatLeftImage = $('.content-wrapper img[style="float: left;"]');

contentWrapperFloatLeftImage.addClass('left-image');
contentWrapperFloatLeftImage.parent('a').addClass('float-left');

var contentWrapperFloatRightImage = $('.content-wrapper img[style="float: right;"]');

contentWrapperFloatRightImage.parent('a').addClass('float-right');
contentWrapperFloatRightImage.addClass('right-image');

/** content wrapper */


//SEPET.PHP fatura tipi - rezistansmarket.com dan alındı

$('select[name="tax_type"]').change(function () {
    var val = $(this).val();
    $('.firm-area, .personal-area').hide();
    $('.firm-area input, .personal-area input').removeAttr('required');
    var $area = false;
    if (val == 2) {
        $area = $('.firm-area');
    } else if (val == 1) {
        $area = $('.personal-area');
    }
    if (!$area)
        return false;
    $area.fadeIn();
    $area.find('input').attr('required', true);
});

//
// yorum satırı



