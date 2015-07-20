jQuery(document).ready(function () {

  var timelineBlocks = $('.cd-timeline-block'),
    offset = 0.8;

  //hide timeline blocks which are outside the viewport
  hideBlocks(timelineBlocks, offset);

  //on scolling, show/animate timeline blocks when enter the viewport
  $(window).on('scroll', function(){
    (!window.requestAnimationFrame) 
      ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
      : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
  });

  function hideBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
    });
  }

  function showBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
    });
  }
  // marqueeInit({
  //   uniqueid: 'mycrawler',
  //   style: {
  //     'padding': '2px',
  //     'width': '100%',
  //     'height': '180px'
  //   },
  //   inc: 5, //speed - pixel increment for each iteration of this marquee's movement
  //   mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
  //   moveatleast: 2,
  //   neutral: 150,
  //   savedirection: true,
  //   random: true
  // });

  //   jQuery( 'nav.main-nav li.has-dropdown' ).hover(
  //       function(){
  //           jQuery(this).children('ul.dropdown').slideDown(200);
  //       },
  //       function(){
  //           jQuery(this).children('ul.dropdown').slideUp(200);
  //       }
  //   );

  //   jQuery('a.sitemap-link').on('click', function(e) {
		// var offset = jQuery(this).offset().top;
		// jQuery('body,html').animate({ scrollTop: offset }, 900); 
  //   	jQuery('.sitemap-list').slideToggle(200);
  //   });

});
// $(function(){
//     $('.fadein img:gt(0)').hide();
//     setInterval(function(){
//       $('.fadein :first-child').fadeOut('slow')
//          .next('img').fadeIn('slow')
//          .end().appendTo('.fadein');}, 
//       5000);
 
// });