$(function () {
  const elem = document.querySelector(".mansory");
  new Masonry(elem, {
    itemSelector: ".mansory-item",
    columnWidth: 200,
    gutter: 20,
    columnWidth: ".mansory-sizer",
    presentPosition: true,
  });
  $(".btn-to-top").click(function () {
    $("html", "body").animate(
      {
        scrollTop: 0,
      },
      1500,
      "easeInOutExpo"
      //untuk menaikan keats top
    );
  });
  AOS.init();

  const portofolioIsotope = $(".portofolio-container").isotope({
    itemSelector: ".portofolio-item",
  });

  $(".portofolio-filters li").click(function () {
    $(".portofolio-filters li").removeClass("filter-active");
    $(".portofolio-filters li").removeClass("text-white");
    $(this).addClass("filter-active");    
    $(this).addClass("text-white");
    //agar bacaam dibawah pportofolio bisa berubah bg nya

    portofolioIsotope.isotope({
      filter: $(this).data("filter"),
    });

    AOS.init();
  });
});
// ini didapat dari web manosry dengan scrip yg ditaro di paling bawah

// $(window).load(function(){
//   var container = $(".mansory");
//     container.imagesLoaded(function(){
//       container.mainsory({
//         itemSelector: ".mansory-item",
//         columnWidth: 200,
//         gutter : 20,
//         columnWidth : ".mansory-sizer",
//         presentPosition : true
//       });
//     });

// fungsi agar tulisan clinet dapat mengikuti frame
