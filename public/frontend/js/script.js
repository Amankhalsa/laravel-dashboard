$('.navTrigger').click(function(){
  $('html').toggleClass('actNav');
})

$('.backDrop').click(function(){
  $('html').removeClass('actNav actSearch');
})


var minVal = 1, maxVal = 20; // Set Max and Min values
// Increase product quantity on cart page
$(".increaseQty").on('click', function(){
		var $parentElm = $(this).parents(".qtySelector");
		$(this).addClass("clicked");
		setTimeout(function(){
			$(".clicked").removeClass("clicked");
		},100);
		var value = $parentElm.find(".qtyValue").val();
		if (value < maxVal) {
			value++;
		}
		$parentElm.find(".qtyValue").val(value);
});
// Decrease product quantity on cart page
$(".decreaseQty").on('click', function(){
	var $parentElm = $(this).parents(".qtySelector");
	$(this).addClass("clicked");
	setTimeout(function(){
		$(".clicked").removeClass("clicked");
	},100);
	var value = $parentElm.find(".qtyValue").val();
	if (value > 1) {
		value--;
	}
	$parentElm.find(".qtyValue").val(value);
});


var swiper = new Swiper(".prosliderThumb", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".proSliderMain", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
$('.searchTrigger, .searchCloseTrigger').click(function(){
  $('html').toggleClass('actSearch');
})


var paneContainer = document.querySelector('.proDetailRightCol');
$(".productSlider .swiper-slide").each(function(){
  new Drift($(this).find(".demo-trigger")[0], {
    paneContainer: paneContainer,
    inlinePane: false,
  });
});
