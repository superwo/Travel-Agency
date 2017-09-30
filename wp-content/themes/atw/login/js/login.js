jQuery(function()  {
  jQuery('body').vegas({
    slides: [
      {src: login_images.theme_path + '/pic1.jpg'},
      {src: login_images.theme_path + '/pic2.jpg'},
      {src: login_images.theme_path + '/pic3.jpg'}
    ],
    overlay: login_images.theme_path + '/overlays/05.png',
    transition: ['fade', 'zoomOut', 'swirlLeft']
  });
});
